<html>
<head>
    <title>Cricket Analytics</title>
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
        <table class="table table-condensed">
                        <?php
                        global $conn;
                        $servername = "localhost";
                        $username = "root";
                        $password = "mysql";
                        $database = "cricket_analytics";
                        $conn = new mysqli($servername, $username, $password, $database);
                        $sql = "select * from match_details";
                        $result = $conn->query($sql);
                        if($result){
                            echo "<td><b>Match Detail Number</b></td>";
                            echo "<td><b>Match id</b></td>";
                            echo "<td><b>Player id</b></td>";
                            echo "<td><b>Score</b></td>";
                            echo "<td><b>Wickets</b></td>";
                            echo "<td><b>Balls bowled</b></td>";
                            echo "<td><b>Balls faced</b></td>";
                            echo "<td><b>Team</b></td>";
                            
                            while($row = $result->fetch_assoc()) {
                                echo "<tr>";

                                echo "<td>$row[match_detail_id]</td>" ;
                                echo "<td>$row[match_id_fk]</td>";  
                                echo "<td>$row[player_id_fk]</td>"; 
                                echo "<td>$row[player_score]</td>" ;
                                echo "<td>$row[player_wickets]</td>";  
                                echo "<td>$row[player_balls_bowled]</td>";
                                echo "<td>$row[player_balls_faced]</td>";  
                                echo "<td>$row[team_id_fk]</td>";  
                                echo "<td><a href='updatefixture.php?id=$row[fixture_id]&series_name=$row[series_name]&match_date=$row[match_date]'><button>Update</button></a></td>";
                                echo "<td><a href='deletefixture.php?id=$row[fixture_id]&series_name=$row[series_name]&match_date=$row[match_date]'><button>Delete</button></a></td></tr>";
                            }
                        };

                        ?>


                    </table>


    </div>
</div>
</body>
</html>