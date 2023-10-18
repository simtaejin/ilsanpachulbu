<h1>It works!!</h1>
<?php
$host = "mysql";
$user = "secret";
$password = "secret";
// $db = "demo";

$conn = new mysqli($host, $user, $password); 
if($conn -> connect_error){ 
    echo 'connection failed' . $conn -> connect_error;
} else {
    echo 'Sucessfully connected to MYSQL';
}

phpinfo();
?>