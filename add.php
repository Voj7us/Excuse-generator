<?php
$connect = mysqli_connect("localhost", "root", "", "excuses") or die("Can't connect with database");
$excuse = $connect->real_escape_string($_POST['excuse']);
$sql = "INSERT INTO `excuse`( `excuse`) VALUES ('$excuse')";
$query = mysqli_query($connect, $sql);
if (mysqli_affected_rows($connect) > 0) {
    header("Location:index.php?info");
}
?>
