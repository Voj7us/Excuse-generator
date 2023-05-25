<?php
$connect = mysqli_connect("localhost", "root", "", "excuses") or die("Can't connect with database");


$sql1 = "SELECT COUNT(*) as total FROM excuse";
$result1 = mysqli_query($connect, $sql1) or die("result1");
$row1 = mysqli_fetch_assoc($result1) or die("row1");
$excuseAmmount = $row1['total'];


$randomId = random_int(1, $excuseAmmount)  or die("random");


$sql2 = "SELECT excuse FROM excuse WHERE id=$randomId";
$result2 = mysqli_query($connect, $sql2)  or die("result2");


while($row2 = mysqli_fetch_assoc($result2)){
    echo $row2['excuse'];
}

mysqli_free_result($result1);
mysqli_free_result($result2);
mysqli_close($connect);
