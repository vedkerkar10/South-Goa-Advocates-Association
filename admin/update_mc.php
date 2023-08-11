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
    $newName = $_POST['Name'];
    $newDesignation = $_POST['Designation'];

    $sql = "UPDATE managing_committee SET Name = '$newName', Designation = '$newDesignation' WHERE Sr_no = $idToUpdate";

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

$conn->close();
?>