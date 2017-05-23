<?php

$hostname = '172.17.0.1';
$username = 'root';
$password = 'root';
$dbname = 'file_upload';

define('KEY_SALT', 'kdfjkdsfjksjf94');

//Create connection to mysql database
$conn = new mysqli($hostname, $username, $password, $dbname);

if($conn->connect_error){
    die('Fail to connect to mysql database');
}