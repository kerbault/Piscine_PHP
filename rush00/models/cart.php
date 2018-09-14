<?php
function getCart(){
    include("db.php");
     return $_SESSION["cart"];
}
?>
