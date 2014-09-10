<?php
require "session.php";
if(isset($_GET['del']))
    include "delete_topic.php";
ini_set('display_errors', 1);
if(isset($_GET['title_id']))
    include "delete_course.php";

if(isset($_GET['exit'])){
    unset($_SESSION['role']);
    header("Location: ".PATH."/knowledge_base/index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>admin</title>
    <meta charset="utf-8">
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-inverse" role="navigation">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="../index.php">KNOWLEDGE BASE</a>
        </div>
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-center">
                    <li class="active"><a href="<?php echo PATH;?>/knowledge_base/courseTitle.php?title_id=1">HTML</a></li>
                    <li><a href="<?php echo PATH;?>/knowledge_base/courseTitle.php?title_id=2">CSS</a></li>
                    <li><a href="<?php echo PATH;?>/knowledge_base/courseTitle.php?title_id=3">JavaScript</a></li>
                    <li><a href="<?php echo PATH;?>/knowledge_base/courseTitle.php?title_id=4">PHP</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="course.php">Добавить курс</a></li>
                    <li><a href="topic.php">Добавить тему</a></li>
                    <li><a href="delete.php?exit">Выход</a></li>
                </ul>
            </div>
        </div>
</nav>
<div class="container">
    <div class="row">
        <?php
        include "../link.php";
        include "../course_kb.php";
        include "../getTopics.php";
        foreach($titles as $title){
            echo '<div class="col-xs-12 col-sm-6 col-md-8"><ul><li>'.$title["course_title"].'<a href="delete.php?title_id='.$title['id'].'"> X</a></li><ul>';
            foreach($topics as $topic){
                if($title['id'] == $topic['id'])
                    echo '<li>'.$topic['section'].'<a href="delete.php?del='.$topic['section'].'"> x</a></li>';
            };
            echo '</div></ul></ul>
';
        }
        ?>
    </div>
</div>
</body>
</html>