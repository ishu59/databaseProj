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
        <div class="container">
            <legend>Team 1 Detailed Score</legend>
            <table class="table table-condensed">
                <?php
                global $conn;
                $servername = "localhost";
                $username = "root";
                $password = "mysql";
                $database = "cricket_analytics";
                $match_id = $_GET['match_id'];
                $t1_id = $_GET['t1_id'];
                $t2_id = $_GET['t2_id'];
                echo $t2_id;
                echo $t1_id;
                echo $match_id;


                $conn = new mysqli($servername, $username, $password, $database);
                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }
                echo "<p><font color=\"red\">Connected successfully</font></p>";
                $city = mysqli_real_escape_string($conn, $city);
                $sql = "call get_matchDetailsbyID_teamId($match_id,$t1_id)";
                $result = $conn->query($sql);
                if ($result) {

                    echo "<td><b>Player Name</b></td>";
                    echo "<td><b>Score</b></td>";
                    echo "<td><b>Wickets</b></td>";
                    echo "<td><b>Balls bowled</b></td>";
                    echo "<td><b>Balls faced</b></td>";
                    echo "<td><b>Team</b></td>";
                    echo "</tr>";
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>$row[player_name]</td>";
                        echo "<td>$row[player_score]</td>";
                        echo "<td>$row[player_wickets]</td>";
                        echo "<td>$row[player_balls_bowled]</td>";
                        echo "<td>$row[player_balls_faced]</td>";
                        echo "<td>match_id_fk</td>";
                        echo "<td><a href='updateMatchDetails.php?detail_id=$row[match_detail_id]
&m_id=$row[match_id_fk]
&p_id=$row[player_id_fk]
&p_name=$row[player_name]
&score=$row[player_score]
&wicket=$row[player_wickets]
&bowled=$row[player_balls_bowled]
&faced=$row[player_balls_faced]
&t_id=$row[team_id]
'>


<button>Update</button></a></td>";
                        echo "</tr>";
                    }
                };


                ?>
            </table>
        </div>
        <div class="container">
            <legend>Team 2 Detailed Score</legend>
            <table class="table table-condensed">
                <?php
                global $conn;
                $servername = "localhost";
                $username = "root";
                $password = "mysql";
                $database = "cricket_analytics";
                $match_id = $_GET['match_id'];
                $t1_id = $_GET['t1_id'];
                $t2_id = $_GET['t2_id'];
                echo $t2_id;
                echo $t1_id;
                echo $match_id;


                $conn = new mysqli($servername, $username, $password, $database);
                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }
                echo "<p><font color=\"red\">Connected successfully</font></p>";
                $city = mysqli_real_escape_string($conn, $city);
                $sql = "call get_matchDetailsbyID_teamId($match_id,$t2_id)";
                $result = $conn->query($sql);
                if ($result) {

                    echo "<td><b>Player Name</b></td>";
                    echo "<td><b>Score</b></td>";
                    echo "<td><b>Wickets</b></td>";
                    echo "<td><b>Balls bowled</b></td>";
                    echo "<td><b>Balls faced</b></td>";
                    echo "<td><b>Team</b></td>";
                    echo "</tr>";
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>$row[player_name]</td>";
                        echo "<td>$row[player_score]</td>";
                        echo "<td>$row[player_wickets]</td>";
                        echo "<td>$row[player_balls_bowled]</td>";
                        echo "<td>$row[player_balls_faced]</td>";
                        echo "<td>$row[team_name]</td>";
                        echo "<td><a href='updateMatchDetails.php?detail_id=$row[match_detail_id]
&m_id=$row[match_id_fk]
&p_id=$row[player_id_fk]
&p_name=$row[player_name]
&score=$row[player_score]
&wicket=$row[player_wickets]
&bowled=$row[player_balls_bowled]
&faced=$row[player_balls_faced]
&t_id=$row[team_id]
'>


<button>Update</button></a></td>";

                        echo "</tr>";


                    }
                };


                ?>
            </table>
        </div>
    </div>
</div>
</body>
</html>