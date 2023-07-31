// script.js
const db = firebase.firestore();

// Fetch the JSON data from Firebase Firestore and populate the table
db.collection("members")
    .get()
    .then((querySnapshot) => {
        const membersData = [];
        querySnapshot.forEach((doc) => {
            membersData.push(doc.data());
        });

        // Extract the column names from the first object in the JSON data
        const columnNames = Object.keys(membersData[0]);

        // Populate the table headers
        const tableHeaders = document.getElementById('tableHeaders');
        columnNames.forEach(columnName => {
            const th = document.createElement('th');
            th.textContent = columnName;
            tableHeaders.appendChild(th);
        });

        // Populate the table rows
        const tbody = document.getElementById('membersData');
        membersData.forEach(member => {
            const row = document.createElement('tr');
            columnNames.forEach(columnName => {
                const td = document.createElement('td');
                td.textContent = member[columnName];
                row.appendChild(td);
            });
            tbody.appendChild(row);
        });
    })
    .catch((error) => {
        console.log("Error fetching members data:", error);
    });
