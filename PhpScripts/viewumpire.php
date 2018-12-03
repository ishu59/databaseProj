<html>
<head>
    <title>Cricket Analystics</title>
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
                        <a class="navbar-brand" href="addUmpire.php">Click here to create add new Umpire</a>
                    </div>

                </div>
            </nav>
        </div>


        <h1 class="text-center">Umpire Description</h1>


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
                        $sql = "select umpire_id,first_name,last_name from match_umpire";
                        $result = $conn->query($sql);
                        if($result){
                            echo "<td><b>First Name</b></td>";
                                echo "<td><b>Last Name</b></td></tr>";
                            while($row = $result->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td>$row[first_name]</b></td>";
                                echo "<td>$row[last_name]</b></td></tr>";
                            

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