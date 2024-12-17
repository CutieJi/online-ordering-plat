<?php

$admin_info = $database->get_info("select * from admin_profile where admin_id = {$_SESSION['admin_id']}", [] ,false);

$products = $database->get_info("select * from product where shop_id = {$_SESSION['admin_id']}", []);

if($_SERVER['REQUEST_METHOD'] == 'POST')
{

    if(isset($_POST['add']))
    {
        $name = $_POST['name'];
        $image = $_FILES['image'];
        $expenses = $_POST['expenses'];
        $profit = $_POST['profit'];
        $price;
        $newName;

        $successful = false;
        
        if($validator->check_empty($name))
        {
            $alert = $custom_func->alert_setter('EMPTY Name - please provide value', 'alert-warning', 'text-warning');
        }
        else if($validator->check_lenght($name, 10))
        {
            $alert = $custom_func->alert_setter('too long - maximum of 10 char', 'alert-warning', 'text-warning');
        }
        else if($validator->check_empty($image['name']))
        {
            $alert = $custom_func->alert_setter('EMPTY Image - please provide value', 'alert-warning', 'text-warning');
        }
        else if($validator->check_empty($expenses))
        {
            $alert = $custom_func->alert_setter('EMPTY Expenses - please provide value', 'alert-warning', 'text-warning');
        }
        else if($validator->check_empty($profit))
        {
            $alert = $custom_func->alert_setter('EMPTY Profit - please provide value', 'alert-warning', 'text-warning');
        }
        else
        {
            $filename = $image['name'];
            $extension = pathinfo($filename, PATHINFO_EXTENSION); 
            $newName = uniqid() .  $extension;
            $old_location = $image['tmp_name'];
            $new_location = 'view/img/' . $newName;
           
            if($validator->check_img( $image['type']))
            {
                move_uploaded_file($old_location, $new_location );
                $successful = true;
                $price = $expenses + $profit;
            }
            else
            {
                $alert = $custom_func->alert_setter('Invalid - Image only', 'alert-danger', 'text-danger');
            }
        }

        if($successful)
        {
            $database->insert_data('insert into product (product_name, product_img, product_expenses, product_profit, product_price, shop_id) values (?,?,?,?,?,?)', [$name, $newName, $expenses, $profit, $price, $_SESSION['admin_id']]);
            header('location: admin_add');
        }

    }

 


    if(isset($_POST['update_name'])) 
    {
        $custom_func->update_text('update product set product_name = ? where id = ?', 'name');
        header('location: admin_add');
    }

    if(isset($_POST['update_image']))
    {
            $image = $_FILES['image'];
            $filename = $image['name'];
            $extension = pathinfo($filename, PATHINFO_EXTENSION); 
            $newName = uniqid() .  $extension;
            $old_location = $image['tmp_name'];
            $new_location = 'view/img/' . $newName;
           
            if($validator->check_img( $image['type']))
            {
                move_uploaded_file($old_location, $new_location );
                $database->insert_data('update product set product_img = ? where id = ?', [$newName , $_POST['product_id']]);
                header('location: admin_add');
            }
            else
            {
                $alert = $custom_func->alert_setter('Invalid - Image only', 'alert-danger', 'text-danger');
            }
    }

    if(isset($_POST['update_expenses']))
    {
        $custom_func->update_price('update product set product_expenses = ? where id = ?', 'expenses');
    }

    if(isset($_POST['update_profit']))
    {
        $custom_func->update_price('update product set product_profit = ? where id = ?', 'profit');
    }


    if(isset($_POST['remove']))
    {
        $custom_func->delete_product();
    }



}


include('./view/admin_add.view.php');