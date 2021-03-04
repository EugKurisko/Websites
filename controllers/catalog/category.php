<?php
    $id = (int)URL_PARAMS['id'];
    $category = getCategorie($id);
    if($category)
    {
        $left = template('categories/v_category_menu', ['category' => $category]);
        $content = template('categories/v_category_main', ['category' => $category]);
        $pageTitle = $category['cat_name'];
        $pageContent = template('base/v_con2col', ['left' => $left, 
            'content' => $content,
            'title' => 'Category'
        ]);
    }
?>