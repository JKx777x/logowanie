<?php
session_start();
if (isset($_SESSION["login"])) {
    echo "witaj".$_SESSION["login"];
}else{
    header("location:login.php")
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
    <table>
        <tr>
            <th>IMIE</th>
            <th>NAZWISKO</th>
            <th>PESEL</th>
            <th>DATA ZLECENIA</th>
            <th>DATA WYKONANIA</th>
            <th>WYNIK</th>
        </tr>
    <?php
    $zapytanie = "SELECT imie, nazwisko, pesel, Zlecenie.data, Wynik.data, plik FROM Pacjent JOIN Zlecenie ON Zlecenie.idpacjenta = pacjent.id LEFT JOIN Wynik ON Zlecenie.id = Wynik.idzlecenia";
    $wynik = mysqli_query($connect,$zapytanie)
    while ($wiersz = mysqli_fetch_array($wynik)) {
        echo "<tr>"
        echo "<td>.$wiersz[0]</td>"
        echo "<td>.$wiersz[1]</td>"
        echo "<td>.$wiersz[2]</td>"
        echo "<td>.$wiersz[3]</td>"
        echo "<td>.$wiersz[4]</td>"
        echo "<td <a href='$wiersz[5]'>wynik</a>>.$wiersz[5]</td>"
        echo "</tr>"
    }
    ?>
    </table>
</body>
</html>
<?php
mysqli_close($pol)
?>