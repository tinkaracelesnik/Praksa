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

        table, th, td {
            border: black 1px solid;
            border-collapse: collapse;
        }

        th, td {
            padding: 5px 15px;
        }

        form.loginForm {
            width: 300px;
            margin: 0 auto;
        }

        form.loginForm input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        form.loginForm button[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        form.loginForm button[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <form class="loginForm" action="#" method="POST">
        <h1>Vpiši ime ali priimek za iskanje:</h1>
        <input type="text" name="ime" placeholder="Ime"><br><br>
        <input type="text" name="priimek" placeholder="Priimek"><br><br>
        <button type="submit">Išči</button><br><br><hr><br><br>
        <table>
            <tr>
                <th>ID</th>
                <th>Ime</th>
                <th>Priimek</th>
                <th>Gmail</th>
                <th>Telefon</th>
            </tr>
            <?php
                if (!isset($_POST['ime'])) {
                    $_POST["ime"] = "";
                }
                if (!isset($_POST['priimek'])) {
                    $_POST["priimek"] = "";
                }

                $conn = new mysqli("localhost", "root", "", "menik");
                $sql = "SELECT * FROM uporabniki WHERE ime='$_POST[ime]' OR priimek='$_POST[priimek]'";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr><td>" . $row["id"] . "</td><td>" . $row["ime"] . "</td><td>" . $row["priimek"] . "</td><td>" . $row["gmail"] . "</td><td>" . $row["telefon"] . "</td></tr>";
                    }
                } else {
                    echo "<tr><td colspan='5'>0 results</td></tr>";
                }
                
                $conn->close();
            ?>
        </table>
    </form>
    <br><br><hr><br><br>
    <a href="index.php"><button type="submit">Nazaj na glavno stran</button></a>
</body>
</html>
