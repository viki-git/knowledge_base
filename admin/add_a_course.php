<?php
$sql = "INSERT INTO course(course_title, text)VALUES ('".$_GET['course']."',
'".$_GET['text']."')";
mysqli_query($link, $sql);