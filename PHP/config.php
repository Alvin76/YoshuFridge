<?php

/**
 * Used to store website configuration information.
 *
 * @var string or null
 */
function config($key = '')
{
    $config = [
        'name' => 'Yoshu Fridge',
        'site_url' => 'http://fridge-o-matic.com/',
        'nav_menu' => [
            '' => 'home',
            'AboutUs' => 'AboutUs',
            'login' => 'log in',
            'myinventory' => 'my invertory',
            'recipies' => 'recipies',
            'shopinglist' => 'shoping list'
        ],
        /*'template_path' => 'template',*/
        'Content_path' => 'Content',
        'version' => 'v3.0',
    ];
    return isset($config[$key]) ? $config[$key] : null;
}
?>
