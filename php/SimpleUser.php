<?php
include_once 'person.php';

class SimpleUser extends Person{
    public function __construct($username,$password,$email,$role) {
        parent::__construct($username,$password,$email,$role);
    }

    public function setSession (){

        $_SESSION["role"] = 0;
        $_SESSION['roleName'] = "SimpleUser";
    }

    public function setCookie(){
        setcookie("username" , $this->getUsername(),date("d M Y H:i:s"));
    }

    public function getEmail()
    {
        return $this->email;
    }
    public function getUsername()
    {
        return $this->username;
    }
    public function getPassword()
    {
        return $this->password;
    }
    public function getRole()
    {
        return $this->role;
    }

}