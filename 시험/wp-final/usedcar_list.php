<!DOCTYPE html>
<html>
<head>
    <meta charset = 'utf-8'>
    <title>중고차 검색 결과</title>
    <style>
        table{
            border : 2px solid black;
            border-collapse : collapse;
            text-align : center;}
        th{
            background : yellow;
            border : 1px solid black;
            width : 200px;
            font-size : 20px;}
        td{
            border : 1px solid black;
            width : 100px;
            font-size : 20px;}
        span{
            font-size : 20px;}

    </style>
</head>
<body>
    <?php
        $carname=$_POST["car"];
        $carcolor = $_POST["color"];
        $range = $_POST["array"];

        $con = mysqli_connect("localhost","root","","sample");
        if($carname=="0"){
            if($carcolor=="0"){
                $sql = "select * from usedcar order by $range";
            }
            elseif ($carcolor=="black") {
                $sql = "select * from usedcar where color='black' order by $range";
            }
            elseif ($carcolor=="grey") {
                $sql = "select * from usedcar where color='grey' order by $range";
            }
            elseif ($carcolor=="white") {
                $sql = "select * from usedcar where color='white' order by $range";
            }
            elseif ($carcolor=="etc") {
                $sql = "select * from usedcar where color!='black' and color!='grey' and color!='white' order by $range";
            }
        }
        if($carname=="그랜저"){
            if($carcolor=="0"){
                $sql = "select * from usedcar where model_name='Grandeur'order by $range";
            }
            elseif ($carcolor=="black") {
                $sql = "select * from usedcar where model_name='Grandeur' and color='black' order by $range";
            }
            elseif ($carcolor=="grey") {
                $sql = "select * from usedcar where model_name='Grandeur' and color='grey' order by $range";
            }
            elseif ($carcolor=="white") {
                $sql = "select * from usedcar where model_name='Grandeur' and color='white' order by $range";
            }
            elseif ($carcolor=="etc") {
                $sql = "select * from usedcar where model_name='Grandeur' and color!='black' and color!='grey' and color!='white' order by $range";
            }
        }
        if($carname=="소나타"){
            if($carcolor=="0"){
                $sql = "select * from usedcar where model_name='Sonata'order by $range";
            }
            elseif ($carcolor=="black") {
                $sql = "select * from usedcar where model_name='Sonata' and color='black' order by $range";
            }
            elseif ($carcolor=="grey") {
                $sql = "select * from usedcar where model_name='Sonata' and color='grey' order by $range";
            }
            elseif ($carcolor=="white") {
                $sql = "select * from usedcar where model_name='Sonata' and color='white' order by $range";
            }
            elseif ($carcolor=="etc") {
                $sql = "select * from usedcar where model_name='Sonata' and color!='black' and color!='grey' and color!='white' order by $range";
            }
        }
        if($carname=="아반떼"){
            if($carcolor=="0"){
                $sql = "select * from usedcar where model_name='Avante'order by $range";
            }
            elseif ($carcolor=="black") {
                $sql = "select * from usedcar where model_name='Avante' and color='black' order by $range";
            }
            elseif ($carcolor=="grey") {
                $sql = "select * from usedcar where model_name='Avante' and color='grey' order by $range";
            }
            elseif ($carcolor=="white") {
                $sql = "select * from usedcar where model_name='Avante' and color='white' order by $range";
            }
            elseif ($carcolor=="etc") {
                $sql = "select * from usedcar where model_name='Avante' and color!='black' and color!='grey' and color!='white' order by $range";
            }
        }



        $con = mysqli_connect("localhost","root","","sample");
        $result = mysqli_query($con,$sql);
        $count = mysqli_num_rows($result);

	echo "<h2>중고차 검색 결과 : ".$count."대</h2><br>";

        echo "<table border=1>";
        echo "<tr><th>번호</th><th>모델</th><th>연식</th><th>주행 거리</th><th>색상</th><th>가격</th></tr>";
        $i = 1;

        while($row = mysqli_fetch_array($result)){
            echo'<tr><td>'.$i++.'</td><td>'.$row['model_name'].'</td><td>'.$row['make_year'].'</td><td align=right>'.$row['mileage'].'km</td><td>'.$row['color'].'</td><td align=right>'.$row['price'].'만원</td></tr>';
        }
        echo "</table>";
    ?>
    <?=$row?>
</body>
</html>