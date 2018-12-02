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
        <!--Add code here-->
        <div >
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="AddVenue.php">Click here to create new Venue</a>
                    </div>

                </div>
            </nav>
        </div>


        <h1 class="text-center">Venue Description</h1>


        <div class="container">
            <div class="row">

                <div class="container container-fluid">

                    <table class="table table-condensed">
                        <?php
                        global $conn;
                        $servername = "localhost";
                        $username = "root";
                        $password = "mysql";
                        $database = "cricket_analytics";
                        $conn = new mysqli($servername, $username, $password, $database);
                        $sql = "call sp_getAllVenue()";
                        $result = $conn->query($sql);
                        if($result){
                            while($row = $result->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td><b>$row[venue_name]</b></td>";
                                echo "<td><b>$row[venue_city]</b></td>";
                                echo "<td><b>$row[venue_capacity]</b></td>";

                                echo "<td><a href='updateVenue.php?id=$row[venue_id]&name=$row[venue_name]&city=$row[venue_city]&cap=$row[venue_capacity]'><button>Update</button></a></td></tr>";
                            }
                        };

                        ?>


                    </table>
<!--                Fancy div: can be done later-->
                <!--team-1-->
                <!--team-1-->
<!--                <div class="col-lg-4">-->
<!--                    <div class="our-team-main">-->
<!---->
<!--                        <div class="team-front">-->
<!--                            <img src="http://placehold.it/110x110/9c27b0/fff?text=Gambhir" class="img-fluid" />-->
<!--                            <h3>Player</h3>-->
<!--                            <p>Player Team</p>-->
<!--                        </div>-->
<!---->
<!--                        <div class="team-back">-->
<!--	<span>-->
<!--	Nationality->-->
<!--	DateofBirth->-->
<!--	Runs->-->
<!--	Wickets->-->
<!--	</span>-->
<!--                        </div>-->
<!---->
<!--                    </div>-->
<!--                </div>-->
                <!--team-1-->

                <!--team-2-->
<!--                <div class="col-lg-4">-->
<!--                    <div class="our-team-main">-->
<!---->
<!--                        <div class="team-front">-->
<!--                            <img src="http://placehold.it/110x110/336699/fff?text=Sehwag" class="img-fluid" />-->
<!--                            <h3>Player</h3>-->
<!--                            <p>Player Team</p>-->
<!--                        </div>-->
<!---->
<!--                        <div class="team-back">-->
<!--	<span>-->
<!--	Nationality->-->
<!--	DateofBirth->-->
<!--	Runs->-->
<!--	Wickets->-->
<!--	</span>-->
<!--                        </div>-->
<!---->
<!--                    </div>-->
<!--                </div>-->
                <!--team-2-->

                <!--team-3-->

            </div>
        </div>

    </div>
</div>
</body>
</html>