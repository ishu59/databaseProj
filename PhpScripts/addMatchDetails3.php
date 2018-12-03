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
<div class="container">
    <?php include 'navBar.php'; ?>
    <?php
    global $conn;

    global $m_id;
    global $u_id;
    global $t1_id;
    global $t2_id;
    global $m_result;
    $m_id = $_GET['id'];
    echo $m_id;
    $temp2 = 'this temo text';
    $servername = "localhost";
    $username = "root";
    $password = "mysql";
    $database = "cricket_analytics";
    $conn = new mysqli($servername, $username, $password, $database);
    $sql = "call sp_getMatchByID($m_id);";
    $result = $conn->query($sql);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $m_id = $row["match_id"];
        $t1_id = $row["team_id_1_fk"];
        $t2_id = $row["team_id_2_fk"];
        $score_t1 = $row['score_team_1'];
        $score_t2 = $row['score_team_2'];
        $wicket_1 = $row['wicket_team_1'];
        $wicket_2 = $row['wicket_team_2'];

    } else {
        //echo "<p>Error: " . $sql . "<br>" . $conn->error." <a href='addStudent.html'>Try Again</a> </p></p>";
        echo "<p>Something went wrong!</p>";
    }
    ?>

    <!--Add code here-->
    <form class="form-horizontal" action="addMatchDetailsResult3.php" method="GET">
        
        <input name="match_id" id="match_id" value="<?=$m_id?>" hidden>
        <input name="t1_id" id="t1_id" value="<?=$t1_id?>" hidden>
        <input name="t2_id" id="t2_id" value="<?=$t2_id?>" hidden>

        <fieldset>


            <div class="col-md-6" style="float:left;">

                <!-- Form Name -->
                <legend>TEAM 1</legend>


                </br>
                <!-- <legend>Player 1</legend>
                 -->

                <div class="form-group">
                    <label class="col-md-4 control-label" for="t1_p1_id">Player 1</label>
                    <div class="col-md-4">
                        <select id="t1_p1_id" name="t1_p1_id" class="form-control">
                            <?php
                            global $conn;
                            $servername = "localhost";
                            $username = "root";
                            $password = "mysql";
                            $database = "cricket_analytics";
                            $conn = new mysqli($servername, $username, $password, $database);
                            $sql = "select player_id,player_name from player_master  where team_id_fk = $t1_id;";
                            $result = $conn->query($sql);
                            if ($result) {
                                echo "<table border=1px>";
                                while ($row = $result->fetch_assoc()) {
                                    echo "<option value=$row[player_id]>$row[player_name]</option>";
                                }
                            }
                            ?>
                        </select>
                    </div>
                </div>


                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="t1_p1_score">score</label>
                    <div class="col-md-4">
                        <input id="t1_p1_score" name="t1_p1_score" type="text" =" " class="form-control input-md">

                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="t1_p1_wickets">wickets</label>
                    <div class="col-md-4">
                        <input id="t1_p1_wickets" name="t1_p1_wickets" type="text" =" " class="form-control input-md">

                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="t1_p1_balls_bowled">balls bowled</label>
                    <div class="col-md-4">
                        <input id="t1_p1_balls_bowled" name="t1_p1_balls_bowled" type="text" =" " class="
                        form-control input-md">

                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="t1_p1_balls_faced">balls faced</label>
                    <div class="col-md-4">
                        <input id="t1_p1_balls_faced" name="t1_p1_balls_faced" type="text" =" " class="
                        form-control input-md">

                    </div>
                </div>


                </br>
                <!-- <legend>Player 2</legend> -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="t1_p2_id">Player 2</label>
                    <div class="col-md-4">
                        <select id="t1_p2_id" name="t1_p2_id" class="form-control">
                            <?php
                            global $conn;
                            $servername = "localhost";
                            $username = "root";
                            $password = "mysql";
                            $database = "cricket_analytics";
                            $conn = new mysqli($servername, $username, $password, $database);
                            $sql = "select player_id,player_name from player_master  where team_id_fk = $t1_id;";
                            $result = $conn->query($sql);
                            if ($result) {
                                echo "<table border=1px>";
                                while ($row = $result->fetch_assoc()) {
                                    echo "<option value=$row[player_id]>$row[player_name]</option>";
                                }
                            }
                            ?>
                        </select>
                    </div>
                </div>


                <!-- Text input---------------------------------------------------------------------------------------------------------------------------------------------------->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="t1_p2_score">score</label>
                    <div class="col-md-4">
                        <input id="t1_p2_score" name="t1_p2_score" type="text" =" " class="form-control input-md">

                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="t1_p2_wickets">wickets</label>
                    <div class="col-md-4">
                        <input id="t1_p2_wickets" name="t1_p2_wickets" type="text" =" " class="form-control input-md">

                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="t1_p2_balls_bowled">balls bowled</label>
                    <div class="col-md-4">
                        <input id="t1_p2_balls_bowled" name="t1_p2_balls_bowled" type="text" =" " class="
                        form-control input-md">

                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="t1_p2_balls_faced">balls faced</label>
                    <div class="col-md-4">
                        <input id="t1_p2_balls_faced" name="t1_p2_balls_faced" type="text" =" " class="
                        form-control input-md">

                    </div>
                </div>


                </br>
                <!-- <legend>Player 3</legend> -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="t1_p3_id">Player 3</label>
                    <div class="col-md-4">
                        <select id="t1_p3_id" name="t1_p3_id" class="form-control">
                            <?php
                            global $conn;
                            $servername = "localhost";
                            $username = "root";
                            $password = "mysql";
                            $database = "cricket_analytics";
                            $conn = new mysqli($servername, $username, $password, $database);
                            $sql = "select player_id,player_name from player_master  where team_id_fk = $t1_id;";
                            $result = $conn->query($sql);
                            if ($result) {
                                echo "<table border=1px>";
                                while ($row = $result->fetch_assoc()) {
                                    echo "<option value=$row[player_id]>$row[player_name]</option>";
                                }
                            }
                            ?>
                        </select>
                    </div>
                </div>


                <!-- Text input---------------------------------------------------------------------------------------------------------------------------------------------------->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="t1_p3_score">score</label>
                    <div class="col-md-4">
                        <input id="t1_p3_score" name="t1_p3_score" type="text" =" " class="form-control input-md">

                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="t1_p3_wickets">wickets</label>
                    <div class="col-md-4">
                        <input id="t1_p3_wickets" name="t1_p3_wickets" type="text" =" " class="form-control input-md">

                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="t1_p3_balls_bowled">balls bowled</label>
                    <div class="col-md-4">
                        <input id="t1_p3_balls_bowled" name="t1_p3_balls_bowled" type="text" =" " class="
                        form-control input-md">

                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="t1_p3_balls_faced">balls faced</label>
                    <div class="col-md-4">
                        <input id="t1_p3_balls_faced" name="t1_p3_balls_faced" type="text" =" " class="
                        form-control input-md">

                    </div>
                </div>


                </br>


            </div>


            <div class="col-md-6" style="float:right;">

                <!-- Text input---------------------------------------------------------------------------------------------------------------------------------------------------->
                <legend>TEAM 2</legend>

                </br>
                <!-- <legend>Player 1</legend> -->

                <div class="form-group">
                    <label class="col-md-4 control-label" for="t2_p1_id">Player 1</label>
                    <div class="col-md-4">
                        <select id="t2_p1_id" name="t2_p1_id" class="form-control">
                            <?php
                            global $conn;
                            $servername = "localhost";
                            $username = "root";
                            $password = "mysql";
                            $database = "cricket_analytics";
                            $conn = new mysqli($servername, $username, $password, $database);
                            $sql = "select player_id,player_name from player_master  where team_id_fk = $t2_id;";
                            $result = $conn->query($sql);
                            if ($result) {
                                echo "<table border=1px>";
                                while ($row = $result->fetch_assoc()) {
                                    echo "<option value=$row[player_id]>$row[player_name]</option>";
                                }
                            }
                            ?>
                        </select>
                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="t2_p1_score">score</label>
                    <div class="col-md-4">
                        <input id="t2_p1_score" name="t2_p1_score" type="text" =" " class="form-control input-md">

                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="t2_p1_wickets">wickets</label>
                    <div class="col-md-4">
                        <input id="t2_p1_wickets" name="t2_p1_wickets" type="text" =" " class="form-control input-md">

                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="t2_p1_balls_bowled">balls bowled</label>
                    <div class="col-md-4">
                        <input id="t2_p1_balls_bowled" name="t2_p1_balls_bowled" type="text" =" " class="
                        form-control input-md">

                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="t2_p1_balls_faced">balls faced</label>
                    <div class="col-md-4">
                        <input id="t2_p1_balls_faced" name="t2_p1_balls_faced" type="text" =" " class="
                        form-control input-md">

                    </div>
                </div>


                </br>
                <!-- <legend>Player 2</legend> -->

                <div class="form-group">
                    <label class="col-md-4 control-label" for="t2_p2_id">Player 2</label>
                    <div class="col-md-4">
                        <select id="t2_p2_id" name="t2_p2_id" class="form-control">
                            <?php
                            global $conn;
                            $servername = "localhost";
                            $username = "root";
                            $password = "mysql";
                            $database = "cricket_analytics";
                            $conn = new mysqli($servername, $username, $password, $database);
                            $sql = "select player_id,player_name from player_master  where team_id_fk = $t2_id;";
                            $result = $conn->query($sql);
                            if ($result) {
                                echo "<table border=1px>";
                                while ($row = $result->fetch_assoc()) {
                                    echo "<option value=$row[player_id]>$row[player_name]</option>";
                                }
                            }
                            ?>
                        </select>
                    </div>
                </div>

                <!-- Text input---------------------------------------------------------------------------------------------------------------------------------------------------->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="t2_p2_score">score</label>
                    <div class="col-md-4">
                        <input id="t2_p2_score" name="t2_p2_score" type="text" =" " class="form-control input-md">

                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="t2_p2_wickets">wickets</label>
                    <div class="col-md-4">
                        <input id="t2_p2_wickets" name="t2_p2_wickets" type="text" =" " class="form-control input-md">

                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="t2_p2_balls_bowled">balls bowled</label>
                    <div class="col-md-4">
                        <input id="t2_p2_balls_bowled" name="t2_p2_balls_bowled" type="text" =" " class="
                        form-control input-md">

                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="t2_p2_balls_faced">balls faced</label>
                    <div class="col-md-4">
                        <input id="t2_p2_balls_faced" name="t2_p2_balls_faced" type="text" =" " class="
                        form-control input-md">

                    </div>
                </div>


                </br>
                <!-- <legend>Player 3</legend> -->

                <div class="form-group">
                    <label class="col-md-4 control-label" for="t2_p3_id">Player 3</label>
                    <div class="col-md-4">
                        <select id="t2_p3_id" name="t2_p3_id" class="form-control">
                            <?php
                            global $conn;
                            $servername = "localhost";
                            $username = "root";
                            $password = "mysql";
                            $database = "cricket_analytics";
                            $conn = new mysqli($servername, $username, $password, $database);
                            $sql = "select player_id,player_name from player_master  where team_id_fk = $t2_id;";
                            $result = $conn->query($sql);
                            if ($result) {
                                echo "<table border=1px>";
                                while ($row = $result->fetch_assoc()) {
                                    echo "<option value=$row[player_id]>$row[player_name]</option>";
                                }
                            }
                            ?>
                        </select>
                    </div>
                </div>

                <!-- Text input---------------------------------------------------------------------------------------------------------------------------------------------------->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="t2_p3_score">score</label>
                    <div class="col-md-4">
                        <input id="t2_p3_score" name="t2_p3_score" type="text" =" " class="form-control input-md">

                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="t2_p3_wickets">wickets</label>
                    <div class="col-md-4">
                        <input id="t2_p3_wickets" name="t2_p3_wickets" type="text" =" " class="form-control input-md">

                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="t2_p3_balls_bowled">balls bowled</label>
                    <div class="col-md-4">
                        <input id="t2_p3_balls_bowled" name="t2_p3_balls_bowled" type="text" =" " class="
                        form-control input-md">

                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="t2_p3_balls_faced">balls faced</label>
                    <div class="col-md-4">
                        <input id="t2_p3_balls_faced" name="t2_p3_balls_faced" type="text" =" " class="
                        form-control input-md">

                    </div>
                </div>


                </br>


            </div>

            <br>
            <!-- Button -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="teamSubmit"></label>
                <div class="col-md-4">
                    <button id="teamSubmit" name="teamSubmit" class="btn btn-primary btn-lg">Submit</button>
                </div>
            </div>


        </fieldset>

</div>

</form>

</body>
</html>