<?php


if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $username = $_POST['username'];
    $password = $_POST['password'];
    $account_type =  $_POST['account_type'];

    $successul = false;

    $username_admin = $database->get_info('select username from admins',[],true);
    $username_users = $database->get_info('select username from users',[],true);

    $all_username = array_merge($username_admin, $username_users);

    if($username == 'admin')
    {
        $alert = $custom_func->alert_setter('invalid username - admin already exist', 'alert-danger', 'text-danger');
    }
    else if($validator->check_empty($username, $password))
    {
        $alert = $custom_func->alert_setter('EMPTY INPUT - please provive value', 'alert-warning', 'text-warning');
    }
    else if($validator->check_user($username, $all_username))
    {
        $alert = $custom_func->alert_setter('Username Already Taken!', 'alert-danger', 'text-danger');
    }
    else
    {
        $successul = true;
    }


    if($successul)
    {
        switch($account_type)
        {
            case 'user':
                $database->insert_data('insert into users(username,password, account_type) values (?,?,?)',[ $username, $password, $account_type]);
                $user_id = $database->get_info('select id from users where username = ? && password = ?', [$username, $password], false );
                $database->insert_data('insert into user_profile(name, balance, user_id, user_img) values (?, ?, ?, ?)', ['name', 0, $user_id['id'], 'default.png' ] );
            break;

            case 'admin':
                $database->insert_data('insert into admins(username,password, account_type) values (?,?,?)',[ $username, $password, $account_type]);
                $admin_id = $database->get_info('select admin_id from admins where username = ? && password = ?', [$username, $password], false );
                $database->insert_data('insert into admin_profile(shop_name,shop_category, shop_logo, shop_theme, admin_id, shop_show) values (?,?,?,?,?,?)', ['name', 'category', 'default.png', 'default.png', $admin_id['admin_id'], 'Hide'] );
            break;
        }
       
        $alert = $custom_func->alert_setter('Account Created - proceed to login', 'alert-success', 'text-success');

    }
}



require('./view/account_register.view.php');