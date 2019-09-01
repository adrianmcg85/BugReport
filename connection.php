<?php

$server = "localhost";
$username = "root";
$password = "12345";
$dbname = "qa_bug";
try{
$conn = new PDO("mysql:host=". $server .";dbname=" . $dbname, $username, $password);
echo "Success connection";
}
catch(Exception $e){
    echo "Connection failed" . $e;
}

?>