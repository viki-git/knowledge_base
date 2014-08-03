<?php
session_start();

if($_SESSION['role']!='admin'){
    header("Location: http://localhost/bitbridge/knowledge_base/admin/registration.php");
}