<?php
session_start();
if(!$_SESSION['nome']) {
    header("location: menu.php");
    exit();
}