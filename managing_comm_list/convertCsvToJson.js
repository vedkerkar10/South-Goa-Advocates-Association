const fs = require('fs');
const csvParser = require('csv-parser');

const data = [];
fs.createReadStream('Committee_Members.csv')
    .pipe(csvParser())
    .on('data', (row) => {
        data.push(row);
    })
    .on('end', () => {
        fs.writeFileSync('data.json', JSON.stringify(data, null, 2));
        console.log('CSV data converted to JSON successfully!');
    });
