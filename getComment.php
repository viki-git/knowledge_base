<?php
include "link.php";
$sql = "SELECT text, topic, id, datetime
FROM comments";
$result = mysqli_query($link, $sql)or die(mysqli_error($link));
$comments = mysqli_fetch_all($result, MYSQLI_ASSOC);

