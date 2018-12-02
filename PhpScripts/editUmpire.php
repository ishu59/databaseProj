<html>
	<head>
		<title>
			Umpire
		</title>
	</head>

          <?php
		  error_reporting(0);

mysql_connect('localhost', 'root', 'mysql') or die(mysql_error());

mysql_select_db("cricket_analytics") or die(mysql_error());


$UID = $_GET['id'];

$query = mysql_query("SELECT * FROM match_umpire WHERE umpire_id = '$UID'")
or die(mysql_error());  

while($row = mysql_fetch_array($query)) {
echo "<p><font color=\"red\">Connected successfully</font></p>";
echo "<strong><p>Edit Umpire</p></strong>";

$first_name = $row['first_name'];
$last_name = $row['last_name'];



};

?>

<form action="updateUmpire.php?ID=<?php echo "$UID" ?>" method="post">

</form>
</html>