<?php
$sql = "INSERT INTO topics(section, contents, id)VALUES ('".$_GET['section']."',
'".$_GET['content']."','".$_GET['menu_course']."')";
mysqli_query($link, $sql);
echo mysqli_error($link);