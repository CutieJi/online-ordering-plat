<?php


$admin_info = $database->get_info("select * from admin_profile where admin_id = {$_SESSION['admin_id']}", [] ,false);

if($_SERVER['REQUEST_METHOD'] == 'POST')
{   
    if(isset($_POST['deploy']))
    {
        $shop_show = $admin_info['shop_show'];

        switch($shop_show)
        {
            case 'Hide':
                $database->insert_data("update admin_profile set shop_show = ? where admin_id = ?" , ['Deploy', $_SESSION['admin_id']]);
            break;

            case 'Deploy':
                $database->insert_data("update admin_profile set shop_show = ? where admin_id = ?" , ['Hide', $_SESSION['admin_id']]);
            break;
        }

        header('location: admin_home');
    }

    
    $input;
    $update_data;

    $choice1 = false;
    $choice2 = false;
    $choice3 = false;
    $choice4 = false;

    $successful = false;


    if(isset($_POST['submit1']))
    {
        $custom_func->set_text('input1','shop_name');
        $choice1 = true;
    }
    else if(isset($_POST['submit2']))
    {
        $custom_func->set_text('input2','shop_category');
        $choice2 = true;
    }
    else if(isset($_POST['submit3']))
    {
        $custom_func->set_img('input3', 'shop_logo');
        $choice3 = true;
    }
    else if(isset($_POST['submit4']))
    {
        $custom_func->set_img('input4', 'shop_theme');
        $choice4 = true;
    }



    if($validator->check_empty($input))
    {
        $alert = $custom_func->alert_setter('EMPTY INPUT - please provide value', 'alert-warning', 'text-warning');
    }
    else if($choice1)
    {   
        if($validator->check_lenght($input, 13)){
            $alert = $custom_func->alert_setter('input issue - 9 maximum character', 'alert-danger', 'text-danger');
        }else{
            $successful = true;
        }
    }
    else if($choice2)
    {   
        if($validator->check_lenght($input, 13)){
            $alert = $custom_func->alert_setter('input issue - 12 maximum character', 'alert-danger', 'text-danger');
        }else{
            $successful = true;
        }
    }
    else if($choice3)
    {
        $filename = $_FILES['input3']['name'];
        $old_location = $_FILES['input3']['tmp_name'];
        $new_location = 'view/img/' . $filename;
       
        if($validator->check_img( $_FILES['input3']['type']))
        {
            move_uploaded_file($old_location, $new_location );
            $successful = true;
        }
        else
        {
            $alert = $custom_func->alert_setter('Invalid - Image only', 'alert-danger', 'text-danger');
        }
    }
    else if($choice4)
    {
        $filename = $_FILES['input4']['name'];
        $old_location = $_FILES['input4']['tmp_name'];
        $new_location = 'view/img/' . $filename;
       
        if($validator->check_img( $_FILES['input4']['type']))
        {
            move_uploaded_file($old_location, $new_location );
            $successful = true;
        }
        else
        {
            $alert = $custom_func->alert_setter('Invalid - Image only', 'alert-danger', 'text-danger');
        }
    }
    else
    {
        $successful = true;
    }

    
    if($successful)
    {
        $input_info = $input; 
        $update = $update_data;
        $database->insert_data("update admin_profile set " .   $update  . " = ? where admin_id = ?" , [ $input_info, $_SESSION['admin_id']]);
        header('location: admin_home');  

    }

 

}


include('./view/admin_home.view.php');