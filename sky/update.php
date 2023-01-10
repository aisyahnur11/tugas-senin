<?php

$id = $_POST['id'];
$nis = $_POST['Nis'];
$nm = $_POST['Name'];
$cls = $_POST['Class'];

$a = new PDO("mysql:host=localhost;dbname=sekul",'root','');
$query = $a->query("UPDATE `data_siswa` SET `Nis`='$nis',`Name`='$nm',`Class`='$cls' WHERE `id`='$id'");

if($query){
    header("location:Tdata.php");
}