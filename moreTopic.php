<?php
include "link.php";
$sql = "SELECT section , contents FROM topics WHERE section='".$_GET['topic']."'";
$result = mysqli_query($link, $sql)or die(mysqli_error($link));
$more = mysqli_fetch_array($result, MYSQLI_ASSOC);
