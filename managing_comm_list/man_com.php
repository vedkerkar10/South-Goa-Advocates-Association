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
                </table>
                <?php
                      echo "table";
                      $conn = mysqli_connect("localhost","root","","db_sgaa");
                      $sql = "SELECT * FROM managing_committee";
                      $result = $conn->query($sql);
                      while ($row = $result->fetch_assoc()) {
                      echo "<li>" . $row["Sr_No"] . ": " . $row["Name"] . "</li>";
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