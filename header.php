<?php
    session_start();

    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "root";

    $connection = new mysqli($dbhost, $dbuser, $dbpass);

    $connection->query("CREATE DATABASE IF NOT EXISTS db1");
    $connection->query("USE db1");

    if (isset($_SESSION['user']))
    {
        $loggedin = TRUE;
    }
    else
    {
        $loggedin = FALSE;
    }

    echo "<!doctype html>";
    echo "<html>";
    echo "<head>";
    echo "<title>Название | Описание</title>";
    echo "<link rel='stylesheet' href='style.css' type='text/css'>";
    echo "</head>";
    echo "<body>";

    if (!$loggedin)
    {
        echo "<nav>";
        echo "<ul>";
        echo "<li><a href='index.php'>name.com</a></li>";
        echo "<li><a href='signup.php'>Регистрация</a></li>";
        echo "<li><a href='login.php'>Вход</a></li>";
        echo "</ul>";
        echo "</nav>";
    }
    else
    {
        echo "<nav>";
        echo "<ul>";
        echo "<li><a href='index.php'>name.com</a></li>";
        echo "<li><a href='#'>link</a></li>";
        echo "<li><a href='logout.php'>Выход</a></li>";
        echo "</ul>";
        echo "<nav>";
    }
?>
