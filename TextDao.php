<?php
require_once "Conn.php";

class TextDao {
    private $conn;
    public function __construct()
    {

        $address = "localhost";
        $username = "root";
        $password = "password";
        $database = "blog";
        $db = new Conn($address,$username,$password,$database);
        $this->conn = $db->conn();
        if ($this->conn == null) {
            return ;
        }
    }

    public function findAll()
    {
        $sql = "select * from text";
        $result_set = $this->conn->query($sql);
        return $result_set->fetch_all(MYSQLI_ASSOC);
    }
    public function findById($id)
    {
        $sql = "select * from text where id = $id";
        $result_set = $this->conn->query($sql);
        return $result_set->fetch_all(MYSQLI_ASSOC);
    }
    public function insert($arr) {
        $sql = "insert into text values ('";
        $sql .= implode("','",$arr);
        $sql .= "')";
        echo $sql;
        $res = $this->conn->query($sql);
        if (!$res) {
            echo $this->conn->error;
        }
    }
}