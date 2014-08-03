<?php
include "link.php";
$sql = "DELETE FROM comments WHERE id =".$_GET['del'];
mysqli_query($link, $sql);