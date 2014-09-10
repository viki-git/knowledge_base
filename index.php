<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>knowledge_base</title>
    <meta charset="utf-8">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-inverse" role="navigation">
    <div class="container-fluid-center">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">KNOWLEDGE BASE</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-center">
                <li class="active">
                    <a href="<?php echo PATH;?>/knowledge_base/courseTitle.php?title_id=1">HTML</a></li>
                <li><a href="<?php echo PATH;?>/knowledge_base/courseTitle.php?title_id=2">CSS</a></li>
                <li><a href="<?php echo PATH;?>/knowledge_base/courseTitle.php?title_id=3">JavaScript</a></li>
                <li><a href="<?php echo PATH;?>/knowledge_base/courseTitle.php?title_id=4">PHP</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="admin/registration.php">admin</a></li>
            </ul>
            </li>
            </ul>
        </div>
    </div>
</nav>
<div class="container">
    <div class="row">
        <?php
        include "link.php";
        include "course_kb.php";
        include "getTopics.php";
        foreach($titles as $title){
            echo '<div class="col-xs-12 col-sm-6 col-md-8"><ul><li><a href="courseTitle.php?title_id='.$title['id'].'">'.$title["course_title"].'</a></li><ul>';
            foreach($topics as $topic){
                if($title['id'] == $topic['id'])
                    echo '<li><a href="more.php?topic='.$topic['section'].'">'.$topic['section'].'</a></li>';
            };
            echo '</div></ul></ul>
';
        }
        ?>
    </div>
</div>
</body>
</html>