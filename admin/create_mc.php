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
    $idToInsert = $_POST['Sr_No'];
    $newName = $_POST['Name'];
    $newDesignation = $_POST['Designation'];
    

    $sql = "INSERT INTO managing_committee (Name, Designation) VALUES ('$newName', '$newDesignation')";
    

    if ($conn->query($sql) === TRUE) {
        echo "Record inserted successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

$conn->close();
?>