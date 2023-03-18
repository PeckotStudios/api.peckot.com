package main

import (
	"os"
	"strconv"
	"github.com/fvbock/endless"
	"github.com/gin-gonic/gin"
	"github.com/acheong08/DuckDuckGo-API/duckduckgo"
	"github.com/acheong08/DuckDuckGo-API/types"
)

func handleRequest(w http.ResponseWriter, r *http.Request) {
    router := gin.Default()

    router.GET("/ping", func(c *gin.Context) {
        c.String(200, "pong")
    })

    router.POST("/search", func(c *gin.Context) {
        // Map request to Search struct
        var search types.Search
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
        results, err := duckduckgo.Get_results(search)
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
        var search types.Search
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
        results, err := duckduckgo.Get_results(search)
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
