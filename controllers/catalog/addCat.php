<?php
    if($user === null)
    {
        header("Location: " . BASE_URL . "auth/login");
        exit();
    }

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $fields = extractFields($_POST, ['cat_name']);
        $validateErrors = categoryValidate($fields);
        if(empty($validateErrors))
        {
            addCategory($fields);
            header("Location: " . BASE_URL . "allCats");
            exit();
        }
    }
    else
    {
        $fields = ['cat_name' => ''];
        $validateErrors = [];
    }
    $pageTitle = 'Add Category';
    $pageContent = template('categories/vc_add', ['fields' => $fields,
        'validateErrors' => $validateErrors
    ]);
?>