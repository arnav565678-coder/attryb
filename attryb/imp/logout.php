<?php
session_start();

session_destroy();
header("location: /a/login.php");
?>