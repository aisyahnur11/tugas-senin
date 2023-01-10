<?php

$nis = $_POST['Nis'];
$nm = $_POST['Name'];
$cls = $_POST['Class'];

$a = new PDO("mysql:host=localhost;dbname=sekul",'root','');
$query = $a->query("INSERT INTO data_siswa VALUES ('','$nis','$nm','$cls')");

if($query){
    header("location:Tdata.php");
}