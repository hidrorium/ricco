<?php
session_start();

$_SESSION['login'] = NULL;
header('Location: Login.php');
?>