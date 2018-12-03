<html>
<head>
    <title>Player Cricket Analytics</title>
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
    <link rel="stylesheet" href="cards.css
">
</div>
<div>
    <?php include 'navBar.php';?>

    <div class="container">
        <!--Add code here-->
        <div >
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="CreatePlayer.php">Click here to create new Player</a>
                    </div>

                </div>
            </nav>
        </div>

        <form action="PlayerSearchResult.php" method="get" class="form-horizontal">
            <fieldset>
            <!-- Text input-->
                <legend>Search players</legend>

            <div class="form-group">
                <label class="col-md-4 control-label" for="textinput">Search:</label>
                <div class="col-md-4">
                    <input id="stext" name="stext" type="text" placeholder="Name" class="form-control input-md"
                           required="">
                    <span class="help-block">Enter search text here</span>
                </div>
            </div>


            <!-- Button -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="Search_submit"></label>
                <div class="col-md-4">
                    <button id="Search_submit" name="Search_submit" class="btn btn-primary">Submit</button>
                </div>
            </div>

            </fieldset>
        </form>
<div class="container container-fluid">
    <legend>View All Player</legend>
    <div class="container container-fluid">

        <table class="table table-condensed">
            <?php
            global $conn;
            $servername = "localhost";
            $username = "root";
            $password = "mysql";
            $database = "cricket_analytics";
            $conn = new mysqli($servername, $username, $password, $database);
            $sql = "call sp_getAllPlayer()";
            $result = $conn->query($sql);
            if($result){
                            echo "<td><b>Player name</b></td>";
                            echo "<td><b>Age</b></td>";
                            echo "<td><b>Nationality</b></td>";
                            echo "<td><b>Team</b></td>";

                            
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>$row[player_name]</b></td>";
                    echo "<td>$row[age]</b></td>";
                    echo "<td>$row[player_nationality]</b></td>";
                    echo "<td>$row[teamName]</b></td>";
                    echo "<td><a href='updatePlayer.php?id=$row[player_id]&teamname=$row[teamName]&dob=$row[Player_dob]&nationality=$row[player_nationality]&name=$row[player_name]'><button>Update</button></a></td></tr>";
                }
            };

            ?>


        </table>

    </div>


</div>

    </div>
</div>
</body>
</html>
