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
    <br>
        <section class="table-section">
            <h2 class="text-center">Managing Committee List</h2>
            <div class="table-container">
                <table id="data-table">
                    <tr>
                        <th>Serial No.</th>
                        <th>Name</th>
                        <th>Designation</th>
                    </tr>
                    <?php
                    $conn = mysqli_connect("localhost", "root", "", "db_sgaa");
                    $sql = "SELECT * FROM managing_committee";
                    $result = $conn->query($sql);
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["Sr_No"] . "</td>";
                        echo "<td>" . $row["Name"] . "</td>";
                        echo "<td>" . $row["Designation"] . "</td>";
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