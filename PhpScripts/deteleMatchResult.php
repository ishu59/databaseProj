<html>
<head>
    <title>Add Venue </title>
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
    <?php include 'navBar.php'; ?>

    <div class="container">
        <?php

        global $conn;
        $servername = "localhost";
        $username = "root";
        $password = "mysql";
        $database = "cricket_analytics";

        //mysqli prepared statement
        $id = $_GET['id'];
//        $t_id = $_GET['t_id'];
//        $p_id = $_GET['p_id'];
//        $detail_id = $_GET['detail_id'];
//        $t1_p1_id = $_GET['t1_p1_id'];
//        $t1_p1_score = $_GET['t1_p1_score'];
//        $t1_p1_wickets = $_GET['t1_p1_wickets'];
//        $t1_p1_balls_bowled = $_GET['t1_p1_balls_bowled'];
//        $t1_p1_balls_faced = $_GET['t1_p1_balls_faced'];

        $conn = new mysqli($servername, $username, $password, $database);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        echo "<p><font color=\"red\">Connected successfully</font></p>";
//        $city = mysqli_real_escape_string($conn, $city);
        $sql = "call sp_delete_match($id);";
        echo "$sql";

        #$result = mysqli_query($conn, $sql);

        if ($conn->query($sql) === TRUE) {
            echo "<p>Deleted Successful </p>";
        } else {
            //echo "<p>Error: " . $sql . "<br>" . $conn->error." <a href='addStudent.html'>Try Again</a> </p></p>";
            echo "<p>Something went wrong! <a href='#'>Try Again</a> </p></p>";
        }
        ?>
    </div>
</div>
</body>
</html>