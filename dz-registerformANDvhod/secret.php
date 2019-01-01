<?php
session_start();
if($_SESSION['auth'] == true)
{
    echo "вы выполнили вход";
}
else
    {
        echo "вам запрещен вход в данный раздел. PS: функцию header реализовал при выходе (exit.php)";
    }