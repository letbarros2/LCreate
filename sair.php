<?php
session_start();
unset($_SESSION['id'], $_SESSION['name']);
header("Location:index.php");
?>
