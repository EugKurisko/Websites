<?php
    $id = (int)URL_PARAMS['id'];
    $message = getMessage($id);
    $exists = ($message !== null);
    if($exists)
    {   
        $cat = getCategorie($message['id_cat']);
        $left = template('messages/v_message_menu', ['message' => $message]);
        $content = template('messages/v_message_main', ['message' => $message, 'cat' => $cat]);
        $pageTitle = $message['name'];
        $pageContent = template('base/v_con2col', ['left' => $left, 
            'content' => $content,
            'title' => 'Message'
        ]);
    }
    else
    {
       header('HTTP/1.1 404 Not Found');
       $pageContent = template('errors/v_404');
    }
?>