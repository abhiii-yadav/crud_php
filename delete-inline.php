<?php 

$stu_id = $_GET['id'];//variable $stu_id

include 'config.php';
$sql = "DELETE FROM student WHERE sid = {$stu_id}";
$result = mysqli_query($conn, $sql) or die("query unsuccessful");

header("Location: http://localhost:8080/crud/index.php");//redirect

mysql_close($conn);

?>