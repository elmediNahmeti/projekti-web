<?php
require_once "databaseConfig.php";

class contactUsMapper extends DatabasePDOConfiguration
{
    private $conn;
    private $query;

    public function __construct()
    {
        $this->conn = $this->getConnection();
    }

    public function getAllMessages()
    {
        $this->query = "select * from Messages";
        $statement = $this->conn->prepare($this->query);
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    public function insertMessage($e, $mb, $em, $me)
    {
        $this->query = "insert into messages (emri,mbiemri,email,message) values (:emri,:mbiemri,:email,:message)";
        $statement = $this->conn->prepare($this->query);
        $emri = $e;
        $mbiemri = $mb;
        $email = $em;
        $mesazhi = $me;
        $statement->bindParam(":emri", $emri);
        $statement->bindParam(":mbiemri", $mbiemri);
        $statement->bindParam(":email", $email);
        $statement->bindParam(":message", $mesazhi);
        $statement->execute();
    }
    public function deleteMessage($id)
    {
        $this->query = "delete from messages where message_ID=:id";
        $statement = $this->conn->prepare($this->query);
        $statement->bindParam(":id", $id);
        $statement->execute();
    }
}
