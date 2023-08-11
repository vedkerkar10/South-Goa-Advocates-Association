
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>South Goa Advocates Association</title>
    <link rel="stylesheet" href="../src/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Serif:wght@300&display=swap" rel="stylesheet">
</head>

    
    
</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>South Goa Advocates Association</title>
    <link rel="stylesheet" href="../src/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <style>
        /* Add custom CSS for horizontal scroll */
        .table-container {
            overflow-x: auto;
        }

        /* Optional: Style the table for better visibility */
        table {
            border-collapse: collapse;
            width: 100%;

        }

        th,
        td {
            border: 1px solid #010101;
            padding: 8px;
            text-align: center;
           
        }

        th {
            background-color: #333;
        }

        .navbar {
        background-color: #333; /* Set the background color to a dark color */
        color: white; /* Set the text color to white */
        display: flex;
        justify-content: flex-end; /* Align the content to the right side */
        }
        .navbar-nav {
        margin-right: 20px; /* Add some right margin for the navigation items */
    }
  
    .navbar-nav a {
        color: white; /* Set the anchor text color to white */
        text-decoration: none;
        padding: 10px 15px; /* Add some padding for better appearance */
    }

    .navbar-nav a:hover {
        background-color: #555; /* Add a background color on hover */
    }
    
    header img {
        max-width: 10px;
        margin-right: 1110px;
        margin-top: -10em;
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
<div class="container d-flex justify-content-end mb-2s">
                <div class="form-outline" style="margin-top: 10px;" >
                    <input type="search" id="form1" class="form-control" placeholder="Search"/>
                </div>
                <button type="button" style="margin-top:10px; width:40px; height:40px; display:flex; align-items:center;justify-content:center;" class="btn btn-primary ms-4 ">
                    <span class="material-symbols-outlined">
search
</span>
                </button>
            </div>
        <section class="table-section ">
            <h1 class="text-center">Members List</h1>
            <div class="container table-container">
                <table >
                    <!-- The table headers will be dynamically added by JavaScript -->
                    <tr id="HeadOfTable">
                        <th>Serial No.</th>
                        <th>Name of Advocate</th>
                    </tr>
                    <?php
                    $conn = mysqli_connect("localhost", "root", "", "db_sgaa");
                    $sql = "SELECT * FROM life_member_1";
                    $result = $conn->query($sql);
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr class='data-row'>";
                        echo "<td>" . $row["COL 1"] . "</td>";
                        echo "<td>" . $row["COL 2"] . "</td>";
                        echo "</tr>";
                    }
                    ?>
                </table>

                
       
    
                
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2023 South Goa Advocates Association. All rights reserved.</p>
    </footer>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script> -->
  
</body>

<script>
  document.addEventListener("DOMContentLoaded", function () {
    const searchBar = document.getElementById("form1");
    const tableRows = document.querySelectorAll(".table-container table tbody tr");

    searchBar.addEventListener("input", function () {
      const searchValue = searchBar.value.trim().toLowerCase();

      tableRows.forEach(function (row) {
        const columns = row.querySelectorAll("td");
        let foundMatch = false;
        columns.forEach(function (column) {
          if (column.textContent.trim().toLowerCase().includes(searchValue)) {
            foundMatch = true;
          }
        });

        if (foundMatch) {
          row.style.display = "";
        } else {
          row.style.display = "none";
        }
        document.getElementById('HeadOfTable').style.display=''

      });
    });
  });
</script>

</html>
