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

// Generate HTML table
$html = '<table border="1">';
foreach ($data as $row) {
    $html .= '<tr>';
    foreach ($row as $cell) {
        $html .= '<td>' . htmlspecialchars($cell) . '</td>';
    }
    $html .= '</tr>';
}
$html .= '</table>';

// Output the HTML to an HTML file (e.g., table_output.html)
$file = fopen('gay.html', 'w');
fwrite($file, $html);
fclose($file);

echo "Table generated successfully and saved in 'table_output.html'";
?>
