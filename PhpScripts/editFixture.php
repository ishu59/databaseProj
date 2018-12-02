<html>
	<head>
		<title>
			Fixture
		</title>
	</head>

          <?php
		  error_reporting(0);

mysql_connect('localhost', 'root', 'mysql') or die(mysql_error());

mysql_select_db("cricket_analytics") or die(mysql_error());


$UID = $_GET['id'];

$query = mysql_query("SELECT * FROM fixture_master WHERE fixture_id = '$UID'")
or die(mysql_error());  

while($row = mysql_fetch_array($query)) {
echo "<p><font color=\"red\">Connected successfully</font></p>";
echo "<strong><p>Edit Fixture</p></strong>";

$first_name = $row['series_name'];
$last_name = $row['match_date'];



};

?>

<form action="updateFixture.php?ID=<?php echo "$UID" ?>" method="post">

</form>
</html>