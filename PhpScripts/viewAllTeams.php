<html>
<head>
    <title>Team Rankings</title>
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

    <div class="container container-fluid">
    <h1 class="text-center">View All Teams</h1>
    <div class="container container-fluid">

        <table class="table table-condensed">
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
                            echo "<td><b>Team</b></td>";
                            echo "<td><b>Rankings</b></td>";
                            

                            
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>$row[team_name]</b></td>";
                    echo "<td>$row[team_ranking]</b></td>";
                    
                    // echo "<td><a href='updatePlayer.php?id=$row[player_id]&teamname=$row[teamName]&dob=$row[Player_dob]&nationality=$row[player_nationality]&name=$row[player_name]'><button>Update</button></a></td></tr>";
                }
            };

            ?>


        </table>

        


    </div>
</div>
</body>
</html>