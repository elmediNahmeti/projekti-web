<?php
require_once "databaseConfig.php";

class produktMapper extends DatabasePDOConfiguration
{

    private $conn;
    private $query;

    public function __construct()
    {
        $this->conn = $this->getConnection();
    }
    public function getAllProducts()
    {
        $this->query = "select * from produktet";
        $statement = $this->conn->prepare($this->query);
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function getProductByID($product_id)
    {
        $this->query = "select * from produktet where id_produkti=:id";
        $statement = $this->conn->prepare($this->query);
        $statement->bindParam(":id", $product_id);
        $statement->execute();
        $result = $statement->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
    public function insertProduct($e, $c, $i, $a)
    {
        $this->query = "insert into produktet (emri,cmimi,img,added_By) values (:emri,:cmimi,:img,:added_By)";
        $statement = $this->conn->prepare($this->query);
        // echo '\n'.$e;
        // echo $c;
        // echo $i;
        // echo $a;
        $statement->bindParam(":emri", $e);
        $statement->bindParam(":cmimi", $c);
        $statement->bindParam(":img", $i, PDO::PARAM_LOB);
        $statement->bindParam(":added_By", $a);
        $statement->execute();
        $result = null;
        try {
            $result = $statement->fetch(PDO::FETCH_ASSOC);
        }
        catch( PDOException $Exception ) {
            echo $Exception->getMessage();
        }
        
        return $result;
    }
    public function deleteProduct($productID)
    {
        $this->query = "delete from produktet where id_produkti=:id";
        $statement = $this->conn->prepare($this->query);
        $statement->bindParam(":id", $productID);
        $statement->execute();
    }
}
