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
                <li class="active"><a href="<?php echo PATH;?>/knowledge_base/courseTitle.php?title_id=1">HTML</a></li>
                <li><a href="<?php echo PATH;?>/knowledge_base/courseTitle.php?title_id=2">CSS</a></li>
                <li><a href="<?php echo PATH;?>/knowledge_base/courseTitle.php?title_id=3">JavaScript</a></li>
                <li><a href="<?php echo PATH;?>/knowledge_base/courseTitle.php?title_id=4">PHP</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="container">
        <div class="form-group">
            <label>Подтема</label>
            <input type="text" class="form-control" name="subtheme">
        </div>
        <div class="form-group">
            <label>Содержание</label>
            <textarea class="form-control" rows="3" name="content"></textarea>
        </div>
        <div class="col-sm-offset-5 col-sm-10">
            <button type="submit" class="btn btn-default">Отправить</button>
        </div>
    </form>
</div>
</body>
</html>