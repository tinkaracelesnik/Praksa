<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DEBIAN 11 IMENIK</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 10px;
            text-align: left;
            border: 1px solid black;
        }

        th {
            background-color: #f2f2f2;
        }

        a {
            text-decoration: none;
        }

        button {
            padding: 8px 16px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        hr {
            border: none;
            border-top: 1px solid #ddd;
            margin: 20px 0;
        }
    </style>
</head>
<body>
    <br><br>
    <a href="dodaj.php"><button type="submit">Dodaj Novega Uporabnika</button></a><br><br><br><a href="isci.php"><button type="submit">Išči uporabnike</button></a>
    <br><br><hr><br><br>
    <table>
        <tr>
            <th>ID</th>
            <th>Ime</th>
            <th>Priimek</th>
            <th>Gmail</th>
            <th>Telefon</th>
        </tr>
        <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "menik";
        
            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
            }
        
            $sql = "SELECT * FROM uporabniki";
            $result = $conn->query($sql);
        
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["id"]. "</td>";
                    echo "<td>" . $row["ime"]. "</td>";
                    echo "<td>" . $row["priimek"]. "</td>";
                    echo "<td>" . $row["gmail"] . "</td>";
                    echo "<td>" . $row["telefon"] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='5'>0 results</td></tr>";
            }

            $conn->close();
        ?>
    </table>
    <br><br><hr>
</body>
</html>