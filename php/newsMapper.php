<?php
require_once "databaseConfig.php";

class newsMapper extends DatabasePDOConfiguration
{

    private $conn;
    private $query;

    public function __construct()
    {
        $this->conn = $this->getConnection();
    }
    public function getAllNews()
    {
        $this->query = "select * from news";
        $statement = $this->conn->prepare($this->query);
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    public function removeNews($newsId)
    {
        $this->query = "delete from news where id_lajmi=:id";
        $statement = $this->conn->prepare($this->query);
        $statement->bindParam(":id", $newsId);
        $statement->execute();
    }
    public function insertNews($t, $l, $i, $a)
    {
        $this->query = "insert into news (titulli,lajmi,img,added_By) values (:titulli,:lajmi,:img,:added_By)";
        $statement = $this->conn->prepare($this->query);
        $titulli = $t;
        $lajmi = $l;
        $img = $i;
        $added_By = $a;
        $statement->bindParam(":titulli", $titulli);
        $statement->bindParam(":lajmi", $lajmi);
        $statement->bindParam(":img", $img);
        $statement->bindParam(":added_By", $added_By);
        $statement->execute();
    }
}
