<?php

$user_profile =  $database->get_info("select * from user_profile where user_id = {$_SESSION['user_id']}", [] ,false);


if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    if(isset($_POST['change_name']))
    {   
        $new_name = $_POST['name'];  
        if($validator->check_empty($new_name))
        {
            $alert = $custom_func->alert_setter('Is Empty - Please provide value', 'alert-danger', 'text-danger');
        }
        else if($validator->check_lenght($new_name, 12))
        {
            $alert = $custom_func->alert_setter('too long - maximum of 12 char', 'alert-danger', 'text-danger');
        }
        else
        {
            $database->insert_data('update user_profile set name = ? where user_id = ?', [$new_name, $_SESSION['user_id']]);
            header('location: user_home');
        }
    }



    if(isset($_POST['change_profile']))
    {
        $new_profile = $_FILES['new_profile'];
        $filename = $new_profile['name'];
        $old_location = $new_profile['tmp_name'];
        $new_location = 'view/img/' . $filename;
        if($validator->check_empty($filename))
        {
            $alert = $custom_func->alert_setter('Is Empty - Please provide value', 'alert-danger', 'text-danger');
        }
        else if($validator->check_img( $new_profile['type']))
        {
            move_uploaded_file($old_location, $new_location );
            $database->insert_data('update user_profile set user_img = ? where user_id = ?', [$filename, $_SESSION['user_id']]);
            header('location: user_home');
        }
        else
        {
            $alert = $custom_func->alert_setter('Invalid - Image only', 'alert-danger', 'text-danger');
        }
    }



    if(isset($_POST['deposit']))
    {   
        $deposit = $_POST['input_deposit'];
        $current_balance = $user_profile['balance'];
        $new_balance =  $current_balance + $deposit;
        $database->insert_data('update user_profile set balance = ? where user_id = ?', [$new_balance, $_SESSION['user_id']]);
        header('location: user_home');
    }



    if(isset($_POST['withdraw']))
    {
        $withdraw = $_POST['input_withdraw'];
        $current_balance = $user_profile['balance'];

        if($withdraw <= $current_balance)
        {
            $new_balance =  $current_balance - $withdraw;
            $database->insert_data('update user_profile set balance = ? where user_id = ?', [$new_balance, $_SESSION['user_id']]);
            header('location: user_home');
        }
        else
        {
            $alert = $custom_func->alert_setter("Out of Balance - Current balance: ₱{$current_balance}", 'alert-danger', 'text-danger');
        }
        
    }

  
}







include('./view/user_home.viewss.php');