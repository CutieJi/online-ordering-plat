<?php

class Database{

    public function pdo()
    {
        return new PDO('mysql:host=localhost; user=root;dbname=ordering_system');
    }

    public function get_info($query, $arr = [], $type = true)
    {
        $stmt = $this->pdo()->prepare($query);
        $stmt->execute($arr);
        if($type)
        {
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        else
        {
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }
    }

    public function insert_data($query, $arr = [])
    {
        $stmt = $this->pdo()->prepare($query);
        $stmt->execute($arr);
    }



};