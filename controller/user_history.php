<?php

$user_profile =  $database->get_info("select * from user_profile where user_id = {$_SESSION['user_id']}", [] ,false);


$user_history = $database->get_info('select * from history where user_id = ?', [$user_profile['user_id']]);












include('./view/user_history.view.php');