<?php
    $sql = "SELECT course_title, id
               FROM course";
    $result = mysqli_query($link, $sql)or die(mysqli_error($link));
    $titles = mysqli_fetch_all($result, MYSQLI_ASSOC);



