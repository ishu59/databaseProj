<html>
<head>
    <title>Add results</title>
</head>
<body>
<div>
    <?php include 'navBar.php';?>
    <?php


    global $conn;

    $servername = "localhost";
    $username = "root";
    $password = "mysql";
    $database = "cricket_analytics";

    //mysqli prepared statement
    $teamName =$_GET['teamName'];
    $mascot = $_GET['mascot'];
    $desc = $_GET['desc'];

    $conn = new mysqli($servername, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "<p><font color=\"red\">Connected successfully</font></p>";
    $city = mysqli_real_escape_string($conn,$city);
    $sql = "Insert into team_master (team_name,team_mascot,team_desc) 
        values ('$teamName','$mascot','$desc');";
    echo "$sql";
    if ($conn->query($sql) === TRUE) {
        echo "<p>Team added Successfully <a href='ViewTeam.php'>Check the result</a></p>";
    } else {
        //echo "<p>Error: " . $sql . "<br>" . $conn->error." <a href='addStudent.html'>Try Again</a> </p></p>";
        echo "<p>Something went wrong! <a href='AddTeam.php'>Try Again</a> </p></p>";
    }
    ?>
</div>
</body>
</html>