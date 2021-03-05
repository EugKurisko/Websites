<?php
    function sessionAdd(int $userId, string $token): bool
    {
        $params = ['uid' => $userId, 'token' => $token];
        $sql = "INSERT sessions (id_user, token) VALUES(:uid, :token)";
        dbQuery($sql, $params);
        return true;
    }