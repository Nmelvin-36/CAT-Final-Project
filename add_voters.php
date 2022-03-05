<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Voters</title>
    <script src="assets/bootstrap/js/jquery-3.4.0.js"></script>
    <script src="assets/bootstrap/js/popper.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.js"></script>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
</head>
<body>
<h1 class="text-info text-center">Add Voters Here</h1>
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <form method="post" action="add_voter_handler.php">
            <input class="form-control" name="v_name" placeholder="Voter name" type="text"><br><br>
            <input class="form-control" name="v_id_number" placeholder="Voter ID Number" type="number"><br><br>
            <select class="form-control" name="v_county" id="">
                <option value="">Select county</option>
                <option value="Bungoma">Bungoma</option>
                <option value="Nairobi">Nairobi</option>
                <option value="Kisii">Kisii</option>
                <option value="Nyamira">Nyamira</option>
            </select> <br><br>
            <select class="form-control" name="v_gender" id="">
                <option value="">Select gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select><br><br>
            <input class="form-control" name="v_phone_number" placeholder="Voter Phone Number" type="tel"><br><br>
            <input class="btn btn-outline-info btn-block" name="btn_add" value="Add" type="submit"><br><br>
            <a class="btn btn-outline-success btn-block" href="voters.php">View Registered Voters</a>
        </form>
    </div>
    <div class="col-md-2"></div>
</div>
</body>
</html>

