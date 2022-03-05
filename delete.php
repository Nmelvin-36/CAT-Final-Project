<?php
//Check if the delete link has been clicked
if (isset($_GET["v_id"])){
    //Receive the voter's id
    $voterId = $_GET["v_id"];
    //Connect to the db to delete
    require_once "db_connection.php";
    //Prepare the delete query
    $deleteQuery = "DELETE FROM voters WHERE id='$voterId'";
    //Use mysqli_query() to execute the deleteQuery
    $delete = mysqli_query($connection,$deleteQuery);
    //Check if the deletion was successful
    if (isset($delete)){
        //Redirect back to voter.php to see changes
        header("location:voters.php");
    }else{
        die("Deleting failed");
    }
}