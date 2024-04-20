<?php

namespace app\controllers;
use app\core\Controller;
use app\models\User;

class UserController 
{
    public function validateUser($inputData) {
        $errors = [];
        $fullname= $inputData['fullname'];
        $email= $inputData['email'];
        $phonenum = $inputData['phonenum'];
        $message = $inputData['message'];

        if ($fullname) {
            $fullname = htmlspecialchars($fullname, ENT_QUOTES|ENT_HTML5, 'UTF-8', true);
            if (strlen($fullname) < 2) {
                $errors['nameTooShort'] = 'name is too short';
            }
        } else {
            $errors['requiredName'] = 'name is required';
        }

        if($email){
            $email = htmlspecialchars($email, ENT_QUOTES|ENT_HTML5, 'UTF-8', true);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $errors['invalidEmail'] = 'invalid email';
            }
        }
        else {
            $errors['requiredEmail'] = 'email is required';
        }

        if ($phonenum) {
            if (!preg_match("/^\d{10}$/", $phonenum)) {
                $errors['invalidPhoneNumber'] = 'invalid phone number';
            }
        }
    
        if ($message) {
            if (strlen($message) < 10) {
                $errors['shortMessage'] = 'message is too short';
            }
        }
        
        if (count($errors)) {
            http_response_code(400);
            echo json_encode($errors);
            exit();
        }
        return [
            'fullname' => $fullname,
            'email' => $email,
            'phonenum' => $phonenum,
            'message' => $message,
        ];
    }
    public function getUsers($id)
    {
        $userModel = new User();
        header("Content-Type: application/json");
        if($id){
            $user = $userModel->getUserById($id);

        }
        else{
                    $users = $userModel->getAllUsers();
            }
        echo json_encode($users);
        exit();
    }

    public function saveUser() {
        $inputData=
        [
            'fullname' => $_POST['fullname'] ? $_POST['fullname']: false,
            'email' => $_POST['email'] ? $_POST['email']: false,
            'phonenum' => $_POST['phonenum'] ? $_POST['phonenum']: false,
            'message' => $_POST['message'] ? $_POST['message']: false,
        ];
        $userData = $this->validateUser($inputData);

        $user = new User();
        $user-> saveUser([
            'fullname' => $userData['fullname'],           
            'email' => $userData['email'],
            'phonenum' => $userData['phonenum'],           
            'message' => $userData['message'],            
        ]);
        http_response_code(200);
        echo json_encode([
            'success'=> true
        ]);
        exit();
    }
    public function contact()
        {   
            include '../public/assets/views/main/contact.php'; 
        }
}