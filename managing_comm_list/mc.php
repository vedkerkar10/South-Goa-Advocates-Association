<?php
$host = "";
$username = "";
$password = "";
$db_name = "db_sgaa";

$connection = new mysqli($host, $username, $password, $db_name);
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}
?>
<?php
$query = "SELECT * FROM committee_members"; // Replace "table_name" with the actual table name where you imported the CSV data
$result = $connection->query($query);

$data = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}
?>
<?php
$connection->close();
?>
