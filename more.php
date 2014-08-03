<?php
require "config.php";
session_start();
if(isset($_SESSION['role']) && $_SESSION['role']=='admin'){
    include "admin/tinymce.php";
}

if(isset($_GET['content'])){
    include "save_the_changes.php";
}

if(isset($_GET['del']))
    include "deleteComment.php";
ini_set('display_errors', 1);
if(isset($_GET['comment']))
include "saveComments.php";
?>
<!DOCTYPE html>
<html>
<head>
    <title>more</title>
    <meta charset="utf-8">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
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
            <a class="navbar-brand" href="index.php">KNOWLEDGE BASE</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-center">
                <li class="active"><a href="<?php echo PATH;?>/knowledge_base/courseTitle.php?title_id=1">HTML</a></li>
                <li><a href="<?php echo PATH;?>/knowledge_base/courseTitle.php?title_id=2">CSS</a></li>
                <li><a href="<?php echo PATH;?>/knowledge_base/courseTitle.php?title_id=3">JavaScript</a></li>
                <li><a href="<?php echo PATH;?>/knowledge_base/courseTitle.php?title_id=4">PHP</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="container">
    <a href="index.php"><button type="button" class="btn btn-info">-Назад</button></a>
<?php
include "moreTopic.php";
?>
<h1><?php echo $_GET['topic']?></h1>
    <form action="#">
    <div class="form-group"><textarea name="content" id="text" class="form-control" cols="180" rows="10"><?php echo $more['contents'] ?></textarea></div>
        <?php
        if(isset($_SESSION['role']) && $_SESSION['role']=='admin'){
            echo "<a href='more.php?topic=".$_GET['topic']."'><button type='submit' class='btn btn-default'>Отправить</button></a>";
        }
        ?>
        <input type="hidden" name="top" value="<?php echo $_GET['topic']?>">
    </form>
<h3>Комментарий</h3>
<form action="#">
<input type="hidden" name="topic" value="<?php echo $_GET['topic']?>">
    <div class="form-group">
         <textarea class="form-control" name="comment" cols="40" rows="2"></textarea>
    </div>
    <div></div>
        <button type="submit" class="btn btn-default">Отправить</button>
</form>
    <div class="alert alert-info" role="alert">
    <?php
    include "getComment.php";
    if(empty($_GET)){
        echo "коментариев нет";
    }else{
        foreach($comments as $comment) {
            if ($_GET['topic'] == $comment['topic']) {
                echo "<p>". $comment['text'].'<span style="float:right">'.$comment['datetime'].'</span></p>
                <p align="right">
			<a href="more.php?topic='.$comment['topic'].'&del='.$comment['id'].'"><br>Удалить</a></p><hr>';
            }
        }
    }
?>
    </div><br>
</div>
</body>
</html>