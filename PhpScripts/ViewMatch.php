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
        <div >
            <legend>Create New Match</legend>
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header ">
                        <a class="navbar-brand" href="addMatch.php">Click here to create new Match</a>
                    </div>
                </div>
            </nav>
        </div>
        <div class="container container-fluid">
            <legend>View All Matches</legend>
            <div class="container container-fluid">

                <table class="table table-condensed">
                    <?php
                    global $conn;
                    $servername = "localhost";
                    $username = "root";
                    $password = "mysql";
                    $database = "cricket_analytics";
                    $conn = new mysqli($servername, $username, $password, $database);
                    $sql = "call sp_getAllMatches()";
                    $result = $conn->query($sql);
                    if($result){
                            echo "<td><b>Team 1</b></td>";
                            echo "<td><b>Team 2</b></td>";
                            echo "<td><b>venue</b></td>";
                            echo "<td><b>Team 1 score</b></td>";
                            echo "<td><b>Team 2 score</b></td>";
                            echo "<td><b>Wickets taken by team 1</b></td>";
                            echo "<td><b>Wickets taken by team 2</b></td>";
                            echo "<td><b>Match Result</b></td>";
                            echo "<td><b>Umpire</b></td>";
                            echo "<td><b>Date</b></td>";
                        while($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>$row[team_name_1]</b></td>";
                            echo "<td>$row[team_name_2]</b></td>";
                            echo "<td>$row[venue_name]</b></td>";
                            echo "<td>$row[score_team_1]</b></td>";
                            echo "<td>$row[score_team_2]</b></td>";
                            echo "<td>$row[wicket_team_1]</b></td>";
                            echo "<td>$row[wicket_team_2]</b></td>";
                            echo "<td>$row[match_result]</b></td>";
                            echo "<td>$row[umpire_name]</b></td>";
                            echo "<td>$row[match_date]</b></td>";
                            echo "<td><a href='updateMatchMaster.php?id=$row[match_id]'><button>Update Master</button></a></td>";
                            echo "<td><a href='ViewMatchDetailsByMatch.php?match_id=$row[match_id]&t1_id=$row[team_id_1_fk]&t2_id=$row[team_id_2_fk]'><button>View Details</button></a></td></tr>";
                        }
                    };
                    ?>
                </table>

            </div>


        </div>


    </div>
</div>
</body>
</html>