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
    <table>
        <tr>
            <?php foreach ($data[0] as $column => $value): ?>
            <th>
                <?= $column ?>
            </th>
            <?php endforeach; ?>
        </tr>
        <?php foreach ($data as $row): ?>
        <tr>
            <?php foreach ($row as $value): ?>
            <td>
                <?= $value ?>
            </td>
            <?php endforeach; ?>
        </tr>
        <?php endforeach; ?>
    </table>

    <footer>
        <p>&copy; 2023 South Goa Advocates Association. All rights reserved.</p>
    </footer>

    <script src="comm_script.js"></script>

</body>

</html>