    <?php
    ob_start();
    require('header.php');

    $name = filter_input(INPUT_POST, 'name');
    $car = filter_input(INPUT_POST, 'car');
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $comment = filter_input(INPUT_POST, 'comment');
    $id = null;
    $id = filter_input(INPUT_POST, 'USERID');

    $test = true;

    if($email === false){
        echo "<p> Please Enter Valid Email. </p>";
        $test = false;
    }

    if($test === true){
        try{
            require('connect.php');
            
            if(!empty($id)){
                $sql= "UPDATE auto SET name = :name, car = :car, email = :email, comment = :comment WHERE USERID = :USERID;";
            }
            else{
                $sql ="INSERT INTO auto (name, car, email, comment) VALUES(:name, :car, :email, :comment);";
            }
            
            $statement = $db->prepare($sql);

            $statement->bindParam(':name', $name);
            $statement->bindParam(':car', $car);
            $statement->bindParam(':email', $email);
            $statement->bindParam(':comment', $comment);

            if(!empty($id)){
                $statement->bindParam(':USERID', $id);
            }

            $statement->execute();

            $statement->closeCursor();
            header('location:view.php');

        }
        catch(PDOException $e){
            echo "<p> Something went wrong! </p>"; 
            $error_message = $e->getMessage(); 
            echo $error_message;

        }
    }
    ob_flush();
    require('footer.php');
    ?>
