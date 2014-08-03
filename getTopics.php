<?php
include "link.php";
$sql = "SELECT section, id
        FROM topics";
$result = mysqli_query($link, $sql)or die(mysqli_error($link));
$topics = mysqli_fetch_all($result, MYSQLI_ASSOC);
