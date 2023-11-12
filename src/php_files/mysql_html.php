<?php
$con = mysqli_connect("127.0.0.1:3306", "root", "nimda013584@", "recommend_info");

if($con->connect_error) echo "<h2>접속에 실패하였습니다.<h2>";
else echo "<h2>접속에 성공하였습니다.<h2>";
?>
