<?php

class Validator{

    public function check_empty($input1, $input2 = 'default')
    {
        return (strlen($input1) == 0 || strlen($input2) == 0);
    }


    public function check_user($input, $arr = [])
    {
        foreach($arr as $row)
        {
            if($input == $row['username'])
            {
                return true;
            }
        }
    }

    public function check_lenght($input, $limit)
    {
        return strlen($input) >= $limit;
    }

    public function check_img($file_name)
    {
        $valid_extension = ['jpeg', 'jpg', 'png', 'bmp', 'webp', 'svg', 'ico'];

        foreach($valid_extension as $type)
        {
            if($file_name == 'image/' . $type)
            {
                return true;
            }
        }
        return false;
    }

   

};