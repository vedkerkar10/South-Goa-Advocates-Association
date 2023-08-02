<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>South Goa Advocates Association</title>
    <link rel="stylesheet" href="../css/style.css">
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
    </style>
</head>

<body>
    <header>
        <h1>South Goa Advocates Association</h1>
        <h2>Margao, Goa</h2>
        <h3>103 | GOA | 94</h3>
    </header>
    <main>
        <section class="table-section">
            <h2 class="text-center">Managing Committee List</h2>
            <div class="table-container">
                <table id="data-table">
                    <tr>
                        <th>Serial No.</th>
                        <th>Name</th>
                    </tr>
                    <?php
                    $conn = mysqli_connect("localhost", "root", "", "db_sgaa");
                    $sql = "SELECT * FROM managing_committee";
                    $result = $conn->query($sql);
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["Sr_No"] . "</td>";
                        echo "<td>" . $row["Name"] . "</td>";
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

    <script src="comm_script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</body>

</html>