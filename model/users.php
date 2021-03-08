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

    function addUser(array $fields) : bool
    {
        $sql = "INSERT INTO users (login, email, password, name) VALUES (:login, :email, :password, :username)";
        dbQuery($sql, $fields);
        return true;
    }

    function checkUserByLogin(string $login) : bool
    {
        $sql = "SELECT login FROM users";
        $query = dbQuery($sql);
        $users = $query->fetchAll();
        foreach($users as $user)
        {
            if(in_array($login, $user))
            {
                return true;
            }
        }
		return false;
    }