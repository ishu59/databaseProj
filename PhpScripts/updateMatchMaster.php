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
    <?php include 'navBar.php'; ?>

    <div class="container">
        <!--Add code here-->
        <h1>
            Welcome to update match master page!!
        </h1>

        <form class="form-horizontal" action="updateMatchResult.php" method="GET">

            <fieldset>

                <?php
                global $conn;

                global $m_id;
                global $u_id;
                global $t1_id;
                global $t2_id;
                global $m_result;
                $m_id = $_GET['id'];
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
                    $u_id = $row["umpire_id_fk"];
                    $t1_id = $row["team_id_1_fk"];
                    $t2_id = $row["team_id_2_fk"];
                    $v_id = $row['venue_id_fk'];
                    $m_date = $row['match_date'];
                    $score_t1 = $row['score_team_1'];
                    $score_t2 = $row['score_team_2'];
                    $wicket_1 = $row['wicket_team_1'];
                    $wicket_2 = $row['wicket_team_2'];
                    $m_result = $row['match_result'];

                } else {
                    //echo "<p>Error: " . $sql . "<br>" . $conn->error." <a href='addStudent.html'>Try Again</a> </p></p>";
                    echo "<p>Something went wrong!</p>";
                }
                ?>
                <?php
//                echo $m_id+"<br/>";
//                echo $u_id+"<br/>";
//                echo $t1_id+"<br/>";
//                echo $t2_id+"<br/>";
//                echo $m_date;
//                echo $m_result;

                ?>
                <!-- Form Name -->
                <legend>Create Match</legend>

                <!-- Select Basic -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="team1_id">Team 1 ID</label>
                    <div class="col-md-4">
                        <select id="team1_id" name="team1_id" class="form-control">
                            <?php
                            global $conn;
                            global $temp2;
                            $temp2 = 'this temo text';
                            $servername = "localhost";
                            $username = "root";
                            $password = "mysql";
                            $database = "cricket_analytics";
                            $conn = new mysqli($servername, $username, $password, $database);
                            $sql = "select team_id,team_name from team_master;";
                            $result = $conn->query($sql);
                            if ($result) {
                                echo "<table border=1px>";
                                while ($row = $result->fetch_assoc()) {

                                    printf('<option value="%s" %s>%s</option>',
                                        $row[team_id],$row[team_id] == $t1_id ? 'selected="selected"' : ' ', $row[team_name]);
                                }
                            }
                            ?>
                        </select>
                    </div>
                </div>

                <!-- Select Basic -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="team2_id">Team 2 ID</label>
                    <div class="col-md-4">
                        <select id="team2_id" name="team2_id" class="form-control">
                            <?php

                            $sql = "select team_id,team_name from team_master;";
                            $result = $conn->query($sql);
                            if ($result) {
                                echo "<table border=1px>";
                                while ($row = $result->fetch_assoc()) {
                                    printf('<option value="%s" %s>%s</option>',
                                        $row[team_id],$row[team_id] == $t2_id ? 'selected="selected"' : ' ', $row[team_name]);
                                }
                            }
                            ?>
                        </select>
                    </div>
                </div>

                <!-- Select Basic -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="venue_id">Venue ID</label>
                    <div class="col-md-4">
                        <select id="venue_id" name="venue_id" class="form-control">
                            <?php
                            global $conn;
                            $servername = "localhost";
                            $username = "root";
                            $password = "mysql";
                            $database = "cricket_analytics";
                            $conn = new mysqli($servername, $username, $password, $database);
                            $sql = "select venue_name, venue_id from venue;";
                            $result = $conn->query($sql);
                            if ($result) {
                                echo "<table border=1px>";
                                while ($row = $result->fetch_assoc()) {

                                    printf('<option value="%s" %s>%s</option>',
                                        $row[venue_id],$row[venue_id] == $v_id ? 'selected="selected"' : ' ', $row[venue_name]);

                                }
                            }
                            ?>
                        </select>
                    </div>
                </div>

                <!-- Select Basic -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="ump_id">Umpire ID</label>
                    <div class="col-md-4">
                        <select id="ump_id" name="ump_id" class="form-control">
                            <?php
                            global $conn;
                            $servername = "localhost";
                            $username = "root";
                            $password = "mysql";
                            $database = "cricket_analytics";
                            $conn = new mysqli($servername, $username, $password, $database);
                            $sql = "select umpire_id,concat(first_name,' ',last_name) as uname from match_umpire;";
                            $result = $conn->query($sql);
                            if ($result) {
                                echo "<table border=1px>";
                                while ($row = $result->fetch_assoc()) {
                                    echo "<option value=$row[umpire_id]>$row[uname]</option>";
                                    printf('<option value="%s" %s>%s</option>',
                                        $row[umpire_id],$row[umpire_id] == $u_id ? 'selected="selected"' : ' ', $row[uname]);
                                }
                            }
                            ?>
                        </select>
                    </div>
                </div>

<!--                <input type="text" name="match_id" id="match_id" value="--><?//=$m_id?><!--" hidden>-->
                <input id="match_id" name="match_id" type="text" value="<?=$m_id?>" hidden="hidden" />
                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="m_date">Match Date</label>
                    <div class="col-md-4">
                        <input id="m_date" name="m_date" type="date"
                               value="<?=$m_date?>"
                               placeholder="" class="form-control input-md">

                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="score_t1">Team 1 score</label>
                    <div class="col-md-4">
                        <input id="score_t1" name="score_t1" type="text" placeholder=""
                               value="<?=$score_t1?>"
                               class="form-control input-md">

                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="score_t2">Team 2 score</label>
                    <div class="col-md-4">
                        <input id="score_t2" name="score_t2"
                               value="<?=$score_t2?>"
                               type="text" placeholder="" class="form-control input-md">

                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="wicket_1">Wickets taken by team 1</label>
                    <div class="col-md-4">
                        <input id="wicket_1" name="wicket_1" type="text"
                               value="<?=$wicket_1?>"
                               placeholder="" class="form-control input-md">

                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="wicket_2">Wickets taken by team 2</label>
                    <div class="col-md-4">
                        <input id="wicket_2" name="wicket_2" type="text"
                               value="<?=$wicket_2?>"
                               placeholder="" class="form-control input-md">

                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="m_result">Match result</label>
                    <div class="col-md-4">
                        <input id="m_result" name="m_result" type="text"
                               value="<?=$m_result?>"
                               placeholder="" class="form-control input-md">

                    </div>
                </div>
                <!-- Button -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="player_submit"></label>
                    <div class="col-md-4">
                        <button id="submit" name="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </fieldset>

        </form>


    </div>
</div>
</body>
</html>