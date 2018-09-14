<?php
function getCart(){
    include("db.php");
 
    $utilisateurs=array();
 
    $query= mysqli_query(getDB(), 'SELECT * FROM Users WHERE id='.$_SESSION["id"]);
    $user = mysqli_fetch_assoc($query);
    $query->closeCursor();
    return $user;
}
?>