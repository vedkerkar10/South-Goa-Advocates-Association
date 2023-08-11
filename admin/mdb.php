<!-- <?php 
$servername = "localhost";
$dusername = "root";
$dpassword = "";
$dbname = "db_sgaa";

$conn = mysqli_connect($servername,$dusername,$dpassword,$dbname);
// $conn = new mysqli('localhost','root','admin');

if($conn) {
    // echo "Connection ok";
}

else {
    echo "Connection failed".mysqli_connect_error();
}
$sql =  "INSERT INTO 'admin' (username,password)VALUES('user1','123')";


$data = mysqli_query($conn,$sql);

if(!mysqli_query($conn,$sql)){
    echo "error: " .mysqli_error($conn);
}

else {
    echo "Inserted succesfully";
}

?> -->