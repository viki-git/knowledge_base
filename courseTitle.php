<?php
include "config.php";
?>
<!DOCTYPE html>
<html>
<head>
    <title>knowledge_base</title>
    <meta charset="utf-8">
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
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
            <a class="navbar-brand" href="index.php">KNOWLEDGE BASE</a>
        </div>
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
<h3>
<?php
include "link.php";
include "course_kb.php";
include "getTopics.php";

$title = [];
foreach($titles as $t) {
    if($t['id'] == $_GET['title_id']) {
        $title['course_title'] = $t['course_title'];
        $title['id'] = $t['id'];
    }
}
echo '<ul><li>'.$title["course_title"].'</a></li><ul>';
        foreach($topics as $topic){
        if($topic['id'] == $_GET['title_id'])
        echo '<li><a href="more.php?topic='.$topic['section'].'">'.$topic['section'].'</a></li>';
        };
        echo '</ul></ul>';
?>
</h3><br>
<p><?php
    include "text_course.php";
    foreach($contents as $content) {
        if (isset($content['id']) && $content['id'] == $_GET['title_id']){
            echo $content['text'];
        }
    }
    ?></p><br>
    <a href="index.php"><button type="button" class="btn btn-info"><-Назад</button></a>
</div>
</body>
</html>