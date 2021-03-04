<?php
try {
    $dsn = 'mysql:host=localhost;dbname=auto'; 
    $username = 'root';  
    $password = 'Dakota1234'; 

    $db = new PDO($dsn, $username, $password); 
}
catch(PDOException $e){
    echo "<p>Something failed</p>"; 
    $error_message = $e->getMessage(); 
    echo $error_message; 
}
?>