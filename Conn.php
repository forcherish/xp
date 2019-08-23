<?php


class Conn {
    private $address = "";
    private $username = "";
    private $password = "";
    private $database = "";
    private $conn;

    public function __construct($address,$username,$password,$database)
    {
        $this->address = $address;
        $this->username = $username;
        $this->password = $password;
        $this->database = $database;
    }

    public function conn()
    {
        $this->conn = new MySqli($this->address,$this->username,$this->password,$this->database);
        
        if(mysqli_connect_error()) {
            echo "数据库连接失败";
            return null;
        }

        $this->conn->query("set names utf8");
        return $this->conn;
    }

}

?>