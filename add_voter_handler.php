<?php
//Check if button add has been clicked
if (isset($_POST["btn_add"])){
    //Start receiving data from the form
    $voterName = $_POST["v_name"];
    $voterIdNumber = $_POST["v_id_number"];
    $voterCounty = $_POST["v_county"];
    $voterGender = $_POST["v_gender"];
    $voterPhoneNumber = $_POST["v_phone_number"];
    //Connect to the database to save
    require_once "db_connection.php";
    $insertQuery = "INSERT INTO `voters`(`id`, `v_name`, `v_id_number`, `v_county`, `v_gender`, `v_phone_number`) 
    VALUES (null,'$voterName','$voterIdNumber','$voterCounty','$voterGender','$voterPhoneNumber')";
    $save = mysqli_query($connection,$insertQuery);
    if (isset($save)){
        header("location:add_voters.php");
    }else{
        echo "Adding voter failed!!!";
    }
}







