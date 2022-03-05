<?php
//Check if the update button has been clicked
if (isset($_POST["btn_update"])){
    //Receive data from the form
    $updatedVoterName = $_POST["v_name"];
    $updatedVoterIdNumber = $_POST["v_id_number"];
    $updatedVoterCounty = $_POST["v_county"];
    $updatedVoterGender = $_POST["v_gender"];
    $updatedVoterPhoneNumber = $_POST["v_phone_number"];
    $voterId = $_POST["v_id"];
    //Connect to the database to update
    require_once "db_connection.php";
    //Prepare the update query
    $updateQuery = "UPDATE `voters` SET `v_name`='$updatedVoterName',`v_id_number`='$updatedVoterIdNumber',
                    `v_county`='$updatedVoterCounty',`v_gender`='$updatedVoterGender',
                    `v_phone_number`='$updatedVoterPhoneNumber' WHERE id='$voterId'";
    $update = mysqli_query($connection, $updateQuery);
    if (isset($update)){
        header("location:voters.php");
    }else{
        echo "update failed";
    }

}