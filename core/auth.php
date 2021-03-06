<?php

    function getAuthUser() : ?array
    {
        $user = null;

        $token = $_SESSION['token'] ?? $_COOKIE['token'] ?? null;

        if($token !== null)
        {
            $session = getSessionByToken($token);

            if($session !== null)
            {
                $user = getUserByID($session['id_user']);

                if($user === null)
                {
                    unset($_SESSION['token']);
                    setcookie('token', '', time() - 1, BASE_URL);
                }
            }
        }
        return $user;
    }