<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Data from CSV</title>
</head>
<body>
    <h1>Data from CSV File</h1>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
        </tr>
        <?php
            // Function to read CSV data and return as an array
            function readCSV($csvFile) {
                $rows = array();
                if (($handle = fopen($csvFile, "r")) !== false) {
                    while (($data = fgetcsv($handle, 1000, ",")) !== false) {
                        $rows[] = $data;
                    }
                    fclose($handle);
                }
                return $rows;
            }

            // CSV file path
            $csvFile = 'Committe_Members.csv';

            // Read CSV data
            $data = readCSV($csvFile);

            // Display data in the HTML table
            foreach ($data as $row) {
                echo '<tr>';
                foreach ($row as $cell) {
                    echo '<td>' . htmlspecialchars($cell) . '</td>';
                }
                echo '</tr>';
            }
        ?>
    </table>
</body>
</html>
