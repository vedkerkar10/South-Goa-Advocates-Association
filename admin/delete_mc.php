<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_sgaa";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $idToUpdate = $_POST['Sr_No'];
    

    $sql = "DELETE FROM managing_committee WHERE Sr_no = $idToUpdate";

    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

$conn->close();
?>