<html>
<head>
    <title>Update player results</title>
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
    $id =$_GET['pid'];
    $name = $_GET['playerName'];
    $nationality = $_GET['nationality'];
    $dob = $_GET['dateObirth'];
    $conn = new mysqli($servername, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "<p><font color=\"red\">Connected successfully</font></p>";
    $city = mysqli_real_escape_string($conn,$city);
    $sql = " call sp_update_player($id,'$name','$dob','$nationality');";
    echo "$sql";
    if ($conn->query($sql) === TRUE) {
        echo "<p>Successful </p>";
    } else {
        //echo "<p>Error: " . $sql . "<br>" . $conn->error." <a href='addStudent.html'>Try Again</a> </p></p>";
        echo "<p>Something went wrong! <a href='#'>Try Again</a> </p></p>";
    }
    ?>
</div>
</body>
</html>