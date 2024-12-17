<?php

$user_profile =  $database->get_info("select * from user_profile where user_id = {$_SESSION['user_id']}", [] ,false);

$products = $database->get_info('select * from product where shop_id = ?', [$_SESSION['visit_shop']]);
$shop_info = $database->get_info('select * from admin_profile where admin_id = ?', [$_SESSION['visit_shop']], false);

$cart = [];
$total = 0;
$index = 0;

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    if(isset($_POST['add']))
    {
        $product_name = $_POST['product_name'];
        $product_price = $_POST['product_price'];
        $product_quantity =  $_POST['product_quantity'];
        $product_img = $_POST['product_img'];
        $product_id =  $_POST['product_id'];
        $shop_id =  $_POST['shop_id'];
        $product_computed_price = (int)$product_price * (int)$product_quantity;
        $expenses =  (int)$_POST['product_expenses'] * (int)$product_quantity;
        $profit =  (int)$_POST['product_profit'] * (int)$product_quantity;

        $add_item = [
            "product_name" => $product_name,
            "product_price" => $product_computed_price,
            "product_quantity" => $product_quantity,
            "product_img" =>  $product_img,
            "product_id" => $product_id,
            "shop_id" => $shop_id,
            "product_expenses" => $expenses,
            "product_profit" => $profit,
        ];
        
        array_push($_SESSION['cart'],  $add_item);

        $cart = [...$_SESSION['cart']];

        $total = $custom_func->get_total($cart);
    }



    if(isset($_POST['remove']))
    {
        global $cart;
        $delete_index = $_POST['index'];
        array_splice($_SESSION['cart'], $delete_index, 1);

        $cart = [...$_SESSION['cart']];

        $total = $custom_func->get_total($cart);
    }



    if(isset($_POST['pay']))
    {
        $current_balance = $user_profile['balance'];
        global $total;
       
        $cart = [...$_SESSION['cart']];
        $total = $custom_func->get_total($cart);

    
        if($total <  $current_balance)
        { 
            $custom_func->add_purchase_history($cart);
            $custom_func->update_balance($current_balance, $total);
            $_SESSION['cart'] = [];
            header('location: user_buy');
        }
        else
        {
            $alert = $custom_func->alert_setter("Out of Balance - Current balance: ₱{$current_balance}", 'alert-danger', 'text-danger');
        }

    }

}



include('./view/user_buy.view.php');