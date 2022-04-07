<?php
include_once 'contactUsMapper.php';
include_once 'Message.php';

if (isset($_POST['btn-contact'])) {
    $message = new MessageLogic($_POST);
    $message->insertData();
}

class MessageLogic
{
    private $emri;
    private $mbiemri;
    private $email;
    private $mesazhi;
    public function __construct($formData)
    {
        $this->emri = $formData['emri'];
        $this->mbiemri = $formData['mbiemri'];
        $this->email = $formData['email'];
        $this->mesazhi = $formData['mesazhi'];
    }
    public function insertData()
    {
        if ($this->variablesNotDefinedWell($this->emri, $this->mbiemri, $this->email, $this->mesazhi)) {
            header("Location:../contact_us.php");
        } else {
            $mapper = new contactUsMapper();
            $mapper->insertMessage($this->emri, $this->mbiemri, $this->email, $this->mesazhi);
            header("Location:../index.php");
        }
    }
    private function variablesNotDefinedWell($emri, $mbiemri, $email, $mesazhi)
    {
        if (empty($emri) || empty($mbiemri || empty($email) || empty($mesazhi))) {
            return true;
        }
        return false;
    }
}
