<?php
    include_once 'core/db.php';

    function categoryValidate(array &$fields) : array
    {
        $errors = [];
        if(mb_strlen($fields['cat_name'], 'UTF-8') < 2)
        {
            $errors[] = 'Title is not less than 2';
        }
        $fields['cat_name'] = htmlspecialchars($fields['cat_name']);
        return $errors;
    }

    function categoriesAll() : array
    {
        $sql = "SELECT * FROM categ ORDER BY id_cat ASC";
        $query = dbQuery($sql);
        return $query->fetchAll();
    }

    function getCategorie($id_cat) : ?array
    {
        $sql = "SELECT * FROM categ WHERE id_cat = :id_cat";
        $query = dbQuery($sql, ['id_cat' => $id_cat]);
        $quer = $query->fetch();
        return is_array($quer) ? $quer : null;
    }

    function getCategoryMessages(int $id_cat) : ?array
    {
        $sql = "SELECT * FROM message WHERE id_cat = :id_cat";
        $query = dbQuery($sql, ['id_cat' => $id_cat]);
        $quer = $query->fetchAll();
        return is_array($quer) ? $quer : null;
    }

    function addCategory(array $fields) : bool
    {
        $sql = "INSERT INTO categ (cat_name) VALUES (:cat_name)";
        dbQuery($sql, $fields);
        return true;
    }

    function deleteCategory(int $id): bool
    {
        $sql = "DELETE FROM categ WHERE id_cat = $id";
        dbQuery($sql);
        return true;
    }

    function editCategory(array $fields, int $id) : bool
    {
        $sql = "UPDATE categ SET cat_name = :cat_name WHERE id_cat = $id";
        dbQuery($sql, $fields);
        return true;
    }
?>