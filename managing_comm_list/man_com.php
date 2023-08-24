<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>South Goa Advocates Association</title>
    <link rel="stylesheet" href="../src/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    
    <style>
    
        table {
            border-collapse: collapse;
            width: 80%;
            margin: 20px auto;
        }

        th,
        td {
            padding: 10px;
            border-bottom: 1px solid #ddd;
            text-align: center; /* Center the content within table cells */
        }

        th {
            background-color: #333;
            color: #fff;
        }
        header img {
        max-width: 10px;
        margin-right: 1110px;
        margin-top: -10em;
    }
        .member {
      display: inline-block;
      text-align: center;
      margin: 10px;
    }

    .member img {
      width: 150px;
      height: 150px;
      border: 2px solid #333;
      border-radius: 50%;
    }

    .member p {
      margin-top: 5px;
      font-weight: bold;
    }
    </style>
</head>


<body style="height: 100vh; display: flex; flex-direction: column; justify-content: space-between;">
    <header>
        <div id="header">
            <h1>SOUTH GOA ADVOCATES ASSOCIATION</h1>
            <h2>Margao,Goa</h2>
        </div>
        <img src="../imgs/t2.png" alt="" class="img-fluid" style="max-width: 150px;">
        <nav class="navbar navbar-expand-lg navbar-light" id="nav-bar">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav" id="homeabout">
                        <li class="nav-item">
                            <a class="nav-link" style="color: white;" aria-current="page"
                                href="../src/index.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a style="color: white;" class="nav-link" href="#">About</a>
                        </li>
                        <li><a style="color: white;" class="nav-link"
                                href="https://twitter.com/AlphaQ12345?s=03">Contact Us</a></li>

                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
    <?php
    $conn = mysqli_connect("localhost", "root", "", "db_sgaa");
    $sql = "SELECT * FROM managing_committee";
    $result = $conn->query($sql);
    ?>
    
    <h2 class="text-center" >Managing Committee Members</h2>
    <?php while ($row = $result->fetch_assoc())
    ?>
  <div class="member" style="margin-left: 45%;" >  
    <img src="../imgs/image.png" alt="Member 1"> 
    <?php
     echo $row['Name'];
   echo 'President';
   echo '</div>';
  ?>
  <br>
  <div class="member" style="margin-left: 17%;">
    <img src="../imgs/image.png" alt="Member 2">
    <p>Vice-President</p>
  </div>
  <div class="member" style="margin-left: 17%;">
    <img src="../imgs/image.png" alt="Member 2">
    <p>m8</p>
  </div>
  <div class="member" style="margin-left: 17%;">
    <img src="../imgs/image.png" alt="Member 2">
    <p>m7</p>
  </div>
  <br>
  <div class="member" style="margin-left: 17%;">
    <img src="../imgs/image.png" alt="Member 2">
    <p>m6</p>
  </div>
  <div class="member" style="margin-left: 17%;">
    <img src="../imgs/image.png" alt="Member 2">
    <p>m5</p>
  </div>
  <div class="member" style="margin-left: 17%;">
    <img src="../imgs/image.png" alt="Member 2">
    <p>m4</p>
   </div>
    <br>
    <div class="member" style="margin-left: 17%;">
    <img src="../imgs/image.png" alt="Member 2">
    <p>m3</p>
    </div>
  <div class="member" style="margin-left: 17%;">
    <img src="../imgs/image.png" alt="Member 2">
    <p>m2</p>
  </div>
  <div class="member" style="margin-left: 17%;">
    <img src="../imgs/image.png" alt="Member 2">
    <p>m1</p>
  </div>
  <br>
  </main>
   

    <footer>
        <p>&copy; 2023 South Goa Advocates Association. All rights reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</body>

</html>