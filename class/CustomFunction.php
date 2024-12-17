<?php

class CustomFunction{

    public function alert_setter($text, $color, $text_color)
    {
        return [
            'text' => $text,
            'color' => $color,
            'text_color' => $text_color,
            'show' => true
        ];
    }


      
    function set_text($inPut, $shop)
    {
        global $input;
        global $update_data;
        
        $input = $_POST[$inPut];
        $update_data = $shop;
    }


    function set_img($inPut, $shop)
    {
        global $input;
        global $update_data;
        
        $input = $_FILES[$inPut]['name'];
        $update_data = $shop;
    }



    function update_price($query, $change)
    {
        $data = $_POST[$change];
        $id = $_POST['product_id'];

        global  $database;

        $database->insert_data($query, [$data, $id]);


        $selected_products = $database->get_info("select * from product where id = ?" , [$id] , false);
        
        $new_price = $selected_products['product_expenses'] +  $selected_products['product_profit'];

        $database->insert_data('update product set product_price = ? where id = ?', [$new_price, $_POST['product_id']]);
        header('location: admin_add');

    }

    function update_text($query, $change)
    {
        $data = $_POST[$change];
        
        $id = $_POST['product_id'];

        global  $database;

        $database->insert_data($query, [$data, $id]);
    }

    function delete_product()
    {
        $id = $_POST['product_id'];

        global  $database;

        $database->insert_data('delete from product where id = ?', [$id]);
        header('location: admin_add');
    }



    public function get_total($cart)
    { 
        $total = 0;

        foreach($cart as $item)
        {
            $total +=  $item['product_price'];
        }

        return  $total;
    }

    public function add_purchase_history($cart)
    {
        global  $database;

        foreach($cart as $item)
        {
            $admin_tax =  (5 / 100) * $item['product_price'];
            $total_profit = $item['product_profit'] - $admin_tax;

            $query = 'insert into history (name, expenses, profit, price, quantiy, product_id, shop_id, product_img, admin_tax, total_profit, date, user_id) value (?,?,?,?,?,?,?,?,?,?,?,?)';
            $value = [$item['product_name'], $item['product_expenses'], $item['product_profit'], $item['product_price'], $item['product_quantity'], $item['product_id'], $item['shop_id'], $item['product_img'], $admin_tax, $total_profit, date('M j Y'), $_SESSION['user_id']];
            $database->insert_data($query, $value);
        }

    }


    public function update_balance($current_balance, $total)
    {
        global  $database;
        $new_balance = $current_balance - $total;
        $database->insert_data('update user_profile set balance = ? where user_id = ?', [$new_balance, $_SESSION['user_id']]);
    }






    public function dashboard_get_total($info, $shop)
    {
        $total = 0;

        foreach($shop as $item)
        {
            $total +=  $item[$info];
        }

        return $total;
    }


    public function compute_percentage($items_number, $total_items)
    {
        return ($items_number / $total_items) * 100;
    }




}