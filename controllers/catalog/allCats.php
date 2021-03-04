<?php
    $categories = categoriesAll();
    if(empty($categories))
    {
        include_once 'view/errors/v_404.php';
        exit();
    }
    $pageTitle = 'Categories';
    $pageContent = template('categories/vc_all', ['categories' => $categories]);
?>