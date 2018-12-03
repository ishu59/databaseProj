<html>
<head>
    <title>Create new team</title>
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
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</div>
<div>

    <?php include 'navBar.php';?>



    <div class="container">

<form action="addTeamResults.php" method="get" class="form-horizontal">
    <fieldset>

        <!-- Form Name -->
        <legend>Create new Team </legend>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="teamName">Team Name</label>
            <div class="col-md-5">
                <input id="teamName" name="teamName" type="text" placeholder="Enter Team Name" class="form-control input-md" required="">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="mascot">Team Mascot</label>
            <div class="col-md-5">
                <input id="mascot" name="mascot" type="text" placeholder="Enter Team mascot here" class="form-control input-md" required="">

            </div>
        </div>
        <div class="form-group">
            <label class="col-md-4 control-label" for="rank">Team Ranking</label>
            <div class="col-md-5">
                <input id="rank" name="rank" type="number"
                       placeholder="Enter Rank here"
                       class="form-control input-md" required="">

            </div>
        </div>

        <!-- Textarea -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="desc">Team description</label>
            <div class="col-md-4">
                <textarea class="form-control" id="desc" name="desc"></textarea>
            </div>
        </div>

        <!-- Button -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="teamSubmit"></label>
            <div class="col-md-4">
                <button id="teamSubmit" name="teamSubmit" class="btn btn-primary">Submit</button>
            </div>
        </div>



    </fieldset>
</form>
