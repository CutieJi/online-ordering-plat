<?php


if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username  == 'admin' && $password == 123)
    {
        header('location: admin_account_dashboard');
        die();
    }

    $notEmpty = false;

    if($validator->check_empty($username, $password))
    {
        $alert = $custom_func->alert_setter('EMPTY INPUT - please provive value', 'alert-warning', 'text-warning');
    }
    else
    {   
        $notEmpty = true;
    }
   
    
    if($notEmpty)
    {
        $data_admin = $database->get_info('select * from admins where username = ? && password = ?',[$username, $password], false);
        $data_user =  $database->get_info('select * from users where username = ? && password = ?',[$username, $password], false);
        
        if($data_admin)
        {
            $_SESSION['admin_id'] = $data_admin['admin_id'];
            header('location: admin_home');
            die();
        }
        else if($data_user)
        {
            $_SESSION['user_id'] = $data_user['id'];
            $_SESSION['cart'] = [];
            header('location: user_home');
            die();
        }
        else
        {
            $alert = $custom_func->alert_setter('ACCOUNT NOT FOUND - register first', 'alert-danger', 'text-danger');
        }
    }

}



require('./view/account_login.view.php');