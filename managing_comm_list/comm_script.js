// Fetch the data from the Node.js server
fetch('https://vedkerkar10.github.io/South-Goa-Advocates-Association/index.html')
    .then(response => response.json())
    .then(data => {
        const table = document.getElementById('data-table');

        // Create the table header
        const headers = Object.keys(data[0]);
        const headerRow = table.insertRow();
        headers.forEach(header => {
            const th = document.createElement('th');
            th.textContent = header;
            headerRow.appendChild(th);
        });

        // Populate the table with data
        data.forEach(item => {
            const row = table.insertRow();
            Object.values(item).forEach(value => {
                const cell = row.insertCell();
                cell.textContent = value;
            });
        });
    })
    .catch(error => console.error('Error fetching data:', error));
