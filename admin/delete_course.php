<?php
include "../link.php";
$sql = "DELETE FROM course WHERE id =".$_GET['title_id'];
mysqli_query($link, $sql);