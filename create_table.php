<?php
include "link.php";
$sql = " CREATE TABLE IF NOT EXISTS authorization(
                              `user` text NOT NULL,
                              `password` int(11) NOT NULL
                             ) ENGINE=InnoDB DEFAULT CHARSET=utf8";

mysqli_query($link, $sql)or die(mysqli_error($link));

$sql = " CREATE TABLE IF NOT EXISTS comments(
                        `text` text NOT NULL,
                        `topic` varchar(100) NOT NULL,
                        `id` int(11) NOT NULL AUTO_INCREMENT,
                        `datetime` datetime NOT NULL,
                        PRIMARY KEY (`id`)
                        ) ENGINE=InnoDB DEFAULT CHARSET=utf8";

mysqli_query($link, $sql)or die(mysqli_error($link));

$sql = " CREATE TABLE IF NOT EXISTS course (
                      `course_title` text NOT NULL,
                      `id` int(11) NOT NULL AUTO_INCREMENT,
                      `text` text NOT NULL,
                      PRIMARY KEY (`id`)
                    ) ENGINE=InnoDB DEFAULT CHARSET=utf8;";

mysqli_query($link, $sql)or die(mysqli_error($link));

$sql = " CREATE TABLE IF NOT EXISTS topics(
                      `section` text NOT NULL,
                      `id` int(11) NOT NULL,
                      `contents` text NOT NULL
                    ) ENGINE=InnoDB DEFAULT CHARSET=utf8;";

mysqli_query($link, $sql)or die(mysqli_error($link));