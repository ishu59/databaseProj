<html>
	<head>
		<title>
			Fixtures
	</head>
	<body>
		<b><a href=addFixture.html>Add a New Fixture </a></b>
		<?php
			// First we will be Generating the SQL :
			$sql = "select * from fixture_master";
			
			// Then We will be Creating the Connection
			$servername = "localhost";
			$username = "root";
			$password = "mysql";
			$database = "cricket_analytics";
			$conn = new mysqli($servername, $username, $password, $database);
			// Now we need to Check the Connection
			if ($conn->connect_error) {
			    die("Connection failed: " . $conn->connect_error);
			} 
			echo "<p><font color=\"blue\">Connected successfully</font></p>";
         
			// Now run the SQL
			$result = $conn->query($sql);
			if ($result)
			{
				echo "<table border=1px>";
				while($row = $result->fetch_assoc())
				{
					echo "<tr>";
				    echo '<td><b><font color="#663234"><a href="editFixture.php?id=' . $row['ID'] . '">Edit </a></font></b></td>';
					foreach($row as $key=>$value)
					{
						echo "<td>$value</td>";
					}
						echo "</tr>";
				}
				echo "</table>";
				echo "<br>";
				echo "<br>";
			}
			
		?>
	</body>
</html>