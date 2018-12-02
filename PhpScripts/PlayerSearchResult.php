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
        <div class="container container-fluid">
            <legend>Search result of Player</legend>
            <div class="container container-fluid">

                <table class="table table-condensed">
                    <?php
                    global $conn;
                    $servername = "localhost";
                    $username = "root";
                    $password = "mysql";
                    $database = "cricket_analytics";
                    $stext = $_GET['stext'];
                    $conn = new mysqli($servername, $username, $password, $database);
                    $sql = "select player_id,player_name,Player_dob,TIMESTAMPDIFF(YEAR, Player_dob, CURDATE()) as age, player_nationality, tm.team_name as teamName,tm.team_id as team_id    from player_master as pm join team_master tm on pm.team_id_fk = tm.team_id        WHERE pm.player_name LIKE '%$stext%';";
                    //echo $sql;
                    $result = $conn->query($sql);
                    if($result){
                        while($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td><b>$row[player_name]</b></td>";
                            echo "<td><b>$row[age]</b></td>";
                            echo "<td><b>$row[player_nationality]</b></td>";
                            echo "<td><b>$row[teamName]</b></td>";
                            echo "<td><a href='updatePlayer.php?id=$row[player_id]&teamname=$row[teamName]&dob=$row[Player_dob]&nationality=$row[player_nationality]&name=$row[player_name]'><button>Update</button></a></td></tr>";
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