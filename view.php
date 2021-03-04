<?php
    require('connect.php'); 

    $sql = "SELECT * FROM auto;"; 

    $statement = $db->prepare($sql); 

    $statement->execute(); 
 
    $comments = $statement->fetchAll();
     
    echo "<table class='table table-striped'><tbody>"; 

    foreach($comments as $comment) {
        echo 
        "<tr>
            <td>" . $comment['name'] . "</td>
            <td>" . $comment['car'] . "</td>
            <td>" . $comment['email'] . "</td>
            <td>" . $comment['comment'] . "</td>
        <td>
            <a href='delete.php?id=". $comment['user_id'] . "'> Delete Comment </a>
        </td>
        <td>
            <a href='index.php?id=". $comment['USERID']."'> Edit Comment </a> 
        </td>
        </tr>";
    }

    echo "</tbody></table>"; 

    //close the DB connection 
    $statement->closeCursor(); 
    require('footer.php'); 
    ?>