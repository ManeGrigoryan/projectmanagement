<?php
global $app;

use \Psr\Http\Message\ServerRequestInterface;

$container = $app->getContainer();
$container['mysql'] = function ($container) {
//    global $mysqli;
    $mysqli = mysqli_connect("localhost", "root", "", "test_db");
    return $mysqli;
};

$container['permission'] = function () {
//    global $permission;
    $permission = array(
        'admin' => array('add_new_project', 'add_new_user', 'search_in_tasks', 'search_in_projects', 'see_users_list', 'add_new_task'),
        'manager' => array('add_new_task', 'search_in_tasks', 'see_users_list', 'search_in_projects'),
        'developer' => array('search_in_tasks', 'search_in_projects'));
    return $permission;
};
$container['view'] = function ($container) {
//    global $view;
    $view = new \Slim\Views\Twig(__DIR__.'/../html/TwigViews');

    // Instantiate and add Slim specific extension
    $basePath = rtrim(str_ireplace('index.php', '', $container['request']->getUri()->getBasePath()), '/');
    $view->addExtension(new Slim\Views\TwigExtension($container['router'], $basePath));
    return $view;
};

?>