<?php
    $cats = categoriesAll();
    if($_SERVER["REQUEST_METHOD"] === "POST")
    {
        $fields = extractFields($_POST, ['name', 'text', 'id_cat']);
        $validateErrors = messageValidate($fields);
        if(empty($validateErrors))
        {
            addMessage($fields);
            $id = getLastId();
            header("Location: " . BASE_URL);
            exit();
        }
    }
    else
    {
        $fields = ['name' => '', 'text' => '', 'id_cat' => ''];
        $validateErrors = [];
    }
    $pageTitle = "Add message";
    $pageContent = template('v_add', ['fields' => $fields, 
        'cats' => $cats, 
        'validateErrors' => $validateErrors
        ]);
?>