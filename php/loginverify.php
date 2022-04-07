<?php
include_once 'AdminUser.php';
include_once 'SimpleUser.php';
require_once 'userMapper.php';
session_start();

if (isset($_POST['btn-login'])) {
    $login = new LoginLogic($_POST);

    $login->verifyData();
} else if (isset($_POST['register-btn'])) {
    $register = new RegisterLogic($_POST);

    $register->insertData();
}

class LoginLogic
{
    private $username = "";
    private $password = "";

    public function __construct($formData)
    {
        $this->username = $formData['username'];
        $this->password = $formData['password'];
    }

    public function verifyData()
    {
        if ($this->variablesNotDefinedWell($this->username, $this->password)) {
            header("Location:../views/login.php");
            echo 'emptyvariables';
            
        }
        if ($this->usernameAndPasswordCorrect($this->username, $this->password)) {
           
            header("Location:../index.php");
        } else {
            header("Location:../views/login.php");
            echo 'ERROR';
        }
    }
    private function variablesNotDefinedWell($username, $password)
    {
        if (empty($username) || empty($password)) {
            return true;
        }
        return false;
    }

    private function usernameAndPasswordCorrect($username, $password)
    {
        $mapper = new UserMapper();
        $user = $mapper->getUserByUsername($username);
        //print_r($user);
        $hashUSERPASSWORD = password_hash($user['password'], PASSWORD_BCRYPT);
        //var_dump(password_verify($password, $user['password']));
        //password_verify($password,$user['password'])
        if ($user == null || count($user) == 0) {
            return false;
        } else if (password_verify($password, $user['password'])) {
            if ($user['role'] == 1) {
                print_r('testrole');
                $obj = new AdminUser($user['user_id'], $user['username'], $user['email'], $user['password']);
                print_r($obj);
                $obj->setSession();
            } else {
                $obj = new SimpleUser($user['user_id'], $user['username'], $user['email'], $user['password']);
                $obj->setSession();
            }
            return true;
        } else
            return false;
    }
}
class RegisterLogic
{
    private $username = "";
    private $email = "";
    private $password = "";


    public function __construct($formData)
    {
        $this->username = $formData['username'];
        $this->password = $formData['password'];
        $this->email = $formData['email'];
    }

    public function insertData()
    {

        if ($this->variablesNotDefinedWell($this->username, $this->password, $this->email)) {
            header("Location:../views/login.php");
            echo 'emptyvariables';
        } else {
            $user = new SimpleUser($this->username, $this->password, $this->email, 0);
            $mapper = new UserMapper();
            $mapper->insertUser($user);
            header("Location:../index.php");
        }
    }
    private function variablesNotDefinedWell($username, $password, $email)
    {
        if (empty($username) || empty($password) || empty($email)) {
            return true;
        }
        return false;
    }
}
