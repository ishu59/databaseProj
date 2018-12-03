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


    <!--Add code here-->
    <form class="form-horizontal" action="matchdetailResult.php" method="GET">
        <fieldset>


            <div style="float:left;">

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
                            $sql = "select player_id,player_name from player_master;";
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
                            $sql = "select player_id,player_name from player_master;";
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
                            $sql = "select player_id,player_name from player_master;";
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
                <!-- <legend>Player 4</legend> -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="t1_p4_id">Player 4</label>
                    <div class="col-md-4">
                        <select id="t1_p4_id" name="t1_p4_id" class="form-control">
                            <?php
                            global $conn;
                            $servername = "localhost";
                            $username = "root";
                            $password = "mysql";
                            $database = "cricket_analytics";
                            $conn = new mysqli($servername, $username, $password, $database);
                            $sql = "select player_id,player_name from player_master;";
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
                    <label class="col-md-4 control-label" for="t1_p4_score">score</label>
                    <div class="col-md-4">
                        <input id="t1_p4_score" name="t1_p4_score" type="text" =" " class="form-control input-md">

                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="t1_p4_wickets">wickets</label>
                    <div class="col-md-4">
                        <input id="t1_p4_wickets" name="t1_p4_wickets" type="text" =" " class="form-control input-md">

                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="t1_p4_balls_bowled">balls bowled</label>
                    <div class="col-md-4">
                        <input id="t1_p4_balls_bowled" name="t1_p4_balls_bowled" type="text" =" " class="
                        form-control input-md">

                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="t1_p4_balls_faced">balls faced</label>
                    <div class="col-md-4">
                        <input id="t1_p4_balls_faced" name="t1_p4_balls_faced" type="text" =" " class="
                        form-control input-md">

                    </div>
                </div>


                </br>
                <!-- <legend>Player 5</legend> -->

                <div class="form-group">
                    <label class="col-md-4 control-label" for="t1_p5_id">Player 5</label>
                    <div class="col-md-4">
                        <select id="t1_p5_id" name="t1_p5_id" class="form-control">
                            <?php
                            global $conn;
                            $servername = "localhost";
                            $username = "root";
                            $password = "mysql";
                            $database = "cricket_analytics";
                            $conn = new mysqli($servername, $username, $password, $database);
                            $sql = "select player_id,player_name from player_master;";
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
                    <label class="col-md-4 control-label" for="t1_p5_score">score</label>
                    <div class="col-md-4">
                        <input id="t1_p5_score" name="t1_p5_score" type="text" =" " class="form-control input-md">

                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="t1_p5_wickets">wickets</label>
                    <div class="col-md-4">
                        <input id="t1_p5_wickets" name="t1_p5_wickets" type="text" =" " class="form-control input-md">

                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="t1_p5_balls_bowled">balls bowled</label>
                    <div class="col-md-4">
                        <input id="t1_p5_balls_bowled" name="t1_p5_balls_bowled" type="text" =" " class="
                        form-control input-md">

                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="t1_p5_balls_faced">balls faced</label>
                    <div class="col-md-4">
                        <input id="t1_p5_balls_faced" name="t1_p5_balls_faced" type="text" =" " class="
                        form-control input-md">

                    </div>
                </div>


                </br>
                <!-- <legend>Player 6</legend> -->

                <div class="form-group">
                    <label class="col-md-4 control-label" for="t1_p6_id">Player 6</label>
                    <div class="col-md-4">
                        <select id="t1_p6_id" name="plat1_p6_idyer_id" class="form-control">
                            <?php
                            global $conn;
                            $servername = "localhost";
                            $username = "root";
                            $password = "mysql";
                            $database = "cricket_analytics";
                            $conn = new mysqli($servername, $username, $password, $database);
                            $sql = "select player_id,player_name from player_master;";
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
                    <label class="col-md-4 control-label" for="t1_p6_score">score</label>
                    <div class="col-md-4">
                        <input id="t1_p6_score" name="t1_p6_score" type="text" =" " class="form-control input-md">

                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="t1_p6_wickets">wickets</label>
                    <div class="col-md-4">
                        <input id="t1_p6_wickets" name="t1_p6_wickets" type="text" =" " class="form-control input-md">

                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="t1_p6_balls_bowled">balls bowled</label>
                    <div class="col-md-4">
                        <input id="t1_p6_balls_bowled" name="t1_p6_balls_bowled" type="text" =" " class="
                        form-control input-md">

                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="t1_p6_balls_faced">balls faced</label>
                    <div class="col-md-4">
                        <input id="t1_p6_balls_faced" name="t1_p6_balls_faced" type="text" =" " class="
                        form-control input-md">

                    </div>
                </div>


                </br>
                <!-- <legend>Player 7</legend> -->

                <div class="form-group">
                    <label class="col-md-4 control-label" for="t1_p7_id">Player 7</label>
                    <div class="col-md-4">
                        <select id="t1_p7_id" name="t1_p7_id" class="form-control">
                            <?php
                            global $conn;
                            $servername = "localhost";
                            $username = "root";
                            $password = "mysql";
                            $database = "cricket_analytics";
                            $conn = new mysqli($servername, $username, $password, $database);
                            $sql = "select player_id,player_name from player_master;";
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
                    <label class="col-md-4 control-label" for="t1_p7_score">score</label>
                    <div class="col-md-4">
                        <input id="t1_p7_score" name="t1_p7_score" type="text" =" " class="form-control input-md">

                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="t1_p7_wickets">wickets</label>
                    <div class="col-md-4">
                        <input id="t1_p7_wickets" name="t1_p7_wickets" type="text" =" " class="form-control input-md">

                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="t1_p7_balls_bowled">balls bowled</label>
                    <div class="col-md-4">
                        <input id="t1_p7_balls_bowled" name="t1_p7_balls_bowled" type="text" =" " class="
                        form-control input-md">

                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="t1_p7_balls_faced">balls faced</label>
                    <div class="col-md-4">
                        <input id="t1_p7_balls_faced" name="t1_p7_balls_faced" type="text" =" " class="
                        form-control input-md">

                    </div>
                </div>


                </br>
                <!-- <legend>Player 8</legend>
                 -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="t1_p8_id">Player 8</label>
                    <div class="col-md-4">
                        <select id="t1_p8_id" name="t1_p8_id" class="form-control">
                            <?php
                            global $conn;
                            $servername = "localhost";
                            $username = "root";
                            $password = "mysql";
                            $database = "cricket_analytics";
                            $conn = new mysqli($servername, $username, $password, $database);
                            $sql = "select player_id,player_name from player_master;";
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
                    <label class="col-md-4 control-label" for="t1_p8_score">score</label>
                    <div class="col-md-4">
                        <input id="t1_p8_score" name="t1_p8_score" type="text" =" " class="form-control input-md">

                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="t1_p8_wickets">wickets</label>
                    <div class="col-md-4">
                        <input id="t1_p8_wickets" name="t1_p8_wickets" type="text" =" " class="form-control input-md">

                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="t1_p8_balls_bowled">balls bowled</label>
                    <div class="col-md-4">
                        <input id="t1_p8_balls_bowled" name="t1_p8_balls_bowled" type="text" =" " class="
                        form-control input-md">

                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="t1_p8_balls_faced">balls faced</label>
                    <div class="col-md-4">
                        <input id="t1_p8_balls_faced" name="t1_p8_balls_faced" type="text" =" " class="
                        form-control input-md">

                    </div>
                </div>


                </br>
                <!-- <legend>Player 9</legend> -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="t1_p9_id">Player 9</label>
                    <div class="col-md-4">
                        <select id="t1_p9_id" name="t1_p9_id" class="form-control">
                            <?php
                            global $conn;
                            $servername = "localhost";
                            $username = "root";
                            $password = "mysql";
                            $database = "cricket_analytics";
                            $conn = new mysqli($servername, $username, $password, $database);
                            $sql = "select player_id,player_name from player_master;";
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
                    <label class="col-md-4 control-label" for="t1_p9_score">score</label>
                    <div class="col-md-4">
                        <input id="t1_p9_score" name="t1_p9_score" type="text" =" " class="form-control input-md">

                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="t1_p9_wickets">wickets</label>
                    <div class="col-md-4">
                        <input id="t1_p9_wickets" name="t1_p9_wickets" type="text" =" " class="form-control input-md">

                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="t1_p9_balls_bowled">balls bowled</label>
                    <div class="col-md-4">
                        <input id="t1_p9_balls_bowled" name="t1_p9_balls_bowled" type="text" =" " class="
                        form-control input-md">

                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="t1_p9_balls_faced">balls faced</label>
                    <div class="col-md-4">
                        <input id="t1_p9_balls_faced" name="t1_p9_balls_faced" type="text" =" " class="
                        form-control input-md">

                    </div>
                </div>


                </br>
                <!-- <legend>Player 10</legend>
                 -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="t1_p10_id">Player 10</label>
                    <div class="col-md-4">
                        <select id="t1_p10_id" name="t1_p10_id" class="form-control">
                            <?php
                            global $conn;
                            $servername = "localhost";
                            $username = "root";
                            $password = "mysql";
                            $database = "cricket_analytics";
                            $conn = new mysqli($servername, $username, $password, $database);
                            $sql = "select player_id,player_name from player_master;";
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
                    <label class="col-md-4 control-label" for="t1_p10_score">score</label>
                    <div class="col-md-4">
                        <input id="t1_p10_score" name="t1_p10_score" type="text" =" " class="form-control input-md">

                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="t1_p10_wickets">wickets</label>
                    <div class="col-md-4">
                        <input id="t1_p10_wickets" name="t1_p10_wickets" type="text" =" " class="form-control input-md">

                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="t1_p10_balls_bowled">balls bowled</label>
                    <div class="col-md-4">
                        <input id="t1_p10_balls_bowled" name="t1_p10_balls_bowled" type="text" =" " class="
                        form-control input-md">

                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="t1_p10_balls_faced">balls faced</label>
                    <div class="col-md-4">
                        <input id="t1_p10_balls_faced" name="t1_p10_balls_faced" type="text" =" " class="
                        form-control input-md">

                    </div>
                </div>


                </br>
                <!-- <legend>Player 11</legend> -->

                <div class="form-group">
                    <label class="col-md-4 control-label" for="t1_p11_id">Player 11</label>
                    <div class="col-md-4">
                        <select id="t1_p11_id" name="t1_p11_id" class="form-control">
                            <?php
                            global $conn;
                            $servername = "localhost";
                            $username = "root";
                            $password = "mysql";
                            $database = "cricket_analytics";
                            $conn = new mysqli($servername, $username, $password, $database);
                            $sql = "select player_id,player_name from player_master;";
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
                    <label class="col-md-4 control-label" for="t1_p11_score">score</label>
                    <div class="col-md-4">
                        <input id="t1_p11_score" name="t1_p11_score" type="text" =" " class="form-control input-md">

                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="t1_p11_wickets">wickets</label>
                    <div class="col-md-4">
                        <input id="t1_p11_wickets" name="t1_p11_wickets" type="text" =" " class="form-control input-md">

                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="t1_p11_balls_bowled">balls bowled</label>
                    <div class="col-md-4">
                        <input id="t1_p11_balls_bowled" name="t1_p11_balls_bowled" type="text" =" " class="
                        form-control input-md">

                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="t1_p11_balls_faced">balls faced</label>
                    <div class="col-md-4">
                        <input id="t1_p11_balls_faced" name="t1_p11_balls_faced" type="text" =" " class="
                        form-control input-md">

                    </div>
                </div>


            </div>


            <div style="float:right;">

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
                            $sql = "select player_id,player_name from player_master;";
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
                            $sql = "select player_id,player_name from player_master;";
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
                            $sql = "select player_id,player_name from player_master;";
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
                <!-- <legend>Player 4</legend> -->

                <div class="form-group">
                    <label class="col-md-4 control-label" for="t2_p4_id">Player 4</label>
                    <div class="col-md-4">
                        <select id="t2_p4_id" name="t2_p4_id" class="form-control">
                            <?php
                            global $conn;
                            $servername = "localhost";
                            $username = "root";
                            $password = "mysql";
                            $database = "cricket_analytics";
                            $conn = new mysqli($servername, $username, $password, $database);
                            $sql = "select player_id,player_name from player_master;";
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
                    <label class="col-md-4 control-label" for="t2_p4_score">score</label>
                    <div class="col-md-4">
                        <input id="t2_p4_score" name="t2_p4_score" type="text" =" " class="form-control input-md">

                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="t2_p4_wickets">wickets</label>
                    <div class="col-md-4">
                        <input id="t2_p4_wickets" name="t2_p4_wickets" type="text" =" " class="form-control input-md">

                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="t2_p4_balls_bowled">balls bowled</label>
                    <div class="col-md-4">
                        <input id="t2_p4_balls_bowled" name="t2_p4_balls_bowled" type="text" =" " class="
                        form-control input-md">

                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="t2_p4_balls_faced">balls faced</label>
                    <div class="col-md-4">
                        <input id="t2_p4_balls_faced" name="t2_p4_balls_faced" type="text" =" " class="
                        form-control input-md">

                    </div>
                </div>


                </br>
                <!-- <legend>Player 5</legend> -->

                <div class="form-group">
                    <label class="col-md-4 control-label" for="t2_p5_id">Player 5</label>
                    <div class="col-md-4">
                        <select id="t2_p5_id" name="t2_p5_id" class="form-control">
                            <?php
                            global $conn;
                            $servername = "localhost";
                            $username = "root";
                            $password = "mysql";
                            $database = "cricket_analytics";
                            $conn = new mysqli($servername, $username, $password, $database);
                            $sql = "select player_id,player_name from player_master;";
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
                    <label class="col-md-4 control-label" for="t2_p5_score">score</label>
                    <div class="col-md-4">
                        <input id="t2_p5_score" name="t2_p5_score" type="text" =" " class="form-control input-md">

                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="t2_p5_wickets">wickets</label>
                    <div class="col-md-4">
                        <input id="t2_p5_wickets" name="t2_p5_wickets" type="text" =" " class="form-control input-md">

                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="t2_p5_balls_bowled">balls bowled</label>
                    <div class="col-md-4">
                        <input id="t2_p5_balls_bowled" name="t2_p5_balls_bowled" type="text" =" " class="
                        form-control input-md">

                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="t2_p5_balls_faced">balls faced</label>
                    <div class="col-md-4">
                        <input id="t2_p5_balls_faced" name="t2_p5_balls_faced" type="text" =" " class="
                        form-control input-md">

                    </div>
                </div>


                </br>
                <!-- <legend>Player 6</legend> -->

                <div class="form-group">
                    <label class="col-md-4 control-label" for="t2_p6_id">Player 6</label>
                    <div class="col-md-4">
                        <select id="t2_p6_id" name="t2_p6_id" class="form-control">
                            <?php
                            global $conn;
                            $servername = "localhost";
                            $username = "root";
                            $password = "mysql";
                            $database = "cricket_analytics";
                            $conn = new mysqli($servername, $username, $password, $database);
                            $sql = "select player_id,player_name from player_master;";
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
                    <label class="col-md-4 control-label" for="t2_p6_score">score</label>
                    <div class="col-md-4">
                        <input id="t2_p6_score" name="t2_p6_score" type="text" =" " class="form-control input-md">

                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="t2_p6_wickets">wickets</label>
                    <div class="col-md-4">
                        <input id="t2_p6_wickets" name="t2_p6_wickets" type="text" =" " class="form-control input-md">

                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="t2_p6_balls_bowled">balls bowled</label>
                    <div class="col-md-4">
                        <input id="t2_p6_balls_bowled" name="t2_p6_balls_bowled" type="text" =" " class="
                        form-control input-md">

                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="t2_p6_balls_faced">balls faced</label>
                    <div class="col-md-4">
                        <input id="t2_p6_balls_faced" name="t2_p6_balls_faced" type="text" =" " class="
                        form-control input-md">

                    </div>
                </div>


                </br>
                <!-- <legend>Player 7</legend> -->

                <div class="form-group">
                    <label class="col-md-4 control-label" for="t2_p7_id">Player 7</label>
                    <div class="col-md-4">
                        <select id="t2_p7_id" name="t2_p7_id" class="form-control">
                            <?php
                            global $conn;
                            $servername = "localhost";
                            $username = "root";
                            $password = "mysql";
                            $database = "cricket_analytics";
                            $conn = new mysqli($servername, $username, $password, $database);
                            $sql = "select player_id,player_name from player_master;";
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
                    <label class="col-md-4 control-label" for="t2_p7_score">score</label>
                    <div class="col-md-4">
                        <input id="t2_p7_score" name="t2_p7_score" type="text" =" " class="form-control input-md">

                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="t2_p7_wickets">wickets</label>
                    <div class="col-md-4">
                        <input id="t2_p7_wickets" name="t2_p7_wickets" type="text" =" " class="form-control input-md">

                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="t2_p7_balls_bowled">balls bowled</label>
                    <div class="col-md-4">
                        <input id="t2_p7_balls_bowled" name="t2_p7_balls_bowled" type="text" =" " class="
                        form-control input-md">

                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="t2_p7_balls_faced">balls faced</label>
                    <div class="col-md-4">
                        <input id="t2_p7_balls_faced" name="t2_p7_balls_faced" type="text" =" " class="
                        form-control input-md">

                    </div>
                </div>


                </br>
                <!-- <legend>Player 8</legend> -->

                <div class="form-group">
                    <label class="col-md-4 control-label" for="t2_p8_id">Player 8</label>
                    <div class="col-md-4">
                        <select id="t2_p8_id" name="t2_p8_id" class="form-control">
                            <?php
                            global $conn;
                            $servername = "localhost";
                            $username = "root";
                            $password = "mysql";
                            $database = "cricket_analytics";
                            $conn = new mysqli($servername, $username, $password, $database);
                            $sql = "select player_id,player_name from player_master;";
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
                    <label class="col-md-4 control-label" for="t2_p8_score">score</label>
                    <div class="col-md-4">
                        <input id="t2_p8_score" name="t2_p8_score" type="text" =" " class="form-control input-md">

                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="t2_p8_wickets">wickets</label>
                    <div class="col-md-4">
                        <input id="t2_p8_wickets" name="t2_p8_wickets" type="text" =" " class="form-control input-md">

                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="t2_p8_balls_bowled">balls bowled</label>
                    <div class="col-md-4">
                        <input id="t2_p8_balls_bowled" name="t2_p8_balls_bowled" type="text" =" " class="
                        form-control input-md">

                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="t2_p8_balls_faced">balls faced</label>
                    <div class="col-md-4">
                        <input id="t2_p8_balls_faced" name="t2_p8_balls_faced" type="text" =" " class="
                        form-control input-md">

                    </div>
                </div>


                </br>
                <!-- <legend>Player 9</legend> -->

                <div class="form-group">
                    <label class="col-md-4 control-label" for="t2_p9_id">Player 9</label>
                    <div class="col-md-4">
                        <select id="t2_p9_id" name="t2_p9_id" class="form-control">
                            <?php
                            global $conn;
                            $servername = "localhost";
                            $username = "root";
                            $password = "mysql";
                            $database = "cricket_analytics";
                            $conn = new mysqli($servername, $username, $password, $database);
                            $sql = "select player_id,player_name from player_master;";
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
                    <label class="col-md-4 control-label" for="t2_p9_score">score</label>
                    <div class="col-md-4">
                        <input id="t2_p9_score" name="t2_p9_score" type="text" =" " class="form-control input-md">

                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="t2_p9_wickets">wickets</label>
                    <div class="col-md-4">
                        <input id="t2_p9_wickets" name="t2_p9_wickets" type="text" =" " class="form-control input-md">

                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="t2_p9_balls_bowled">balls bowled</label>
                    <div class="col-md-4">
                        <input id="t2_p9_balls_bowled" name="t2_p9_balls_bowled" type="text" =" " class="
                        form-control input-md">

                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="t2_p9_balls_faced">balls faced</label>
                    <div class="col-md-4">
                        <input id="t2_p9_balls_faced" name="t2_p9_balls_faced" type="text" =" " class="
                        form-control input-md">

                    </div>
                </div>


                </br>
                <!-- <legend>Player 10</legend> -->

                <div class="form-group">
                    <label class="col-md-4 control-label" for="t2_p10_id">Player 10</label>
                    <div class="col-md-4">
                        <select id="t2_p10_id" name="t2_p10_id" class="form-control">
                            <?php
                            global $conn;
                            $servername = "localhost";
                            $username = "root";
                            $password = "mysql";
                            $database = "cricket_analytics";
                            $conn = new mysqli($servername, $username, $password, $database);
                            $sql = "select player_id,player_name from player_master;";
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
                    <label class="col-md-4 control-label" for="t2_p10_score">score</label>
                    <div class="col-md-4">
                        <input id="t2_p10_score" name="t2_p10_score" type="text" =" " class="form-control input-md">

                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="t2_p10_wickets">wickets</label>
                    <div class="col-md-4">
                        <input id="t2_p10_wickets" name="t2_p10_wickets" type="text" =" " class="form-control input-md">

                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="t2_p10_balls_bowled">balls bowled</label>
                    <div class="col-md-4">
                        <input id="t2_p10_balls_bowled" name="t2_p10_balls_bowled" type="text" =" " class="
                        form-control input-md">

                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="t2_p10_balls_faced">balls faced</label>
                    <div class="col-md-4">
                        <input id="t2_p10_balls_faced" name="t2_p10_balls_faced" type="text" =" " class="
                        form-control input-md">

                    </div>
                </div>


                </br>
                <!-- <legend>Player 11</legend> -->

                <div class="form-group">
                    <label class="col-md-4 control-label" for="t2_p11_id">Player 11</label>
                    <div class="col-md-4">
                        <select id="t2_p11_id" name="t2_p11_id" class="form-control">
                            <?php
                            global $conn;
                            $servername = "localhost";
                            $username = "root";
                            $password = "mysql";
                            $database = "cricket_analytics";
                            $conn = new mysqli($servername, $username, $password, $database);
                            $sql = "select player_id,player_name from player_master;";
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
                    <label class="col-md-4 control-label" for="t2_p11_score">score</label>
                    <div class="col-md-4">
                        <input id="t2_p11_score" name="t2_p11_score" type="text" =" " class="form-control input-md">

                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="t2_p11_wickets">wickets</label>
                    <div class="col-md-4">
                        <input id="t2_p11_wickets" name="t2_p11_wickets" type="text" =" " class="form-control input-md">

                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="t2_p11_balls_bowled">balls bowled</label>
                    <div class="col-md-4">
                        <input id="t2_p11_balls_bowled" name="t2_p11_balls_bowled" type="text" =" " class="
                        form-control input-md">

                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="t2_p11_balls_faced">balls faced</label>
                    <div class="col-md-4">
                        <input id="t2_p11_balls_faced" name="t2_p11_balls_faced" type="text" =" " class="
                        form-control input-md">

                    </div>
                </div>

            </div>


            <!-- Text input---------------------------------------------------------------------------------------------------------------------------------------------------->


            <!-- Text input---------------------------------------------------------------------------------------------------------------------------------------------------->


            <!-- Text input---------------------------------------------------------------------------------------------------------------------------------------------------->


            <!-- Text input---------------------------------------------------------------------------------------------------------------------------------------------------->


            <!--

                <form name="Input" action="matchdetail.php" method="POST">
                  match id:<input type="varchar" name="m_id">

                  player 1:<input type="text" name="t1_p1_id">
                  score:<input type="text" name="t1_p1_score">
                  wickets:<input type="text" name="t1_p1_wickets">
                  balls bowled:<input type="text" name="t1_p1_balls_bowled">
                  balls faced:<input type="text" name="t1_p1_balls_faced">


                  player 2:<input type="text" name="t1_p2_id">
                  score:<input type="text" name="t1_p2_score">
                  wickets:<input type="text" name="t1_p2_wickets">
                  balls bowled:<input type="text" name="t1_p2_balls_bowled">
                  balls faced:<input type="text" name="t1_p2_balls_faced">


                  player 3:<input type="text" name="t1_p3_id">
                  score:<input type="text" name="t1_p3_score">
                  wickets:<input type="text" name="t1_p3_wickets">
                  balls bowled:<input type="text" name="t1_p3_balls_bowled">
                  balls faced:<input type="text" name="t1_p3_balls_faced">

                  player 4:<input type="text" name="t1_p4_id">
                  score:<input type="text" name="t1_p4_score">
                  wickets:<input type="text" name="t1_p4_wickets">
                  balls bowled:<input type="text" name="t1_p4_balls_bowled">
                  balls faced:<input type="text" name="t1_p4_balls_faced">

                  player 5:<input type="text" name="t1_p1_id">
                  score:<input type="text" name="t1_p1_score">
                  wickets:<input type="text" name="t1_p1_wickets">
                  balls bowled:<input type="text" name="t1_p1_balls_bowled">
                  balls faced:<input type="text" name="t1_p1_balls_faced">

                  -->
            <br>


        </fieldset>

</div>

</form>

</body>
</html>