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
         <div class="jumbotron" >
            <div style='background-image: //url(/ricket.jpg);background-repeat:no-repeat;background-size:contain;    width: 100%; height: auto;' >

            <h1 class="display-4">Game of Cricket</h1>

            <p class="lead">Cricket is a bat-and-ball game played between two teams of eleven players on a field at the centre of which is a 20-metre (22-yard) pitch with a wicket at each end, each comprising two bails balanced on three stumps. The batting side scores runs by striking the ball bowled at the wicket with the bat, while the bowling and fielding side tries to prevent this and dismiss each player (so they are "out"). Means of dismissal include being bowled, when the ball hits the stumps and dislodges the bails, and by the fielding side catching the ball after it is hit by the bat, but before it hits the ground. When ten players have been dismissed, the innings ends and the teams swap roles. The game is adjudicated by two umpires, aided by a third umpire and match referee in international matches. They communicate with two off-field scorers who record the match's statistical information.

</p>

            <hr class="my-4">

            <!-- <p>It uses utility classes for typography and spacing to space content out within the larger container.</p> -->

            <p class="lead">

                <a class="btn btn-primary btn-lg" href="https://en.wikipedia.org/wiki/Cricket" role="button">Learn more</a>

            </p>
</div>
        </div>

        <div class="container container-fluid">
            <div class="jumbotron" >


                <h3 class="display-4">Analysis of Players</h3>

                <div>
                    <iframe width="933" height="700" src="https://app.powerbi.com/view?r=eyJrIjoiNTU5YjA2OTAtMzc3My00MzZjLWExMDEtYTc2MmUxYzhkZmQ3IiwidCI6IjllZjlmNDg5LWUwYTAtNGVlYi04N2NjLTNhNTI2MTEyZmQwZCIsImMiOjF9" frameborder="0" allowFullScreen="true"></iframe>
                </div>

            </div>

        </div>
        
        <div class="jumbotron">

            <h1 class="display-4">Upcoming Matches</h1>

          
                    <table class="table table-condensed">
                        <?php
                        global $conn;
                        $servername = "localhost";
                        $username = "root";
                        $password = "mysql";
                        $database = "cricket_analytics";
                        $conn = new mysqli($servername, $username, $password, $database);
                        $sql = "select fixture_id,series_name,match_date,venue_id_fk,venue_name from fixture_master join venue on venue.venue_id=fixture_master.venue_id_fk";
                        $result = $conn->query($sql);
                        if($result){
                            echo "<td><b>Series Name</b></td>";
                            echo "<td><b>Starting Date</b></td>";
                            echo "<td><b>Venue</b></td>";
                            while($row = $result->fetch_assoc()) {
                                echo "<tr>";

                                echo "<td>$row[series_name]</td>" ;
                                echo "<td>$row[match_date]</td>";  
                                echo "<td>$row[venue_name]</td>";  
                                // echo "<td><a href='updatefixture.php?id=$row[fixture_id]&series_name=$row[series_name]&match_date=$row[match_date]'><button>Update</button></a></td>";
                                // echo "<td><a href='deletefixture.php?id=$row[fixture_id]&series_name=$row[series_name]&match_date=$row[match_date]'><button>Delete</button></a></td></tr>";
                            }
                        };

                        ?>


                    </table>

        </div>



        <div class="jumbotron">

            <h1 class="display-4">Top Scorers</h1>
                <table class="table table-condensed">
            <?php
            global $conn;
            $servername = "localhost";
            $username = "root";
            $password = "mysql";
            $database = "cricket_analytics";
            $conn = new mysqli($servername, $username, $password, $database);
            $sql = "select p.player_name, p.player_nationality, m.player_score from player_master as p
                    join match_details as m on p.player_id = m.player_id_fk group by m.player_id_fk order by m.player_score desc limit 10;";

            $result = $conn->query($sql);
            if($result){
                echo "<td><b>Name</b></td>";
                echo "<td><b>Nationality</b></td>";
                echo "<td><b>Score</b></td>";
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>$row[player_name]</b></td>";
                    echo "<td>$row[player_nationality]</b></td>";
                    echo "<td>$row[player_score]</b></td>";

                    // echo "<td><a href='updatefixture.php?id=$row[fixture_id]&series_name=$row[series_name]&match_date=$row[match_date]'><button>Update</button></a></td>";
                    // echo "<td><a href='deletefixture.php?id=$row[fixture_id]&series_name=$row[series_name]&match_date=$row[match_date]'><button>Delete</button></a></td></tr>";
                }
            };

            ?>


            </table>

        </div>



        <div class="jumbotron">

            <h1 class="display-4">Top Ranking Teams</h1>

               <table class="table table-condensed">
                        <?php
                        global $conn;
                        $servername = "localhost";
                        $username = "root";
                        $password = "mysql";
                        $database = "cricket_analytics";
                        $conn = new mysqli($servername, $username, $password, $database);
                        $sql = "select team_name, team_mascot, team_ranking from team_master order by team_ranking asc limit 10";
                        $result = $conn->query($sql);
                        if($result){
                            echo "<td><b>Name</b></td>";
                            echo "<td><b>Mascot</b></td>";
                            echo "<td><b>Ranking</b></td>";
                            while($row = $result->fetch_assoc()) {
                                echo "<tr>";

                                echo "<td>$row[team_name]</td>" ;
                                echo "<td>$row[team_mascot]</td>";  
                                echo "<td>$row[team_ranking]</td>";  
                                // echo "<td><a href='updatefixture.php?id=$row[fixture_id]&series_name=$row[series_name]&match_date=$row[match_date]'><button>Update</button></a></td>";
                                // echo "<td><a href='deletefixture.php?id=$row[fixture_id]&series_name=$row[series_name]&match_date=$row[match_date]'><button>Delete</button></a></td></tr>";
                            }
                        };

                        ?>


                    </table>

        </div>




    </div>

</div>

</body>

</html>