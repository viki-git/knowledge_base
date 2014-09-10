<?php
include "../link.php";
if (!isset($_POST['login']) && (!isset($_POST['password']))) {
    
} else {
    $sql = "SELECT user, password
        FROM authorization";
    $result = mysqli_query($link, $sql) or die(mysqli_error($link));
    $users = mysqli_fetch_all($result, MYSQLI_ASSOC);
    if ($_POST['login'] == $users[0]['user'] && $_POST['password'] == $users[0]['password']) {
        session_start();
        $_SESSION['role'] = 'admin';

        header("Location: " . PATH . "/admin/admin.php");
    } else {
        echo "Введите корректно логин и пароль";
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>more</title>
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
                        <li class="active"><a href="http://localhost/bitbridge/courseTitle.php?title_id=1">HTML</a></li>
                        <li><a href="<?php echo PATH; ?>/courseTitle.php?title_id=2">CSS</a></li>
                        <li><a href="<?php echo PATH; ?>/courseTitle.php?title_id=3">JavaScript</a></li>
                        <li><a href="<?php echo PATH; ?>/courseTitle.php?title_id=4">PHP</a></li>
                        <li><a href="<?php echo PATH; ?>/courseTitle.php?title_id=5">jQuery</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container">
            <form action="#" method="post" class="form-horizontal" role="form">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Логин</label>
                    <div class="col-sm-10">
                        <input name="login" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Пароль</label>
                    <div class="col-sm-10">
                        <input name="password" type="password" class="form-control" id="inputPassword3">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-default">Войти</button>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>