import fetch from 'node-fetch';
const DDG_BASE_URL = 'https://api.duckduckgo.com/';

export default async (req, res) => {
  const query = req.query.q;
  if (query === undefined) {
    res.status(400).send('Missing search query parameter.');
    return;
  }
  
  const response = await fetch(`${DDG_BASE_URL}?q=${query}&format=json`);
  const data = await response.json();
  
  if(data.Type === 'E') {
    res.status(404).send('No results found.');
    return;
  }

  const results = data.RelatedTopics.map((result) => ({
    title: result.Text,
    url: result.FirstURL,
    description: result.Result
  }));

  res.status(200).send(results);
};
