
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
<body>
    
    
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
    </style>
</head>

<body>
    <header>
        <h1>South Goa Advocates Association</h1>
        <h2>Margao,Goa</h2>
        <h3>103 | GOA | 94</h3>
    </header>
    <main>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../src/index.html">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        
      </ul>
    </div>
  </div>
</nav>
<div class="container d-flex justify-content-end mb-2s">
                <div class="form-outline">
                    <input type="search" id="form1" class="form-control" placeholder="Search"/>
                </div>
                <button type="button" style="width:40px; height:40px; display:flex; align-items:center;justify-content:center;" class="btn btn-primary ms-4 ">
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
                        <th>Bar Registration Number of Advocate</th>
                        <th>Name of Advocate</th>
                         <th>Full name of Advocate</th>
                          <th>Name of Advocate in Local Language</th> 
                          <th>Date of Birth of Advocate</th>
                           <th>Gender of Advocate</th> 
                           <th>Address of Advocate</th> 
                           <th>Address of Advocate in Local Language</th> 
                           <th>Email of Advocate</th> 
                           <th>Mobile number of Advocate</th> 
                           <th>Phone Number of Advocate</th> 
                           <th>Fax Number</th>
                            <th>Office Address of Advocate</th>
                             <th>Pin Code</th> 
                             
                        <th>District</th>
                        <th>Taluka</th>
                        <th>Office Address of Lawyer in local language</th>
                    </tr>
                    <?php
                    $conn = mysqli_connect("localhost", "root", "", "db_sgaa");
                    $sql = "SELECT * FROM members";
                    $result = $conn->query($sql);
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr class='data-row'>";
                        echo "<td>" . $row["COL 1"] . "</td>";
                        echo "<td>" . $row["COL 2"] . "</td>";
                        echo "<td>" . $row["COL 3"] . "</td>";
                        echo "<td>" . $row["COL 4"] . "</td>";
                        echo "<td>" . $row["COL 5"] . "</td>";
                        echo "<td>" . $row["COL 6"] . "</td>";
                        echo "<td>" . $row["COL 7"] . "</td>";
                        echo "<td>" . $row["COL 8"] . "</td>";
                        echo "<td>" . $row["COL 9"] . "</td>";
                        echo "<td>" . $row["COL 10"] . "</td>";
                        echo "<td>" . $row["COL 11"] . "</td>";
                        echo "<td>" . $row["COL 12"] . "</td>";
                        echo "<td>" . $row["COL 13"] . "</td>";
                        echo "<td>" . $row["COL 14"] . "</td>";
                        echo "<td>" . $row["COL 15"] . "</td>";
                        echo "<td>" . $row["COL 16"] . "</td>";
                        echo "<td>" . $row["COL 17"] . "</td>";
                        echo "<td>" . $row["COL 18"] . "</td>";
                        echo "</tr>";
                    }
                    ?>
                </table>
                <?php
    ?>
                
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
