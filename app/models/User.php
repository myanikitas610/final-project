<?php

namespace app\models;

use app\core\Database;

class User
{
    use Database;

    protected $table = 'contactMe';

    public function getAllUsers() {
        $query = "select * from users";
        $result =  $this->query($query);
        return $result;
    }
    public function getUserById($id) {
        $query = "select * from users where id = $id";
        return $this->query($query, ['id' => $id]);
    }
    public function saveUser($inputData) {
        $query = "INSERT INTO $this->table (email, fullname, phonenum, message) VALUES (:email, :fullname, :phonenum, :message);";
        return $this->query($query, $inputData);
    
    }
    
   
}