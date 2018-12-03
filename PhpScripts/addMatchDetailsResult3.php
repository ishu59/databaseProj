<html>
<head>
    <title>Add Venue </title>
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
    <?php include 'navBar.php'; ?>

    <div class="container">
        <?php
        global $conn;
        $servername = "localhost";
        $username = "root";
        $password = "mysql";
        $database = "cricket_analytics";

        //mysqli prepared statement
        $match_id = $_GET['match_id'];
        $t1_id = $_GET['t1_id'];
        $t2_id = $_GET['t2_id'];

        $t1_p1_id = $_GET['t1_p1_id'];
        $t1_p1_score = $_GET['t1_p1_score'];
        $t1_p1_wickets = $_GET['t1_p1_wickets'];
        $t1_p1_balls_bowled = $_GET['t1_p1_balls_bowled'];
        $t1_p1_balls_faced = $_GET['t1_p1_balls_faced'];


        $t1_p2_id = $_GET['t1_p2_id'];
        $t1_p2_score = $_GET['t1_p2_score'];
        $t1_p2_wickets = $_GET['t1_p2_wickets'];
        $t1_p2_balls_bowled = $_GET['t1_p2_balls_bowled'];
        $t1_p2_balls_faced = $_GET['t1_p2_balls_faced'];


        $t1_p3_id = $_GET['t1_p3_id'];
        $t1_p3_score = $_GET['t1_p3_score'];
        $t1_p3_wickets = $_GET['t1_p3_wickets'];
        $t1_p3_balls_bowled = $_GET['t1_p3_balls_bowled'];
        $t1_p3_balls_faced = $_GET['t1_p3_balls_faced'];

        $t2_p1_id = $_GET['t2_p1_id'];
        $t2_p1_score = $_GET['t2_p1_score'];
        $t2_p1_wickets = $_GET['t2_p1_wickets'];
        $t2_p1_balls_bowled = $_GET['t2_p1_balls_bowled'];
        $t2_p1_balls_faced = $_GET['t2_p1_balls_faced'];


        $t2_p2_id = $_GET['t2_p2_id'];
        $t2_p2_score = $_GET['t2_p2_score'];
        $t2_p2_wickets = $_GET['t2_p2_wickets'];
        $t2_p2_balls_bowled = $_GET['t2_p2_balls_bowled'];
        $t2_p2_balls_faced = $_GET['t2_p2_balls_faced'];


        $t2_p3_id = $_GET['t2_p3_id'];
        $t2_p3_score = $_GET['t2_p3_score'];
        $t2_p3_wickets = $_GET['t2_p3_wickets'];
        $t2_p3_balls_bowled = $_GET['t2_p3_balls_bowled'];
        $t2_p3_balls_faced = $_GET['t2_p3_balls_faced'];

        $conn = new mysqli($servername, $username, $password, $database);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        echo "<p><font color=\"red\">Connected successfully</font></p>";
        $city = mysqli_real_escape_string($conn, $city);
         $sql = "call sp_insert_match_details3($match_id,$t1_id,$t2_id,
    									$t1_p1_id, $t1_p1_score, $t1_p1_wickets, $t1_p1_balls_bowled, $t1_p1_balls_faced,
										$t1_p2_id,$t1_p2_score,$t1_p2_wickets,$t1_p2_balls_bowled,$t1_p2_balls_faced,
										$t1_p3_id,$t1_p3_score,$t1_p3_wickets,$t1_p3_balls_bowled,$t1_p3_balls_faced,
										$t2_p1_id,$t2_p1_score,$t2_p1_wickets,$t2_p1_balls_bowled,$t2_p1_balls_faced,
										$t2_p2_id,$t2_p2_score,$t2_p2_wickets,$t2_p2_balls_bowled,$t2_p2_balls_faced,
										$t2_p3_id,$t2_p3_score,$t2_p3_wickets,$t2_p3_balls_bowled,$t2_p3_balls_faced
										);";
        echo "$sql";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $last_id = $row["match_id"];

            echo "$last_id<br/>";
            echo "<p>Match details added Successfully </p>";
        } else {
            //echo "<p>Error: " . $sql . "<br>" . $conn->error." <a href='addStudent.html'>Try Again</a> </p></p>";
            echo "<p>Something went wrong!</p>";
        }
        ?>
    </div>
</div>
</body>
</html>