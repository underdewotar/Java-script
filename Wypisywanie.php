<?php
$con = new mysqli("127.0.0.1","root","","uczen_piatek");
 
$q="SELECT * FROM klasy";
 
if($wynik=$con->query($q))
while($row=$wynik->fetch_array())
echo $row["LP"] . ";" . $row["Imie"] . ";" . $row["Nazwisko"] . ";" . $row["Klasa"] . ";" . $row["Srednia"] . "<br/>";
else
echo $con->errno . " " . $con->error;
?>