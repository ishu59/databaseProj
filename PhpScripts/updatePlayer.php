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
        <form action="updatePlayerResult.php" method="get" class="form-horizontal">
            <fieldset>

                <!-- Form Name -->
                <legend>Update Player</legend>
                <input id="pid" name="pid" value="<?php echo $_GET['id'];?>" hidden>
                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput">Player Name</label>
                    <div class="col-md-4">
                        <input id="playerName" name="playerName"
                               type="text" placeholder="Name" class="form-control input-md"
                               value="<?php echo $_GET['name'];?>"
                               required=""/>
                        <span class="help-block">Enter both player First and last name</span>
                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="dateObirth">Born on</label>
                    <div class="col-md-4">
                        <input id="dateObirth" name="dateObirth" type="date" placeholder="Player Birth Date"
                               class="form-control input-md"
                               value="<?php echo $_GET['dob'];?>"
                               required="">
                        <!--                <span class="help-block">(YYYY-MM-DD)</span>-->
                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="Nationality">Nationality</label>
                    <div class="col-md-4">
                        <input id="nationality" name="nationality"
                               type="text" placeholder="Enter nationality" class="form-control input-md"
                               value="<?php echo $_GET['nationality'];?>"
                               required="">

                    </div>
                </div>

                <!-- Select Basic -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="teamid">Team Name</label>
                    <div class="col-md-4">
                        <select id="teamid" name="teamid" class="form-control" disabled>
                            <option value="<?php echo $_GET['teamname'];?>"><?php echo $_GET['teamname'];?></option>
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