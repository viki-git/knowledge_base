<?php
require "session.php";
include "../link.php";
if(isset($_GET['course'])&&(isset($_GET['text'])))
    include "add_a_course.php";
if(isset($_GET['exit'])){
    unset($_SESSION['role']);
    header("Location: ".PATH."/index.php");
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
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="../index.php">KNOWLEDGE BASE</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-center">
                <li class="active"><a href="<?php echo PATH;?>/courseTitle.php?title_id=1">HTML</a></li>
                <li><a href="<?php echo PATH;?>/courseTitle.php?title_id=2">CSS</a></li>
                <li><a href="<?php echo PATH;?>/courseTitle.php?title_id=3">JavaScript</a></li>
                <li><a href="<?php echo PATH;?>/courseTitle.php?title_id=4">PHP</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="admin.php">Добавить тему</a></li>
                <li><a href="delete.php">Удалить курс/тему</a></li>
                <li><a href="course.php?exit">Выход</a></li>
            </ul>

        </div>
    </div>
</nav>
<div class="container">
    <form action="#" role="form">
        <div class="form-group">
            <label>Название курса</label>
            <input name="course" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label>Содержание</label>
            <textarea name="text" class="form-control" rows="3"></textarea>
        </div>
        <div class="col-sm-offset-5 col-sm-10">
            <button type="submit" class="btn btn-default">Отправить</button>
        </div>
    </form>
</div>
</body>
</html>