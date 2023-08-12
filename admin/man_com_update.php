<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="../src/style.css">
    <title>Admin</title>
</head>
<style>
    .login-card {
        width: 300px;
        margin: 0 auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 10px;
        background-color: #e8e8e8;
        box-shadow: 2px 2px 10px #ccc;
    }

    .card-header {
        text-align: center;
        margin-bottom: 20px
    }

    .card-header .log {
        margin: 0;
        font-size: 24px;
        color: black;
    }

    .form-group {
        margin-bottom: 15px;
    }

    label {
        font-size: 18px;
        margin-bottom: 5px;
    }

    input[type="text"],
    input[type="password"] {
        width: 100%;
        padding: 12px 20px;
        font-size: 16px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        transition: 0.5s;
    }

    input[type="submit"] {
        width: 100%;
        background-color: #333;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #ccc;
        color: black;
    }
</style>
<br><br><br>

<body>
    <section class="content" >
    <div class="left-section" style="margin-left: auto;"> 
        <div class="login-card">
            <div class="card-header">
                <div class="log">Update List</div>
            </div>
            <form action="update_mc.php" method="POST">
                <div class="form-group">
                
                <label for="Sr_No">Sr_No:</label>
                <input required="" name="Sr_No" id="Sr_No" type="text">
                </div>
            <div class="form-group">
                <label for="Name">Name:</label>
                <input required="" name="Name" id="Name" type="text"> 
            </div>
            <div class="form-group">
                
                <label for="Designation">Designation:</label>
                <input required="" name="Designation" id="Designation" type="text">
            </div>
            <div class="form-group">
                <input value="Update" type="submit">
            </div>
        </form>
    </div>
</div>
    
    <div class="right-section" style="margin-right: auto;" >    
    
    <div class="login-card">
        <div class="card-header">
            <div class="log">Delete List</div>
        </div>
        <form action="delete_mc.php" method="POST">
            <div class="form-group">
                
                <label for="Sr_No">Sr_No:</label>
                <input required="" name="Sr_No" id="Sr_No" type="text">
            </div>
            <div class="form-group">
                
                <label for="Name">Name:</label>
                <input required="" name="Name" id="Name" type="text">
            </div>
            <div class="form-group">
                
                <label for="Designation">Designation:</label>
                <input required="" name="Designation" id="Designation" type="text">
            </div>



            <div class="form-group">
                <input value="Delete" type="submit">
            </div>
        </form>
    </div>
    </div>
    </section>
    //delete
    <!-- <div class="login-card">
        <div class="card-header">
            <div class="log">Delete List</div>
        </div>
        <form action="delete_mc.php" method="POST">
            <div class="form-group">
                
                <label for="Sr_No">Sr_No:</label>
                <input required="" name="Sr_No" id="Sr_No" type="text">
            </div>
            <div class="form-group">
                
                <!-- <label for="Name">Name:</label>
                <input required="" name="Name" id="Name" type="text">
            </div>
            <div class="form-group">
                
                <label for="Designation">Designation:</label>
                <input required="" name="Designation" id="Designation" type="text">
            </div> -->

   

    


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
    crossorigin="anonymous"></script>
</html>