<?php
require "session.php";
include "../link.php";
if (isset($_GET['section']) && (isset($_GET['content'])) && (isset($_GET['menu_course'])))
    include "add_a_topic.php";

if (isset($_GET['exit'])) {
    unset($_SESSION['role']);
    header("Location: " . PATH . "/index.php");
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
                            <li class="active"><a href="<?php echo PATH; ?>/courseTitle.php?title_id=1">HTML</a></li>
                            <li><a href="<?php echo PATH; ?>/courseTitle.php?title_id=2">CSS</a></li>
                            <li><a href="<?php echo PATH; ?>/courseTitle.php?title_id=3">JavaScript</a></li>
                            <li><a href="<?php echo PATH; ?>/courseTitle.php?title_id=4">PHP</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="course.php">Добавить курс</a></li>
                            <li><a href="delete.php">Удалить курс/тему</a></li>
                            <li><a href="admin.php?exit">Выход</a></li>
                        </ul>
                    </div>
                </div>
        </nav>
        <div class="container">
            <form action="#" role="form">
                <select name="menu_course">
                    <?php
                    include "../course_kb.php";
                    foreach ($titles as $title) {
                        echo '<option value="' . $title['id'] . '">' . $title["course_title"] . '</option>';
                    }
                    ?>
                </select>
                <div class="form-group">
                    <label>Тема</label>
                    <input type="text" class="form-control" name="section">
                </div>
                <div class="form-group">
                    <label>Содержание</label>
                    <textarea class="form-control" rows="3" name="content"></textarea>
                </div>
                <div class="col-sm-offset-5 col-sm-10">
                    <button type="submit" class="btn btn-default">Отправить</button>
                    <a href="course.php"><button type="button" class="btn btn-primary">Добавить курс</button></a>
                </div>
            </form>
        </div>
    </body>
</html>