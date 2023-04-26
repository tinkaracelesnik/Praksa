<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, th, td {
            border: black 1px solid;
            border-collapse: collapse;
        }
        th, td {
            padding:5px 15px;
        }
    </style>
</head>
<body>
    
<form class="loginForm" action="#" method="POST">
    <h1>Vpiši ime ali priimek za iskanje:</h1>
            <input type="text" name="ime" placeholder="Ime"> <br>
            <br>
            <input type="text" name="priimek" placeholder="Priimek"><br>

            <br>
            <button type="submit">Išči</button>
            <br><br><hr><br><br>
            <table>
            <tr>
                <th style="padding:5px;">ID</th>
                <th style="padding:5px;">Ime</th>
                <th style="padding:5px;">Priimek</th>
                <th style="padding:5px;">Gmail</th>
                <th style="padding:5px;">Telefon</th>
            </tr>
            <?php
                if(!isset($_POST['ime'])){
                    $_POST["ime"] ="";
                }
                if(!isset($_POST['priimek'])){
                    $_POST["priimek"] ="";
                }
                    $conn = new mysqli("localhost", "root", "", "menik");
                    $sql = "SELECT * FROM uporabniki WHERE ime='$_POST[ime]' OR priimek='$_POST[priimek]'";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<tr><td>" . $row["id"]. "</td><td>" . $row["ime"]. "</td><td>" . $row["priimek"] . "</td><td>" . $row["gmail"] . "</td><td>" . $row["telefon"] . "</td></tr>";
                        }
                      } else {
                        echo "0 results";
                      }
                      $conn->close();
                
            ?>
            </table>
</form>

<br><br><hr><br><br><a href="index.php"><button type="submit">Nazaj na glavno stran</button></a>
</body>
</html>