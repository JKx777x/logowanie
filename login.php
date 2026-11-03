<?php
session_start()
if (isset($_POST["login"])) {
    $login = $_POST['login']
    $password = $_POST['passowrd']

    if ($login == "admin" && $password == "tajnehaslo321") {
        $_SESSION["login"] = $login;👌
        header["location: wynik.php"];
    }
}
$pol = mysqli_connect("localhost", "root", "", "laboratorium")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <label for="login">Login</label>
        <input type="text" id="login" name="login"><br>
        <label for="password">hasło:</label>
        <input type="text" id="password" name="password"><br>
        <input type="submit" name="przycisk">
    </form>
</body>
</html> 
<?php
mysqli_close($pol)
?>