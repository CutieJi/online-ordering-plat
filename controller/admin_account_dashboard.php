<?php

$business_info = $database->get_info('select * from admin_profile');
$all_history = $database->get_info('select * from history');
$all_business = $database->get_info('select * from admins');
$all_users = $database->get_info('select * from users');


$shops = [];

$admin_share_profit = $custom_func->dashboard_get_total("admin_tax", $all_history);

$users = count($all_users);
$business = count($all_business);
$all_accounts = $users + $business;

$users_percentage = number_format($custom_func->compute_percentage($users, $all_accounts), 2);
$business_percentage = number_format($custom_func->compute_percentage($business, $all_accounts), 2);


foreach($business_info as $shop)
{
    $history =  $database->get_info('select * from history where shop_id = ?', [$shop['admin_id']]);

    $admin_share = $custom_func->dashboard_get_total("admin_tax", $history);

    $business_obj = ['shop_logo' => $shop['shop_logo'], 'shop_name' => $shop['shop_name'], 'admin_share' => $admin_share];

    array_push($shops, $business_obj);
}

usort($shops, function($a, $b) {
    return $b['admin_share'] <=> $a['admin_share']; 
});


require('./view/admin_account_dashboard.view.php');