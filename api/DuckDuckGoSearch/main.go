package main

import (
	"errors"
	"io"
	"os"
	"net/http"
	"net/url"
	"strconv"
	"github.com/fvbock/endless"
	"github.com/gin-gonic/gin"
	"github.com/anaskhan96/soup"
)

type Search struct {
	Query     string `json:"query"`
	Region    string `json:"region"`
	TimeRange string `json:"time_range"`
	Limit     int    `json:"limit"`
}

type Result struct {
	Title   string `json:"title"`
	Link    string `json:"link"`
	Snippet string `json:"snippet"`
}

type readCloser struct {
	s string
}

func Handler(w http.ResponseWriter, r *http.Request) {
    router := gin.Default()

    router.GET("/ping", func(c *gin.Context) {
        c.String(200, "pong")
    })

    router.POST("/search", func(c *gin.Context) {
        // Map request to Search struct
        var search Search
        if err := c.ShouldBindJSON(&search); err != nil {
            c.JSON(400, gin.H{"error": err.Error(), "details": "Could not bind JSON"})
            return
        }
        // Ensure query is set
        if search.Query == "" {
            c.JSON(400, gin.H{"error": "Query is required"})
            return
        }
        // Get results
        results, err := Get_results(search)
        if err != nil {
            c.JSON(500, gin.H{"error": err.Error()})
            return
        }
        // Limit
        if search.Limit > 0 && search.Limit < len(results) {
            results = results[:search.Limit]
        }
        // Set response Content-Type to application/json
        c.Header("Content-Type", "application/json")
        // Return results
        c.JSON(200, results)
    })

    router.GET("/search", func(c *gin.Context) {
        // Map request to Search struct
        var search Search
        // Get query
        search.Query = c.Query("query")
        // Get region
        search.Region = c.Query("region")
        // Get time range
        search.TimeRange = c.Query("time_range")
        if search.Query == "" {
            c.JSON(400, gin.H{"error": "Query is required"})
            return
        }
        // Get limit and check if it's a number
        limit := c.Query("limit")
        if limit != "" {
            if _, err := strconv.Atoi(limit); err != nil {
                c.JSON(400, gin.H{"error": "Limit must be a number"})
                return
            }
            search.Limit, _ = strconv.Atoi(limit)
        }
        // Get results
        results, err := Get_results(search)
        if err != nil {
            c.JSON(500, gin.H{"error": err.Error()})
            return
        }
        // Shorten results to limit if limit is set
        if search.Limit > 0 && search.Limit < len(results) {
            results = results[:search.Limit]
        }
        // Set response Content-Type to application/json
        c.Header("Content-Type", "application/json")
        // Return results
        c.JSON(200, results)
    })

    router.ServeHTTP(w, r)
}

// URL encode form data
func Url_encode(formdata map[string]string) string {
	var form string
	for key, value := range formdata {
		form += key + "=" + url.QueryEscape(value) + "&"
	}
	return form
}

func StringToReadCloser(s string) *readCloser {
	return &readCloser{s: s}
}

func (r *readCloser) Read(p []byte) (n int, err error) {
	n = copy(p, r.s)
	r.s = r.s[n:]
	if n == 0 {
		err = io.EOF
	}
	return
}

func (r *readCloser) Close() error {
	return nil
}

func get_html(search Search) (string, error) {
	var base_url string = "html.duckduckgo.com"
	// POST form data
	var formdata = map[string]string{
		"q":  search.Query,
		"df": search.TimeRange,
		"kl": search.Region,
	}
	// URL encode form data
	var form string = Url_encode(formdata)
	// Create POST request
	var request = http.Request{
		Method: "POST",
		URL: &url.URL{
			Host:   base_url,
			Path:   "/html/",
			Scheme: "https",
		},
		Header: map[string][]string{
			"Content-Type": {"application/x-www-form-urlencoded"},
			"Accept":       {"text/html"},
			"User-Agent":   {"Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:109.0) Gecko/20100101 Firefox/111.0"},
		},
		Body: StringToReadCloser(form),
	}
	// Send POST request
	var client = http.Client{}
	var response, err = client.Do(&request)
	if err != nil {
		return "", err
	}
	// Read response body
	bodyBytes, err := io.ReadAll(response.Body)
	if err != nil {
		return "", err
	}
	// Check status code
	if response.StatusCode != 200 {
		return "", errors.New("Status code: " + strconv.Itoa(response.StatusCode) + " Body: " + string(bodyBytes))
	}
	// Close response body
	err = response.Body.Close()
	if err != nil {
		return "", err
	}
	return string(bodyBytes), nil
}

func parse_html(html string) ([]Result, error) {
	// Results is an array of Result structs
	var final_results []Result = []Result{}
	// Parse
	doc := soup.HTMLParse(html)
	// Find each result__body
	result_bodies := doc.FindAll("div", "class", "result__body")
	// Loop through each result__body
	for _, item := range result_bodies {
		// Get text of result__title
		var title string = item.Find("a", "class", "result__a").FullText()
		// Get href of result__a
		var link string = item.Find("a", "class", "result__a").Attrs()["href"]
		// Get text of result__snippet
		var snippet string = item.Find("a", "class", "result__snippet").FullText()
		// Append to final_results
		final_results = append(final_results, Result{
			Title:   title,
			Link:    link,
			Snippet: snippet,
		})
	}
	return final_results, nil
}

func Get_results(search Search) ([]Result, error) {
	html, err := get_html(search)
	if err != nil {
		return nil, err
	}
	results, err := parse_html(html)
	if err != nil {
		return nil, err
	}
	return results, nil
}
