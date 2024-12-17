<?php


$admin_info = $database->get_info("select * from admin_profile where admin_id = {$_SESSION['admin_id']}", [] ,false);

$shop_history = $database->get_info('select * from history where shop_id = ?', [$admin_info['admin_id']]);



include('./view/admin_sales.view.php');