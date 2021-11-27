<?php?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Dynamic Chess Board</title>
	<style>
		table{
			border-spacing: 0;
			display: flex;
			justify-content: center;
			align-items: center;
		}
		td{
			border: 1px solid black;
			padding: 20px;
		}
		.bg{
			background: black;
		}
		input{
			text-align: center;
			display: block;
			font-size: 25px;
			margin: 5px auto;
		}
		input[type='submit']{
			 border: none;
			 color: #090909;
			 padding: 0.7em 1.7em;
			 font-size: 18px;
			 border-radius: 0.5em;
			 background: #e8e8e8;
			 border: 1px solid #e8e8e8;
			 transition: all .3s;
			 box-shadow: 6px 6px 12px #c5c5c5,
			             -6px -6px 12px #ffffff;
		}
		input[type='submit']:active {
		 box-shadow: 4px 4px 12px #c5c5c5,
		             -4px -4px 12px #ffffff;
}
		input[type='submit']:hover{
			border: 1px solid white
		}
	</style>
</head>
<body>
	<form method="POST" action="">
		<input type="number" name="cb" placeholder="Enter your Input">
		<input type="submit" name="submit" value="Generate">
	</form>

	<table>
		<?php
			if (isset($_POST['submit'])) {
				$data = $_POST['cb'];

				for ($row=1; $row <= $data ; $row++) { 
					echo "<tr>";

					for ($col=1; $col <= $data ; $col++) { 
						if (($row + $col) % 2 == 0) {
							echo "<td class='bg'></td>";
						}else{
							echo "<td></td>";
						}
					}

					echo "</tr>";
				}
			}
		?>
	</table>
</body>
</html>