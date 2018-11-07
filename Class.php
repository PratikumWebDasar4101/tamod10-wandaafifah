<?php
class Data{
    private $conn;
    private $sql;

    public function Data(){
        $servername = "localhost";
        $username   = "root";
        $password   = "";
        $db         = "jurnal8";
        $this->conn = mysqli_connect($servername, $username, $password, $db);
    }

public function query($query)
{
        $this->sql = mysqli_query($this->conn, $query);
        if ($this->sql){
            return $this->sql;
        }else{
            echo $this->error();
        }
    }
public function error()
{
    return mysqli_error($this->conn);
}
public function fetchAll($result)
{
    return mysqli_fetch_assoc($result);
}
public function numRow($result)
{
    return mysqli_num_rows($result);
}
}