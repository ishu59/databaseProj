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

        <?php





        global $conn;



        $servername = "localhost";

        $username = "root";

        $password = "mysql";

        $database = "cricket_analytics";



        //mysqli prepared statement

        $series_name =$_GET['series_name'];

        $match_date = $_GET['match_date'];

        $venue_id = $_GET['venue_id_fk'];



        $conn = new mysqli($servername, $username, $password, $database);



        // Check connection

        if ($conn->connect_error) {

            die("Connection failed: " . $conn->connect_error);

        }

        echo "<p><font color=\"red\">Connected successfully</font></p>";

        $city = mysqli_real_escape_string($conn,$city);

        $sql = "Insert into fixture_master (series_name,match_date,venue_id_fk) values ('$series_name','$match_date',$venue_id);";

        echo "$sql";

        if ($conn->query($sql) == TRUE) {

            echo "<p>added Successfully </p>";


        }

        ?>





    </div>

</div>

</body>

</html>