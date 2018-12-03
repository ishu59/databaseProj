<html>

<head>

    <title>Add Umpire </title>

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

        <form action="AddUmpireResult.php" method="get" class="form-horizontal">

            <fieldset>



                <!-- Form Name -->

                <legend>Add new Umpire</legend>



                <!-- Text input-->

                <div class="form-group">

                    <label class="col-md-4 control-label" for="first_name">First Name</label>

                    <div class="col-md-4">

                        <input id="first_name" name="first_name" type="text" placeholder="" class="form-control input-md" required="">

                        <span class="help-block">Add umpire first name here</span>

                    </div>

                </div>



                <!-- Text input-->

                <div class="form-group">

                    <label class="col-md-4 control-label" for="last_name">Last Name</label>

                    <div class="col-md-4">

                        <input id="last_name" name="last_name" type="text" placeholder="" class="form-control input-md" required="">



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