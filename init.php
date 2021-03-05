<?php

    const HOST = 'http://localhost';
    const BASE_URL = '/Lesson5/';
    const DB_HOST = 'localhost';
    const DB_NAME = 'messages';
    const DB_USER = 'root';
    const DB_PASS = '';
    
    include_once('core/arr.php');
    include_once('core/db.php');
    include_once('core/system.php');

    include_once('model/messages.php');
    include_once('model/categories.php');
    include_once('model/users.php');
    include_once('model/sessions.php');
?>