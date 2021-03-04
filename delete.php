<?php 
ob_start(); 
try {
    $comment_id = filter_input(INPUT_GET, 'id'); 
    
    require('connect.php'); 
     
    $sql = "DELETE FROM auto WHERE USERID = :USERID"; 
    
    $statement = $db->prepare($sql); 
    
    $statement->bindParam(':USERID', $comment_id); 
    
    $statement->execute(); 
     
    $statement->closeCursor();
    header('location:view.php'); 
}
catch(PDOException $e) {
    header('location:error.php');
}
ob_flush(); 
?> 