<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

include "../config/config.php";

/**
 * Class MySqlDb 
 * used to connect to mysql server
 */
class MySqlDb {

    protected $host;
    protected $username;
    protected $password;
    protected $db;
    protected $conn;

    function __construct(){
        global $DB_CONFIG;
        $this->host = $DB_CONFIG['HOST'] ;
        $this->username = $DB_CONFIG['USERNAME'];
        $this->password = $DB_CONFIG['PASSWORD'];
        $this->db = $DB_CONFIG['NAME'];
        $this->connect();
    }
    
    private function connect(){
        $this->conn = new mysqli($this->host, $this->username, $this->password, $this->db);
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    static function getAllData($table) {
        $mysql = new MySqlDb();

        $sql = "SELECT * FROM ".$table;
        $sql = $mysql->conn->query($sql);
        $rows = array();
        while($row = $sql->fetch_assoc()) {
            $rows[] = $row;
        }
        return $rows;
    }

    static function getArrData($table, $where) {
        $mysql = new MySqlDb();

        $sql = "SELECT * FROM ".$table." WHERE ".$where;
        $sql = $mysql->conn->query($sql);
        $rows = array();
        while($row = $sql->fetch_assoc()) {
            $rows[] = $row;
        }
        return $rows;
    }
    
    static function getData($table, $where){
        $mysql = new MySqlDb();

        $sql = "SELECT * FROM ".$table." WHERE ".$where;          
        $sql = $mysql->conn->query($sql);
        return $sql->fetch_assoc();
    }

    static function countData($table) {
        $mysql = new MySqlDb();

        $sql = "SELECT COUNT(*) FROM ".$table;
        $sql = $mysql->conn->query($sql);
        return $sql->fetch_row()[0];
    }

    static function checkData($table, $where) {
        $mysql = new MySqlDb();

        $sql = "SELECT * FROM ".$table." WHERE ".$where;          
        $sql = $mysql->conn->query($sql);
        $obj = new stdClass();
        if(mysqli_num_rows($sql) > 0){
            $sql = $sql->fetch_assoc();
            unset($sql['u_password']);
            $obj->success = true;
            $obj->data = $sql;
        }else{
            $obj->success = false;
        }
        return $obj;
    }

    static function  updateData($table, $update_value, $where){
        $mysql = new MySqlDb();

        $sql = "UPDATE ".$table." SET ".$update_value." WHERE ".$where;        
        print_r($sql);
        $sql = $mysql->conn->query($sql);
        if($sql){
            return true;
        }else{
            return false;
        }
    }

    static function createData($table, $columns, $values){
        $mysql = new MySqlDb();

        $sql = "INSERT INTO ".$table." (".$columns.") VALUES (".$values.')';  
        $sql = $mysql->conn->query($sql);
        if($sql){
            return true;
        }else{
            return false;
        }
    }

    static function deleteData($table, $filter){
        $mysql = new MySqlDb();

        $sql =  "DELETE FROM ".$table." ".$filter;  
        $sql = $mysql->conn->query($sql);
        if($sql){
            return true;
        }else{
            return false;
        }
    }
}
