<?php
    function sessionAdd(int $userId, string $token): bool
    {
        $params = ['id_user' => $userId, 'token' => $token];
        $sql = "INSERT sessions (id_user, token) VALUES(:id_user, :token)";
        dbQuery($sql, $params);
        return true;
    }

    function getSessionByToken(string $token): ?array
    {
        $sql = "SELECT * FROM sessions WHERE token = :token";
        $query = dbQuery($sql, ['token' => $token]);
        $quer = $query->fetch();
        return is_array($quer) ? $quer : null;
    }