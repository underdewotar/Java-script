<?php
$r=$_GET['gg'];
 
$con = new mysqli("127.0.0.1","root","","uczen_piatek");
$q="DELETE FROM klasy WHERE `klasy`.`id` ='".$r."'";
mysqli_query($con, $q);
//$wynik=$con->query($q);
 
 
?>