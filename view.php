<?php
    require('connect.php'); 

    $sql = "SELECT * FROM auto;"; 

    $statement = $db->prepare($sql); 

    $statement->execute(); 
 
    $records = $statement->fetchAll();
     
    echo "<table class='table table-striped'><tbody>"; 

    foreach($records as $record) {
        echo "<tr><td>" . $record['name'] . "</td><td>" . $record['car'] . "</td><td>" . $record['email'] . "</td><td>". $record['comment'] . "</td>
        <td><a href='delete.php?id=". $record['user_id'] . "'> Delete Comment </a>
        </td>
        <td><a href='index.php?id=". record['USERID']."'> Edit Comment </a> </td>
        </tr>";
    }

    echo "</tbody></table>"; 

    //close the DB connection 
    $statement->closeCursor(); 
    require('footer.php'); 
    ?>