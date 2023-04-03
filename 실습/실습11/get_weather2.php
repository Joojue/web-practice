<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>수도권 날씨예보</title>
</head>
<body>
	<?php
		$max = $_POST["max_temp"];
		$min = $_POST["min_temp"];
	
		$con = mysqli_connect("localhost", "user1", "12345", "sample");
		$sql = "select * from weather where low_temp <= $max and high_temp >= $min";
		$result = mysqli_query($con, $sql);
		$count = mysqli_num_rows($result);

		for ($i = 0; $i < $count; $i++) {
			mysqli_data_seek($result, $i);
			$row = mysqli_fetch_array($result);

			echo("
				<h3>{$row["city"]}의 날씨</h3>
				<span>최고 기온 {$row["high_temp"]} 도 </span><br>
				<span>최저 기온 {$row["low_temp"]} 도 </span><br>
			");
		}

		mysqli_free_result($result);
		mysqli_close($con);
	?>
</body>
</html>