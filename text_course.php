<?php
include "link.php";
$sql = "SELECT text, id
               FROM course";
$result = mysqli_query($link, $sql)or die(mysqli_error($link));
$contents = mysqli_fetch_all($result, MYSQLI_ASSOC);

