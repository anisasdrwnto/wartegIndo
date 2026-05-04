<?php 

$host     = 'gateway01.ap-southeast-1.prod.alicloud.tidbcloud.com';
$username = '436bhdGNwvGxVJh.root';
$password = 'mNh8CuuCJkcxcWJ4';
$database = 'warteg-indo';
$port     = 4000;

try{
    $dsn = "mysql:host=$host; port=$port; dbname=$database; username=$username; password=$password";
    $connection = new PDO($dsn, $username, $password, [
        PDO::MYSQL_ATTR_SSL_VERIFY_SERVER_CERT => false,
        PDO::ATTR_ERRMODE                      => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE           => PDO::FETCH_ASSOC,
        PDO::ATTR_TIMEOUT                      => 10,
    ]);

}catch(PDOException $error){
    http_response_code(500);
    die("DB Error: ". $error->getMessage());
}


