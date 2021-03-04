<?php
    $id = (int)URL_PARAMS['id'];
    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $category = extractFields($_POST, ['cat_name']);
        $validateErrors = categoryValidate($category);
        if(empty($validateErrors))
        {
            editCategory($category, $id);
            header("Location: " . BASE_URL . "category/$id");
            exit();
        }
        else
        {
            $pageTitle = 'Edit Message';
            $pageContent = template('categories/vc_edit', ['category' => $category, 
            'validateErrors' => $validateErrors]);
        }
    }
    else
    {
        $category = getCategorie($id) ?? null;
        $validateErrors = [];
        if($category == null)
        {
            header('HTTP/1.1 404 Not Found');
            $pageContent = template('errors/v_404');
        }
        else
        {
            $pageTitle = 'Edit Category';
            $pageContent = template('categories/vc_edit', ['category' => $category, 
            'validateErrors' => $validateErrors]);
        }
    }
?>