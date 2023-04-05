<!DOCTYPE html>
<html>
<head>
	<title>Calculator</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			margin: 0;
			padding: 0;
		}
		h1 {
			text-align: center;
			margin-top: 30px;
		}
		form {
			width: 400px;
			margin: 0 auto;
			text-align: center;
		}
		label {
			display: inline-block;
			width: 150px;
			text-align: right;
			margin-bottom: 10px;
		}
		input[type="number"], select {
			padding: 5px;
			border: 1px solid #ccc;
			border-radius: 3px;
			margin-bottom: 10px;
			width: 200px;
			box-sizing: border-box;
			font-size: 16px;
		}
		input[type="submit"] {
			background-color: #4CAF50;
			color: white;
			padding: 10px 20px;
			border: none;
			border-radius: 3px;
			cursor: pointer;
			font-size: 16px;
			margin-top: 10px;
		}
		input[type="submit"]:hover {
			background-color: #3e8e41;
		}
		.result {
			margin-top: 30px;
			text-align: center;
			font-size: 24px;
		}
	</style>
</head>
<body>
	<h1>Calculator</h1>
	<form method="post" action="">
		<label for="num1">Enter the first number:</label>
		<input type="number" id="num1" name="num1"><br>
		<label for="num2">Enter the second number:</label>
		<input type="number" id="num2" name="num2"><br>
		<label for="operator">Select an operator:</label>
		<select id="operator" name="operator">
			<option value="+">+</option>
			<option value="-">-</option>
			<option value="*">*</option>
			<option value="/">/</option>
		</select><br>
		<input type="submit" value="Calculate">
	</form>
	<div class="result">
		<?php
			$num1 = $num2 = $operator = "";
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				$num1 = test_input($_POST["num1"]);
				$num2 = test_input($_POST["num2"]);
				$operator = test_input($_POST["operator"]);
				if ($operator == "+") {
					$result = $num1 + $num2;
				} elseif ($operator == "-") {
					$result = $num1 - $num2;
				} elseif ($operator == "*") {
					$result = $num1 * $num2;
				} elseif ($operator == "/") {
					if ($num2 == 0) {
						$result = "Cannot divide by zero";
					} else {
						$result = $num1 / $num2;
					}
				}
				echo "Result: " . $result;
			}
            function test_input($data) {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }
        ?>
    </div>
</body>
</html>