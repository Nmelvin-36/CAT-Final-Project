<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Voters</title>
    <script src="assets/bootstrap/js/jquery-3.4.0.js"></script>
    <script src="assets/bootstrap/js/popper.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.js"></script>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
</head>
<body>
<h1 class="text-info text-center">Registered Voters</h1>
<table class="table table-dark table-hover">
    <tr>
        <th>Name</th>
        <th>ID Number</th>
        <th>County</th>
        <th>Gender</th>
        <th>Phone Number</th>
        <th>Delete</th>
        <th>Update</th>
    </tr>
    <?php
    //Connect to the db to select the data
    require_once "db_connection.php";
    //Prepare the select query
    $selectQuery = "SELECT * FROM voters";
    //Use mysqli_query() to execute the select query
    $voters = mysqli_query($connection,$selectQuery);
    //Use a loop to print the voters
    foreach ($voters as $voter) {
        $voterName = $voter["v_name"];
        $voterIdNumber = $voter["v_id_number"];
        $voterCounty = $voter["v_county"];
        $voterGender = $voter["v_gender"];
        $voterPhoneNumber = $voter["v_phone_number"];
        $voterId = $voter["id"];
        echo "<tr>
                       <td>$voterName</td>
                       <td>$voterIdNumber</td>
                       <td>$voterCounty</td>
                       <td>$voterGender</td>
                       <td>$voterPhoneNumber</td>
                       <td><a class='btn btn-danger' href='delete.php?v_id=$voterId'>Delete</a></td>
                       <td><a class='btn btn-primary' href='update.php?v_id=$voterId&v_name=$voterName&v_id_number=$voterIdNumber&v_county=$voterCounty&v_gender=$voterGender&v_phone_number=$voterPhoneNumber'>Update</a></td>
                </tr>";
    }
    ?>
</table>
</body>
</html>

