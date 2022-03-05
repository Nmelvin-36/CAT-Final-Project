<?php
//Check if the update link has been clicked
if (isset($_GET["v_id"])){
    $receivedVoterName = $_GET["v_name"];
    $receivedVoterIdNumber = $_GET["v_id_number"];
    $receivedVoterCounty = $_GET["v_county"];
    $receivedVoterGender = $_GET["v_gender"];
    $receivedVoterPhoneNumber = $_GET["v_phone_number"];
    $voterId = $_GET["v_id"];
}else{
    header("location:voters.php");
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Voter</title>
    <script src="assets/bootstrap/js/jquery-3.4.0.js"></script>
    <script src="assets/bootstrap/js/popper.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.js"></script>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
</head>
<body>
<h1 class="text-info text-center">Updating Voter</h1>
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <form method="post" action="update_handler.php">
            <input value="<?php echo $receivedVoterName;?>" class="form-control" name="v_name" placeholder="Voter name" type="text"><br><br>
            <input value="<?php echo $receivedVoterIdNumber;?>" class="form-control" name="v_id_number" placeholder="Voter ID Number" type="number"><br><br>
            <select class="form-control" name="v_county" id="">
                <option value="<?php echo $receivedVoterCounty;?>">
                    <?php echo $receivedVoterCounty;?>
                </option>
                <option value="">Select county</option>
                <option value="Bungoma">Bungoma</option>
                <option value="Nairobi">Nairobi</option>
                <option value="Kisii">Kisii</option>
                <option value="Nyamira">Nyamira</option>
            </select> <br><br>
            <select class="form-control" name="v_gender" id="">
                <option value="<?php echo $receivedVoterGender;?>">
                    <?php echo $receivedVoterGender;?>
                </option>
                <option value="">Select gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select><br><br>
            <input value="<?php echo $receivedVoterPhoneNumber;?>" class="form-control" name="v_phone_number" placeholder="Voter Phone Number" type="tel"><br><br>
            <input class="btn btn-outline-info btn-block" name="btn_update" value="Update" type="submit"><br><br>
            <a class="btn btn-outline-warning btn-block" href="voters.php">Back</a>
            <input value="<?php echo $voterId;?>" name="v_id" type="hidden">
        </form>
    </div>
    <div class="col-md-2"></div>
</div>
</body>
</html>
