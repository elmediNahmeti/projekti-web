<?php
abstract class Person
{
    protected $username;
    protected $password;
    protected $email;
    protected $role;

    function __construct($username, $password, $email, $role)
    {
        $this->username = $username;
        $this->password = $password;
        $this->email = $email;
        $this->role = $role;
    }

    abstract protected function setSession();
    abstract protected function setCookie();
}
