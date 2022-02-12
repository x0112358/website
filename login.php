<?php
    require_once 'header.php';

    echo "<div class='main'>";

    if (isset($_POST['user']))
    {
        $user = $_POST['user'];
        $pass = $_POST['pass'];

        if ($user == "" || $pass == "")
        {

        }
    }

    echo "<form class='form1' method='post' action='login.php'>";
    echo "<div>Имя: </div>";
    echo "<input type='text' name='user'>";
    echo "<div>Пароль: </div>";
    echo "<input type='pass' name='pass'>";
    echo "<br>";
    echo "<input type='submit' value='Вход'>";
    echo "</form>";

    echo "</div>";
?>
