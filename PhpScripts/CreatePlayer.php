<html>
<head>
    <title>Home Delivery Restaurants</title>
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
<form action="addPlayerResult.php" method="get" class="form-horizontal">
    <fieldset>

        <!-- Form Name -->
        <legend>Add new Player</legend>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="textinput">Player Name</label>
            <div class="col-md-4">
                <input id="playerName" name="playerName" type="text" placeholder="Name" class="form-control input-md" required="">
                <span class="help-block">Enter both player First and last name</span>
            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="dateObirth">Born on</label>
            <div class="col-md-4">
                <input id="dateObirth" name="dateObirth" type="date" placeholder="Player Birth Date" class="form-control input-md" required="">
<!--                <span class="help-block">(YYYY-MM-DD)</span>-->
            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="Nationality">Nationality</label>
            <div class="col-md-4">
                <input id="nationality" name="nationality" type="text" placeholder="Enter nationality" class="form-control input-md" required="">

            </div>
        </div>

        <!-- Select Basic -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="teamid">Team Name</label>
            <div class="col-md-4">
                <select id="teamid" name="teamid" class="form-control">
                    <?php
                    global $conn;
                    $servername = "localhost";
                    $username = "root";
                    $password = "mysql";
                    $database = "cricket_analytics";
                    $conn = new mysqli($servername, $username, $password, $database);
                    $sql = "select team_id,team_name from team_master;";
                    $result = $conn->query($sql);
                    if($result){
                        echo "<table border=1px>";
                        while($row = $result->fetch_assoc()) {
                            echo "<option value=$row[team_id]>$row[team_name]</option>";
                        }
                    }
                    ?>
                </select>
            </div>
        </div>


        

        <!-- Button -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="player_submit"></label>
            <div class="col-md-4">
                <button id="player_submit" name="player_submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </fieldset>
</form>

    </div>
</div>
</body>
</html>