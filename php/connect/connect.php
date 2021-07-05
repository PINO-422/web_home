<?php
$host = "localhost";
$user = "jjh100";
$pw = "gud!1276055450";
$dbName = "jjh100";
$dbConnect = new mysqli($host, $user,$pw, $dbName);
$dbConnect -> set_charset("utf8");

//만약 접속에 애러가 없으면 출력해라
if(mysqli_connect_errno()){
    echo "database connect false";
}else{
    // echo "database connect true";
}
?>