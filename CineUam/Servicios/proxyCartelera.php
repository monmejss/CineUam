<?php
class proxyCartelera{
    private $conn;

    public function __construct() {
        $this->conn = new mysqli("localhost", "root", "123456", "cineuam");
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public function query($sql) {
        return $this->conn->query($sql);
    }

    public function __destruct() {
        $this->conn->close();
    }
}
?>
