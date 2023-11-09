<?php
// connect data base
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecom1";

$conn = new mysqli($servername, $username, $password, $dbname);

// check connection
if ($conn->connect_error) {
	die("there is a problem: " . $conn->connect_error);
}

// take info
$user_name = $_POST['user_name'];
$email = $_POST['email'];
$pwd = $_POST['pwd'];

// insert data
$insert_sql = "INSERT INTO user (user_name, email, pwd) VALUES ('$user_name', '$email', '$pwd')";

if ($conn->query($insert_sql) === TRUE) {
	echo "nice";
} else {
	echo "there is a problem: " . $conn->error;
}
?>


<?php

// check database and create array
$select_sql = "SELECT id, user_name, email, pwd FROM user";
$result = $conn->query($select_sql);

$data = array();

if ($result->num_rows > 0) {
	while ($row = $result->fetch_assoc()) {
		$data[] = $row;
	}
}

// close connection 
$conn->close();

?>


<!DOCTYPE html>
<html>

<head>
	<title>result</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			background-color: #f5f5f5;
			margin: 0;
			padding: 0;
			cursor: url(./img/cursor.png), auto;
		}

		body:active {
			cursor: url(./img/cursor-2.png), auto;
		}

		h2 {
			background-color: #333;
			color: #fff;
			text-align: center;
			padding: 20px;
		}

		table {
			width: 80%;
			margin: 20px auto;
			border-collapse: collapse;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
			background-color: #fff;
		}

		table th,
		table td {
			padding: 12px 15px;
			text-align: left;
		}

		table th {
			background-color: #333;
			color: #fff;
		}

		table tr:nth-child(even) {
			background-color: #f2f2f2;
		}

		a {
			background-color: #333;
			text-decoration: none;
			color: #fff;
			padding: 10px 20px;
			border: none;
			border-radius: 5px;
			cursor: url(./img/cursor.png), auto;
		}

		a:active {
			background-color: #555;
			cursor: url(./img/cursor-2.png), auto;
		}
	</style>
</head>

<body>
	<h2>DataBase Table</h2>

	<a href="./index.php">Return</a>

	<table>
		<tr>
			<th>id</th>
			<th>name</th>
			<th>email</th>
			<th>password</th>
		</tr>
		<?php foreach ($data as $row) { ?>
			<tr>
				<td>
					<?php echo $row['id']; ?>
				</td>
				<td><?php echo $row['user_name']; ?></td>
				<td><?php echo $row['email']; ?></td>
				<td><?php echo $row['pwd']; ?></td>
			</tr>
		<?php } ?>
	</table>
</body>

</html>