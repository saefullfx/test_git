<?php
class Connection{
public function get_connection(){
    $host = "localhost";
    $database = "ci_tutorial";
    $username = "root";
    $password = "";
    $connect = new mysqli($host, $username, $password, $database);
    return $connect;
 }
} 