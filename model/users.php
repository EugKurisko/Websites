<?php

    function getUser(string $login) : ?array
    {
        $sql = "SELECT * FROM users WHERE login = :login";
        $query = dbQuery($sql, ['login' => $login]);
        $quer = $query->fetch();
        return is_array($quer) ? $quer : null;
    }