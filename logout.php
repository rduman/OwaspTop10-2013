<?php
session_start();
header('Content-type:text/html; charset=utf-8');
header("Location:index.php");
session_destroy();
?>