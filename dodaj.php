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
    <br><br>
    <form class="loginForm" action="#" method="POST">
        <input type="text" name="ime" placeholder="Ime"> <br><br>
        <input type="text" name="priimek" placeholder="Priimek"><br><br>
        <input type="text" name="gmail" placeholder="Gmail"> <br><br>
        <input type="text" name="telefon" placeholder="Telefon"><br><br><br>
        <button type="submit">Nov uporabnik</button>
        <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "menik";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['ime']) && isset($_POST['priimek'])) {
  $ime = $_POST['ime'];
  $priimek = $_POST['priimek'];
  $gmail = $_POST['gmail'];
  $telefon = $_POST['telefon'];

  $sql = "INSERT INTO uporabniki (ime, priimek, gmail, telefon) VALUES ('$ime', '$priimek', '$gmail', '$telefon')";

  if ($conn->query($sql) === TRUE) {
    echo "Novi uporabnik uspešno ustvarjen";
  } else {
    echo "Napaka: " . $sql . "<br>" . $conn->error;
  }
} else {
  echo "Ime in Priimek sta obvezna";
}

$conn->close();
?>
    </form>
</body>
</html>
