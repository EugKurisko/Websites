<?php
    //take controller name and give him controll
    session_start();
    $_SESSION['logged'] = false;
    include_once 'init.php';
    $user = getAuthUser();
    if($user !== null)
    {
        $_SESSION['logged'] = true;
    }

    $pageCanonical = HOST . BASE_URL;
    $routs = include('routes.php');
    $url = $_GET['querysystemurl'] ?? '';
    $routerRes = parseURL($url, $routs);//get namme of controller and parameters for controller
    $contrName = $routerRes['controller'];
    define('URL_PARAMS', $routerRes['params']);

    $urlLen = strlen($url);
    if($urlLen > 0 && $url[$urlLen - 1] === '/')
    {
        $url = substr($url, 0, $urlLen - 1);
        $pageCanonical .= $url;
    }

    $path = "controllers/$contrName.php";
    $pageTitle = 'Error 404';
    $pageContent = '';

    if(file_exists($path))
    {
        include_once "$path";
    }
    else
    {
        exit();
    }
    $html = template('base/v_main', [
        'title' => $pageTitle,
        'content' => $pageContent,
        'canonical' => $pageCanonical,
        'loggedIn' => $_SESSION['logged']
    ]);

    echo $html;