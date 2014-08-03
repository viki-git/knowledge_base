<?php
ini_set('date.timezone', 'Europe/Kiev');
include "link.php";
$dateTime = date("Y-m-d H:i:s", time());
$t = $_GET['topic'];
$sql = "INSERT INTO comments(text, topic, datetime)VALUES ('".$_GET['comment']."',
'".$t."','".$dateTime."') ";
$result = mysqli_query($link, $sql);


