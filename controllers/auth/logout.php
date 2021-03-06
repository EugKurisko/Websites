<?php
if($_SERVER['REQUEST_METHOD'] == 'GET')
{
    unset($_SESSION['token']);
    $_SESSION['logged'] = false;
    if(isset($_COOKIE['token']))
    {
        setcookie('token', $token, time() - 1, BASE_URL);
    }
    header('Location: ' . BASE_URL);
    exit();
}