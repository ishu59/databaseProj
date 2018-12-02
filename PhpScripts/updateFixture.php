<html>
	<head>
		<title>
			Fixture
		</title>
	</head>

         <?php
error_reporting(0);
$series_name = $_POST["SeriesName"];
$match_date = $_POST["MatchDate"];
if ($first_name == "")
			{
				echo "<p><font color=\"blue\">Added successfully</font></p>";
				echo "Something is wrong. ";
				echo '<a href="addFixture.html"> Try again!</a>';
				exit();
			}

mysql_connect('localhost', 'root', 'mysql') or die(mysql_error());
echo "<p><font color=\"red\">Connected successfully</font></p>";

mysql_select_db("cricket_analytics") or die("Something went wrong.");
$query="UPDATE umpire SET series_name = '$SeriesName', match_date = '$MatchDate'";
mysql_query($query);

echo "<p>Record Updated<p>";
echo '<a href="\selectFixture.php"> Check the Result!</a>';

mysql_close();


?>
</html>
