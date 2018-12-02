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
        $team1_id = $_GET['team1_id'];
        $team2_id = $_GET['team2_id'];
        $venue_id = $_GET['venue_id'];
        $ump_id = $_GET['ump_id'];
        $m_date = $_GET['m_date'];
        $score_t1 = $_GET['score_t1'];
        $score_t2 = $_GET['score_t2'];
        $wicket_1 = $_GET['wicket_1'];
        $wicket_2 = $_GET['wicket_2'];
        $m_result = $_GET['m_result'];

        $conn = new mysqli($servername, $username, $password, $database);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        echo "<p><font color=\"red\">Connected successfully</font></p>";
        $city = mysqli_real_escape_string($conn, $city);
        $sql = "call sp_insert_match_master($team1_id,$team2_id,$venue_id,$ump_id,'$m_date',$score_t1,$score_t2,$wicket_1,$wicket_2,'$m_result');";
        //echo "$sql";

        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) > 0 ){
            $row = mysqli_fetch_assoc($result);
            $last_id = $row["match_id"];

            echo "$last_id<br/>";
            echo "Click below to enter match details. Match wont appear if no match data exist for a match <br/>";
            echo "<a href='addMatchDetails.php?id=$last_id'><button class=\"btn btn-primary\"> Add Match Data</button></a>";
            echo "<p>Match added Successfully </p>";
        } else {
            //echo "<p>Error: " . $sql . "<br>" . $conn->error." <a href='addStudent.html'>Try Again</a> </p></p>";
            echo "<p>Something went wrong!</p>";
        }
        ?>
    </div>
</div>
</body>
</html>