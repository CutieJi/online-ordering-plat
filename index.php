<?php

session_start();

require('class/Database.php');
require('class/Validator.php');
require('class/CustomFunction.php');

$database = new Database();
$validator = new Validator();
$custom_func = new CustomFunction();

$alert = [ 'show' => false];


$uri = $_SERVER['REQUEST_URI'];

$routes = [
'/ordering_system/' => 'controller/home.php',
'/ordering_system/login' => 'controller/account_login.php',
'/ordering_system/register' => 'controller/account_register.php',
'/ordering_system/admin_home' => 'controller/admin_home.php',
'/ordering_system/admin_dashboard' => 'controller/admin_dashboard.php',
'/ordering_system/admin_sales' => 'controller/admin_sales.php',
'/ordering_system/admin_add' => 'controller/admin_add.php',
'/ordering_system/user_home' => 'controller/user_home.php',
'/ordering_system/user_order' => 'controller/user_order.php',
'/ordering_system/user_buy' => 'controller/user_buy.php',
'/ordering_system/user_history' => 'controller/user_history.php',
'/ordering_system/admin_account_dashboard' => 'controller/admin_account_dashboard.php',
'/ordering_system/admin_account_history' => 'controller/admin_account_history.php',
'/ordering_system/admin_account_accounts' => 'controller/admin_account_accounts.php',
];




if(array_key_exists($uri, $routes))
{
    require($routes[$uri]);
}else{
    echo 'page not found';
}