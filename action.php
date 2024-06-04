<?php
include ("dbconnection.php");
if($_SERVER["REQUEST_METHOD"]=="POST")
{
   
    if(isset($_POST["note"])){
        if ($_POST["note"] != NULL){
            add_items($_POST["note"]);

        }

    }

    else if(isset($_POST["check"])){
       update_items_checked($_POST["check"]);
    }
    else if(isset(($_POST["delete"]))){
       delete_item($_POST["delete"]);
        
    }
 
    header("location:index.php");

}