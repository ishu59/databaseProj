<html>

<head>

    <title>Add Fixture </title>

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

        <form action="AddFixtureResult.php" method="get" class="form-horizontal">

            <fieldset>



                <!-- Form Name -->

                <legend>Add new Fixture</legend>



                <!-- Text input-->

                <div class="form-group">

                    <label class="col-md-4 control-label" for="series_name">Series Name</label>

                    <div class="col-md-4">

                        <input id="series_name" name="series_name" type="text" placeholder="" class="form-control input-md" required="">



                    </div>

                </div>



                <!-- Text input-->

                <div class="form-group">

                    <label class="col-md-4 control-label" for="match_date">Match_Date</label>

                    <div class="col-md-4">

                        <input id="match_date" name="match_date" type="date" placeholder="" class="form-control input-md" required="">



                    </div>

                </div>
                 <div class="form-group">
                                    <label class="col-md-4 control-label" for="venue_id_fk">Venue</label>
                                    <div class="col-md-4">
                                        <select id="venue_id_fk" name="venue_id_fk" class="form-control">
                                            <?php
                                            global $conn;
                                            $servername = "localhost";
                                            $username = "root";
                                            $password = "mysql";
                                            $database = "cricket_analytics";
                                            $conn = new mysqli($servername, $username, $password, $database);
                                            $sql = "select venue_id,venue_name from venue;";
                                            $result = $conn->query($sql);
                                            if($result){
                                                echo "<table border=1px>";
                                                while($row = $result->fetch_assoc()) {
                                                    echo "<option value=$row[venue_id]>$row[venue_name]</option>";
                                                }
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>









                <!-- Button -->

                <div class="form-group">

                    <label class="col-md-4 control-label" for="submit"></label>

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