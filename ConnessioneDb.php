<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ConnessioneDb
 *
 * @author Tacco
 */
//class ConnessioneDb extends MySQLi {
//
//    function __construct() {
//        parent::__construct('127.0.0.1', 'root', '', 'lamucca');
//        if ($this->connect_error) {
//            die('Connessione fallita: ' . $this->connect_error);
//        }
//    }
//
//}

class ConnessioneDb {

    public $servername;
    public $username;
    public $password;
    public $database;
    public $conn;

    public function __construct() {
        $this->servername = "127.0.0.1";
        $this->username = "root";
        $this->password = "";
        $this->database = "lamucca";
        $this->conn = mysqli_connect($this->servername, $this->username, $this->password, $this->database);
    }

    public function query($query) {
        return  mysqli_query($this->conn, $query);
    }

}
