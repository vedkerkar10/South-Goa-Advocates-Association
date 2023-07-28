const express = require('express');
const csvParser = require('csv-parser');
const fs = require('fs');

const app = express();
const csvFile = 'Final list.csv'; // Replace 'data.csv' with the path to your CSV file

// Enable CORS (Cross-Origin Resource Sharing) to allow frontend to access the API
app.use((req, res, next) => {
    res.setHeader('Access-Control-Allow-Origin', '*');
    next();
});

// Route to fetch the JSON data from the CSV file
app.get('/data', (req, res) => {
    const data = [];

    fs.createReadStream(csvFile)
        .pipe(csvParser())
        .on('data', (row) => {
            data.push(row);
        })
        .on('end', () => {
            res.json(data);
        })
        .on('error', (err) => {
            console.error('Error reading CSV file:', err);
            res.status(500).json({ error: 'Internal Server Error' });
        });
});

// Start the server
const port = 3000; // Replace with your desired port number
app.listen(port, () => {
    console.log(`Server is running on http://localhost:${port}`);
});
