<?php

class Message
{
    private $emri;
    private $mbiemri;
    private $email;
    private $mesazhi;


    function __construct($emri, $mbiemri, $email, $mesazhi)
    {
        $this->firstname = $emri;
        $this->lastname = $mbiemri;
        $this->email = $email;
        $this->message = $mesazhi;
    }
    public function getEmri()
    {
        return $this->emri;
    }
    public function getMbiemri()
    {
        return $this->mbiemri;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function getMesazhi()
    {
        return $this->mesazhi;
    }
}
