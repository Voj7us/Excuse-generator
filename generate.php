<?php
$connect = mysqli_connect("localhost", "root", "", "excuses") or die("Can't connect with database");

// Pobierz ilość wierszy z tabeli "excuse"
$sql1 = "SELECT COUNT(*) as total FROM excuse";
$result1 = mysqli_query($connect, $sql1) or die("result1");
$row1 = mysqli_fetch_assoc($result1) or die("row1");
$excuseAmmount = $row1['total'];

// Wylosuj losowy numer ID z tabeli "excuse"
$randomId = random_int(1, $excuseAmmount)  or die("random");

// Pobierz losowe wytłumaczenie na podstawie wylosowanego numeru ID
$sql2 = "SELECT excuse FROM excuse WHERE id=$randomId";
$result2 = mysqli_query($connect, $sql2)  or die("result2");

// Wyświetl losowe wytłumaczenie
while($row2 = mysqli_fetch_assoc($result2)){
    echo $row2['excuse'];
}

// Zwolnij wyniki i zamknij połączenie
mysqli_free_result($result1);
mysqli_free_result($result2);
mysqli_close($connect);
