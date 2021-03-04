<?php
    $id = (int)URL_PARAMS['id'];
    $messages = getCategoryMessages($id);
    $pageTitle = 'Categories';
    $pageContent = template('v_cats', ['messages' => $messages]);
?>