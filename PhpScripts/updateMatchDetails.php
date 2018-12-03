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
    <div class="container">
        <?php
        global $conn;

        global $m_id;
        global $t_id;
        global $p_id;

        $p_id = $_GET['p_id'];
        $m_id = $_GET['m_id'];
        $detail_id = $_GET['detail_id'];
        $score = $_GET['score'];
        $wicket = $_GET['wicket'];
        $bowled = $_GET['bowled'];
        $faced = $_GET['faced'];
        $t_id = $_GET['t_id'];
        $p_name = $_GET['p_name'];

//        $servername = "localhost";
//        $username = "root";
//        $password = "mysql";
//        $database = "cricket_analytics";
//        $conn = new mysqli($servername, $username, $password, $database);
//        $sql = "call sp_getMatchByID($m_id);";
        //    $result = $conn->query($sql);
        //    if (mysqli_num_rows($result) > 0) {
        //        $row = mysqli_fetch_assoc($result);
        //
        //    } else {
        //        //echo "<p>Error: " . $sql . "<br>" . $conn->error." <a href='addStudent.html'>Try Again</a> </p></p>";
        //        echo "<p>Something went wrong!</p>";
        //    }
        ?>

        <!--Add code here-->
        <form class="form-horizontal" action="updateMatchDetailsResult.php" method="GET">
            <input name="m_id" id="m_id" value="<?= $m_id ?>" hidden>
            <input name="t_id" id="t_id" value="<?= $t_id ?>" hidden>
            <input name="p_id" id="p_id" value="<?= $p_id ?>" hidden>
            <input name="detail_id" id="detail_id" value="<?= $detail_id ?>" hidden>
            <fieldset>

                <!-- Form Name -->
                <legend>TEAM 1</legend>


                </br>


                <div class="form-group">
                    <label class="col-md-4 control-label" for="t1_p1_id">Player 1</label>
                    <div class="col-md-4">
                        <select id="t1_p1_id" name="t1_p1_id" class="form-control" disabled>
                            <option value=<?= $p_id ?> ><?= $p_name ?></option>
                        </select>
                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="t1_p1_score">score</label>
                    <div class="col-md-4">
                        <input id="score" name="t1_p1_score" type="text"
                               value="<?= $score ?>"
                               class="form-control input-md">

                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="t1_p1_wickets">wickets</label>
                    <div class="col-md-4">
                        <input id="t1_p1_wickets" name="t1_p1_wickets" type="text"
                               value="<?= $wicket ?>"
                               class="form-control input-md">

                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="t1_p1_balls_bowled">balls bowled</label>
                    <div class="col-md-4">
                        <input id="t1_p1_balls_bowled" name="t1_p1_balls_bowled" type="text"
                               value="<?= $bowled ?>"
                               class="form-control input-md">

                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="t1_p1_balls_faced">balls faced</label>
                    <div class="col-md-4">
                        <input id="t1_p1_balls_faced" name="t1_p1_balls_faced" type="text"
                               value="<?= $faced ?>"
                               class="form-control input-md">

                    </div>
                </div>


                <!-- Button -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="teamSubmit"></label>
                    <div class="col-md-4">
                        <button id="teamSubmit" name="teamSubmit" class="btn btn-primary btn-lg">Submit</button>
                    </div>
                </div>


            </fieldset>
        </form>
    </div>
</div>


</body>
</html>