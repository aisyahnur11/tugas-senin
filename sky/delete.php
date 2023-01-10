<?php

$id = $_GET['id'];

$db = new PDO("mysql:host=localhost;dbname=sekul",'root','');
$query = $db->query("DELETE FROM `data_siswa` WHERE `id`= '$id'");

if($query)
{
    header("location:Tdata.php");
}