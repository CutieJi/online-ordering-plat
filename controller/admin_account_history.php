<?php


$history =  $database->get_info('select * from admin_profile join history on admin_profile.admin_id = history.shop_id');














require('./view/admin_account_history.view.php');