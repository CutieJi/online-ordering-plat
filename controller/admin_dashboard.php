<?php

$admin_info = $database->get_info("select * from admin_profile where admin_id = {$_SESSION['admin_id']}", [] ,false);
$shop_history = $database->get_info('select * from history where shop_id = ?', [$admin_info['admin_id']]);

$total_quantity = $custom_func->dashboard_get_total('quantiy', $shop_history);
$total_sales = $custom_func->dashboard_get_total('price', $shop_history);
$total_profit = $custom_func->dashboard_get_total('total_profit', $shop_history);
$total_admin_share = $custom_func->dashboard_get_total('admin_tax', $shop_history);




include('./view/admin_dashboard.view.php');