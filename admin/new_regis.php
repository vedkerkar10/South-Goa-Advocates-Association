<?php 
 include 'db.php';
if(isset($_POST['register'])){
    
    $username = $_POST['username'];
    
    $password = $_POST['password'];
    

    
    $sql = " INSERT INTO `admin` ( `username`, `password`, ) VALUES ('$username','$password')";



    $r = mysqli_query($conn,$sql);

    if($r){
        echo "Inserted succesfully";
    }

    else {
        echo "not inserted";
    }

}
?>