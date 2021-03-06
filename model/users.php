<?php

    function getUser(string $login) : ?array
    {
        $sql = "SELECT * FROM users WHERE login = :login";
        $query = dbQuery($sql, ['login' => $login]);
        $quer = $query->fetch();
        return is_array($quer) ? $quer : null;
    }

    function getUserByID(int $id_user)
    {
        $sql = "SELECT id_user, login, name, email FROM users WHERE id_user = :id_user";
        $query = dbQuery($sql, ['id_user' => $id_user]);
        $user = $query->fetch();
		return $user === false ? null : $user;
    }