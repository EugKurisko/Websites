<?php
return (function ()
{   
    $intGT0 = '[1-9]+\d*';
    $normUrl = '[0-9aA-zZ]+';

    return 
    [
        [
            'test' => '/^$/',
            'controller' => 'messages/all',
        ],
        [
            'test' => '/^add\/?$/',
            'controller' => 'messages/add',
        ],
        [
            'test' => '/^contacts\/?$/',
            'controller' => 'contacts',
        ],
        [
            'test' => "/^message\/($intGT0\/$intGT0)\/?$/",
            'controller' => 'messages/message',
            'params' => ['id' => 1]
        ],
        [
            'test' => "/^message\/($intGT0)\/?$/",
            'controller' => 'messages/message',
            'params' => ['id' => 1]
        ],
        [
            'test' => "/^delete\/($intGT0)\/?$/",
            'controller' => 'messages/delete',
            'params' => ['id' => 1]
        ],
        [
            'test' => "/^edit\/($intGT0)\/?$/",
            'controller' => 'messages/edit',
            'params' => ['id' => 1]
        ],
        [
            'test' => "/^categories\/($intGT0)\/?$/",
            'controller' => 'catalog/categories',
            'params' => ['id' => 1]
        ],
        [
            'test' => "/^allCats\/?$/",
            'controller' => 'catalog/allCats',
        ],
        [
            'test' => '/^addCat\/?$/',
            'controller' => 'catalog/addCat',
        ],
        [
            'test' => "/^deleteCat\/($intGT0)\/?$/",
            'controller' => 'catalog/deleteCat',
            'params' => ['id' => 1]
        ],
        [
            'test' => "/^category\/($intGT0)\/?$/",
            'controller' => 'catalog/category',
            'params' => ['id' => 1]
        ],
        [
            'test' => "/^editCat\/($intGT0)\/?$/",
            'controller' => 'catalog/editCat',
            'params' => ['id' => 1]
        ]
    ];
})();
?>