<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br><br>
<form class="loginForm" action="#" method="POST">
            <input type="text" name="ime" placeholder="Ime"> <br>
            <br>
            <input type="text" name="priimek" placeholder="Priimek"><br>
<br>
            <input type="text" name="gmail" placeholder="Gmail"> <br>
            <br>
            <input type="text" name="telefon" placeholder="Telefon"><br>
            <br><br>
            <button type="submit">Nov uporabnik</button>
            <?php
                if(isset($_POST['ime']) && isset($_POST['priimek'])){
                    $conn = new mysqli("localhost", "root", "", "menik");
                    $sql = "INSERT INTO uporabniki VALUES (NULL, '$_POST[ime]','$_POST[priimek]', '$_POST[gmail]', '$_POST[telefon]');";
                    $result = $conn->query($sql);
                    header("Location: index.php");
                }
            ?>
</form>


</body>
</html>