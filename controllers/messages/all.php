<?php
    $messages = messagesAll();
    if(empty($messages))
    {
        include_once 'view/errors/v_404.php';
        exit();
    }
    $isTable = ($_GET['view'] ?? '') === 'table';//index.php?view-table
    $template = $isTable ? 'v_all_table' : 'v_all';
    $pageTitle = 'All messages';
    $pageContent = template($template, ['messages' => $messages, 'user' => $user]);
?>