<?php
    
    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $authErr = true;
        if($_POST['login'] != '' && $_POST['email'] != '' && $_POST['username'] != '' ||
           $_POST['password'] != '' && $_POST['confirmpass'] != '')
        {
            $fields = extractFields($_POST, ['login', 'email', 'username', 
            'password', 'confirmpass']);
            if(!checkUserByLogin($fields['login']))
            {
                if($fields['password'] == $fields['confirmpass'])
                {
                    $fields['password'] = password_hash($fields['password'], PASSWORD_BCRYPT);
                    array_pop($fields);
                    addUser($fields);
                    $_SESSION['logged'] = true;
                    header('Location: ' . BASE_URL);
                    exit();
                }
            }   
        }
    }
    else
    {
        $authErr = false;
    }
    
    $pageTitle = 'Registration';
    $pageContent = template('auth/v_register', ['authErr' => $authErr]);