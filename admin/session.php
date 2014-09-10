<?php

session_start();

if ($_SESSION['role'] != 'admin') {
    header("Location: " . PATH . "/admin/registration.php");
}