<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trucorp Database</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            color: #588c7e;
            font-family: monospace;
            font-size: 25px;
            text-align: left;
        }

        th {
            background-color: #588c7e;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2
        }
    </style>
</head>

<body>



    <?php

    $host = 'db';
    $user = 'root';
    $pass = "inipassword";
    $db = "Trucorp-db";
    $conn =  mysqli_connect($host, $user, $pass, $db);
    $sql = "SELECT * FROM users";
    $res = $conn->query($sql);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    if ($res->num_rows > 0) {
        echo "<table>
            <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jabatan</th>
            </tr>";
        while ($row = $res->fetch_assoc()) {

            echo "<tr>
                <td>" . $row["ID"] . "</td>
                <td>" . $row["Nama"] . "</td>
                <td>" . $row["Alamat"] . "</td>
                <td>" . $row["Jabatan"] . "</td>
                </tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }
    $conn->close();
    ?>

</body>

</html>