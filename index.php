<!DOCTYPE html>
<html>

<head>
	<title>Form</title>
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

		.container {
			width: 80%;
			max-width: 400px;
			margin: 20px auto;
			background-color: #fff;
			padding: 20px;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
			border-radius: 5px;
		}

		.logo {
			margin: 0 auto;
			width: 200px;
		}

		img {
			/* width: 100px; */
			margin-bottom: 20px;
			border-radius: 20px;
		}

		label,
		input {
			display: block;
			margin-bottom: 10px;
		}

		input[type="text"],
		input[type="email"],
		input[type="password"] {
			width: 100%;
			padding: 10px;
			border: 1px solid #ccc;
			border-radius: 5px;
		}

		input[type="submit"] {
			background-color: #333;
			color: #fff;
			padding: 10px 20px;
			border: none;
			border-radius: 5px;
			cursor: url(./img/cursor.png), auto;
		}

		input[type="submit"]:hover {
			background-color: #555;
			cursor: url(./img/cursor-2.png), auto;
		}
	</style>
</head>

<body>
	<h2>Form</h2>
	<div class="container">
		<div class="logo">
			<img src="./img/gato.avif" alt="michi" style="width: 100%;">
		</div>

		<form action="result.php" method="post">
			<label for="user_name">Name:</label>
			<input type="text" name="user_name" required><br>

			<label for="email">Email:</label>
			<input type="email" name="email" required><br>

			<label for="pwd">Password:</label>
			<input type="password" name="pwd" required><br>

			<input type="submit" value="Register">
		</form>
	</div>

</body>

</html>