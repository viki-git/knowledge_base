<?php
include "link.php";
$sql = "UPDATE topics
        SET contents = '".$_GET['content']."'
        WHERE section='".$_GET['top']."'";
$result = mysqli_query($link, $sql)or die(mysqli_error($link));
