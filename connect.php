<?php
try {
    $dsn = 'mysql:host=172.31.22.43;dbname=Dakota200429658'; 
    $username = 'Dakota200429658';  
    $password = 'zRxiqUYcKB'; 

    $db = new PDO($dsn, $username, $password); 
}
catch(PDOException $e){
    echo "<p>Something failed</p>"; 
    $error_message = $e->getMessage(); 
    echo $error_message; 
}
?>