<?php
    $id = (int)URL_PARAMS['id'];
    if($_SERVER['REQUEST_METHOD'] === 'POST')
    {
        $fields = extractFields($_POST, ['name', 'text']);
        $validateErrors = messageValidate($fields);
        if(empty($validateErrors))
        {
            editMessage($fields, $id);
            header("Location: " . BASE_URL . "message/$id");
            exit();
        }
        else
        {
            $pageTitle = 'Edit Message';
            $pageContent = template('v_edit', ['fields' => $fields, 
            'validateErrors' => $validateErrors]);
        }
    }
    else
    {
        $fields = getMessage($id) ?? null;
        $validateErrors = [];
        if($fields == null)
        {
            header('HTTP/1.1 404 Not Found');
            $pageContent = template('errors/v_404');
        }
        else
        {
            $pageTitle = 'Edit Message';
            $pageContent = template('v_edit', ['fields' => $fields, 
            'validateErrors' => $validateErrors]);
        }
    }
?>