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
        <form action="updateVenueResult.php" method="get" class="form-horizontal">
            <fieldset>

                <!-- Form Name -->
                <legend>Update Venue</legend>
<input id="vid" name="vid" value="<?php echo $_GET['id'];?>" hidden/>
                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="Name">Venue Name</label>
                    <div class="col-md-4">
                        <input id="name" name="name" type="text" placeholder="Name"
                               value="<?php echo $_GET['name'];?>"
                               class="form-control input-md" required="">
                        <span class="help-block">Add venue name here</span>
                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="city">City</label>
                    <div class="col-md-4">
                        <input id="city" name="city" type="text" placeholder="Enter city"
                               value="<?php echo $_GET['city'];?>"
                               class="form-control input-md" required="">

                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="cap">Capacity</label>
                    <div class="col-md-4">
                        <input id="cap" name="cap" type="number"
                               value="<?php echo $_GET['cap'];?>"
                               placeholder="Enter Capacity" class="form-control input-md" required="">

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