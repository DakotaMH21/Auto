<<?php require('header.php'); 

$id = null; 
$name = null;
$car = null; 
$email = null;
$comment = null; 

if(!empty($_GET['id']) && (is_numeric($_GET['id']))) {
     
    $id = filter_input(INPUT_GET, 'id');
     
    require('connect.php'); 
     
    $sql = "SELECT * FROM songs WHERE USERID = :USERID;"; 
    
    $statement = $db->prepare($sql); 
     
    $statement->bindParam(':USERID', $id); 
     
    $statement->execute(); 
     
    $records = $statement->fetchAll(); 
    foreach($records as $record) :
        $name = $record['name']; 
        $car = $record['car']; 
        $email = $record['email']; 
        $comment = $record['comment']; 

     endforeach; 
     $statement->closeCursor(); 
    }
?>
    
    <main>
        <form action="process.php" method="post">
            <input type="hidden" name="user_id" value="<?php echo $id; ?>">
            <div class="form-group">
                <input type="text" name="name" placeholder="Name" class="form-control" value="<?php echo $name; ?>">
            </div>
            <div class="form-group">
                <input type="text" name="car" placeholder="Your Car" class="form-control" value="<?php echo $car; ?>">
            </div> 
            <div class="form-group">
                <input type="text" name="email" placeholder="Email" class="form-control" value="<?php echo $email; ?>">
            </div>
            <div class="form-group">
                <input type="text" name="comment" placeholder="Your Comment" class="form-control" value="<?php echo $comment; ?>">
            </div>
            <input type="submit" value="submit" name="submit" class="btn btn-primary">
        </form>
    </main>
<?php require('footer.php'); ?>