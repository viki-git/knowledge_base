<?php
include "../link.php";
$sql = "DELETE FROM topics WHERE section = '".$_GET['del']."'";
mysqli_query($link, $sql);