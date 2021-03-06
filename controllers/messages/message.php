<?php
    $id = (int)URL_PARAMS['id'];
    $message = getMessage($id);
    $exists = ($message !== null);
    if($exists)
    {   
        $left = null;
        $cat = getCategorie($message['id_cat']);
        $pageTitle = $message['name'];
        $content = template('messages/v_message_main', ['message' => $message, 'cat' => $cat]);
        if(getUserIdFromMessage($message['id']) == $user['id_user'])
        {
            $left = template('messages/v_message_menu', ['message' => $message]);
        }
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