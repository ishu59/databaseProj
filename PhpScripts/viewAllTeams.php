<html>
<head>
    <title>Home Delivery Restaurants</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
<div>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</div>
<div>
    <?php include 'navBar.php';?>

    <div class="container">
        <!--Add code here-->


        <div align="center">
            <caption><h2><ins><i>CRICKET TEAM RAKINGS</i></ins></h2></caption>
        </div>

        <table style="width:65%;height:70%;" align="center">

            <tr>
                <th colspan="4" style="background-color:#5E1D55;color:white;"><h3>TEST RAKINGS</h3></th>
            </tr>

            <tr style="background-color:#32A9EE;
                color:white;">
                <th>Rank</th>
                <th>Team</th>

            </tr>


<?php
global $conn;
$servername = "localhost";
$username = "root";
$password = "mysql";
$database = "cricket_analytics";
$conn = new mysqli($servername, $username, $password, $database);
$sql = "call sp_getAllTeams()";
$result = $conn->query($sql);
if($result){
    while($row = $result->fetch_assoc()) {
        echo "<tr><td><b>$row[team_ranking]</b></td><td><a href='$row[team_id]'>$row[team_name]</a></td></tr>";

                    }
                };

            ?>


    </div>
</div>
</body>
</html>