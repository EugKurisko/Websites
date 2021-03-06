<?php
    include_once 'core/db.php';

    function messageValidate(array &$fields) : array
    {
        $errors = [];
        $textLen = mb_strlen($fields['text'], 'UTF-8');
        if(mb_strlen($fields['name'], 'UTF-8') < 2)
        {
            $errors[] = 'Name is not less than 2';
        }
        if($textLen< 5 || $textLen > 140)
        {
            $errors[] = 'Text is greater than 5 and less then 140';
        }
        $fields['name'] = htmlspecialchars($fields['name']);
        $fields['text'] = htmlspecialchars($fields['text']);
        return $errors;
    }

    function messagesAll() : array
    {
        $sql = "SELECT * FROM message ORDER BY dt DESC";
        $query = dbQuery($sql);
        //$arr = $query->fetch();//returns one row (as array), describing current result
        return $query->fetchAll();//returns all rows (as array), describing current result
    }

    function getMessage(int $id) : ?array
    {
        $sql = "SELECT * FROM message WHERE id = :id";
        $query = dbQuery($sql, ['id' => $id]);
        $quer = $query->fetch();
        return is_array($quer) ? $quer : null;
    }

    function addMessage(array $fields) : bool
    {
        $sql = "INSERT INTO message (name, text, id_cat, id_user) VALUES (:name, :text, :id_cat, :id_user)";
        dbQuery($sql, $fields);
        return true;
    }

    function deleteMessage(int $id) : bool
    {
        $sql = "DELETE FROM message WHERE id = $id";
        dbQuery($sql);
        return true;
    }

    function editMessage(array $fields, int $id) : bool
    {
        $sql = "UPDATE message SET name = :name, text = :text WHERE id = $id";
        dbQuery($sql, $fields);
        return true;    
    }
    
    function getLastId() :int
    {
        $db = dbInstance();
        return $db->lastInsertId();
    }

    function getUserIdFromMessage(int $id) : int
    {
        $sql = "SELECT id_user FROM message WHERE id = :id";
        $query = dbQuery($sql, ['id' => $id]);
        $result = $query->fetch();
        return $result['id_user'];
    }