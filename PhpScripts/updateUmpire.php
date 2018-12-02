<html>
	<head>
		<title>
			Umpire
		</title>
	</head>

         <?php
error_reporting(0);
$first_name = $_POST["FirstName"];
$last_name = $_POST["LastName"];
if ($first_name == "")
			{
				echo "<p><font color=\"blue\">Added successfully</font></p>";
				echo "Something is wrong. ";
				echo '<a href="addUmpire.html"> Try again!</a>';
				exit();
			}

mysql_connect('localhost', 'root', 'mysql') or die(mysql_error());
echo "<p><font color=\"red\">Connected successfully</font></p>";

mysql_select_db("cricket_analytics") or die("Something went wrong.");
$query="UPDATE umpire SET last_name = '$LastName', FirstName = '$first_name'";
mysql_query($query);

echo "<p>Record Updated<p>";
echo '<a href="\selectUmpire.php"> Check the Result!</a>';

mysql_close();


?>
</html>
