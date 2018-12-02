<html>
<head>
    <title>Match Master</title>
</head>
<body>
<div>
    <?php include 'navBar.php';?>
    <?php


    global $conn;

    $servername = "localhost";
    $username = "root";
    $password = "mysql";
    $database = "cricket_analytics";

    //mysqli prepared statement
    $team1_id =$_GET['team1_id'];
    $team2_id =$_GET['team2_id'];
    $venue_id =$_GET['venue_id'];
    $ump_id =$_GET['ump_id'];
    $m_date =$_GET['m_date'];
    $score_t1 =$_GET['score_t1'];
    $score_t2 =$_GET['score_t2'];
    $wicket_1 =$_GET['wicket_1'];
    $wicket_2 =$_GET['wicket_2'];
    $m_result =$_GET['m_result'];




    $conn = new mysqli($servername, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "<p><font color=\"red\">Connected successfully</font></p>";
    $city = mysqli_real_escape_string($conn,$city);
    $sql = "call sp_insert_match_master($team1_id,$team2_id,$venue_id,$ump_id,'$m_date',$score_t1,$score_t2,$wicket_1,$wicket_2,'$m_result');";
    //echo "$sql";
    if ($conn->query($sql) == TRUE) {
        echo "<p>Match added Successfully <a href='matchdetail.php?match_id=$match_id'>Enter Match Details</a></p>";
    } else {
        //echo "<p>Error: " . $sql . "<br>" . $conn->error." <a href='addStudent.html'>Try Again</a> </p></p>";
        echo "<p>Something went wrong! <a href='matchmaster.php'>Try Again</a> </p></p>";
    }
    ?>
</div>
</body>
</html>