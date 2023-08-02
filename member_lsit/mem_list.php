
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>showing data</title>
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
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <header>
        <h1>South Goa Advocates Association</h1>
        <h2>Margao,Goa</h2>
        <h3>103 | GOA | 94</h3>
    </header>
    <main>
        <section class="table-section">
            <h2>Managing Committee List</h2>
            <div class="table-container">
                <table id="data-table">
                    <!-- The table headers will be dynamically added by JavaScript -->
                    <tr>
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
                        echo "<tr>";
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
      echo "table";
      $conn = mysqli_connect("localhost","root","","db_sgaa");
       $sql = "SELECT * FROM members";
      $result = $conn->query($sql);
       while ($row = $result->fetch_assoc())
        {
        echo "<li>" . $row["COL 1"] . ": " . $row["COL 2"] . "</li>" ;
        echo "<li>" . $row["COL 3"] . ": " . $row["COL 4"] . "</li>" ;
        echo "<li>" . $row["COL 5"] . ": " . $row["COL 6"] . "</li>" ;
        echo "<li>" . $row["COL 7"] . ": " . $row["COL 8"] . "</li>" ;
        echo "<li>" . $row["COL 9"] . ": " . $row["COL 10"] . "</li>" ;
        echo "<li>" . $row["COL 11"] . ": " . $row["COL 12"] . "</li>" ;
        echo "<li>" . $row["COL 13"] . ": " . $row["COL 14"] . "</li>" ;
        echo "<li>" . $row["COL 15"] . ": " . $row["COL 16"] . "</li>" ;
        echo "<li>" . $row["COL 17"] . ": " . $row["COL 18"] . "</li>" ;
        echo "<li>" . $row["COL 1"] . ": " . $row["COL 2"] . "</li>" ;

    }
            

    ?>
                
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2023 South Goa Advocates Association. All rights reserved.</p>
    </footer>

    <script src="comm_script.js"></script>

</body>

</html>
