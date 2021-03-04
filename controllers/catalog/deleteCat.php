<?php
    if($_SERVER['REQUEST_METHOD'] === 'GET')
    {
        $id = (int)URL_PARAMS['id'];
        if($id === '')
        {
            header("Location " . "all.php?somethingwentwrong");
            exit();
        }
        deleteCategory($id);
        header("Location: " . BASE_URL);
        exit();
    }
?>