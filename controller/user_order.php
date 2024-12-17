<?php


$shops = $database->get_info('select * from admin_profile where shop_show = ?', ['Deploy']);
$user_profile =  $database->get_info("select * from user_profile where user_id = {$_SESSION['user_id']}", [] ,false);

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $_SESSION['visit_shop'] = $_POST['shop_id'];
    $_SESSION['cart'] = [];
    header("location: user_buy");
}


include('./view/user_order.view.php');