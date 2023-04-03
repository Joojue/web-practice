<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>수도권 날씨예보</title>
</head>
<body>
	<?php
		$city = $_POST["city"];
	
		$con = mysqli_connect("localhost", "user1", "12345", "sample");
		$sql = "select * from weather where city='$city'";
		$result = mysqli_query($con, $sql);
		$row = mysqli_fetch_array($result);
		mysqli_close($con);

		echo("
			<h2>{$row["city"]}의 날씨</h2>
			<span>최고 기온 {$row["high_temp"]} 도 </span><br>
			<span>최저 기온 {$row["low_temp"]} 도 </span><br>
			<span>비올 확률 {$row["rain_ratio"]} % </span><br>
			<span>예상 강수량 {$row["rain_mm"]} mm </span>
		");
	?>
</body>
</html>