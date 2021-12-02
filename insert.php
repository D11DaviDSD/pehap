<?php
$username = "root";
$password = "";
$database = "pehabase";

$mysqli = new mysqli("localhost", $username, $password, $database);

// Don't forget to properly escape your values before you send them to DB
// to prevent SQL injection attacks.

$field1 = $mysqli->real_escape_string($_POST['field1']);
$field2 = $mysqli->real_escape_string($_POST['field2']);
$field3 = $mysqli->real_escape_string($_POST['field3']);
$field4 = $mysqli->real_escape_string($_POST['field4']);
$field5 = $mysqli->real_escape_string($_POST['field5']);

$query = "INSERT INTO table_name (col1, col2, col3, col4, col5)
            VALUES ('{$field1}','{$field2}','{$field3}','{$field4}','{$field5}')";

$mysqli->query($query);
$mysqli->close();
?>

<html>
	<body>
		<?php 
			$username = "root"; 
			$password = ""; 
			$database = "pehabase"; 
			$mysqli = new mysqli("localhost", $username, $password, $database); 
			$query = "SELECT * FROM table_name";


			echo '<table border="0" cellspacing="2" cellpadding="2"> 
					  <tr> 
						  <td> <font face="Arial">Value1</font> </td> 
						  <td> <font face="Arial">Value2</font> </td> 
						  <td> <font face="Arial">Value3</font> </td> 
						  <td> <font face="Arial">Value4</font> </td> 
						  <td> <font face="Arial">Value5</font> </td> 
					  </tr>';

			if ($result = $mysqli->query($query))
			{
				while ($row = $result->fetch_assoc())
				{
					$field1name = $row["col1"];
					$field2name = $row["col2"];
					$field3name = $row["col3"];
					$field4name = $row["col4"];
					$field5name = $row["col5"]; 

					echo '<tr> 
							  <td>'.$field1name.'</td> 
							  <td>'.$field2name.'</td> 
							  <td>'.$field3name.'</td> 
							  <td>'.$field4name.'</td> 
							  <td>'.$field5name.'</td> 
						  </tr>';
				}
				$result->free();
			} 
		?>
	</body>
</html>