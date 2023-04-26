<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DEBIAN 11 IMENIK</title>
</head>
<body>
<table>
    <tr>
        <th style="padding:5px;">ID</th>
        <th style="padding:5px;">Ime</th>
        <th style="padding:5px;">Priimek</th>
        <th style="padding:5px;">Gmail</th>
        <th style="padding:5px;">Telefon</th>
    </tr>
    <?php
        
        $servername = "localhost";
        $username = "root";
        $password = "nevem123";
        $dbname = "menik";
        
        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }
        
        $sql = "SELECT * FROM uporabniki";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
         
          while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["id"]. "</td><td>" . $row["ime"]. "</td><td>" . $row["priimek"]. "</td><td>" . $row["gmail"] . "</td><td>" . $row["telefon"] . "</td></tr>";
          }
        } else {
          echo "0 results";
        }
     
        $conn->close();
    ?>
</table>
</body>
</html>