<?php

include_once ('config.php');
$mysqli = new mysqli($DB['host'], $DB['id'], $DB['pw'], $DB['db']);
if (mysqli_connect_error()) {
    exit('Connect Error (' . mysqli_connect_errno() . ') '. mysqli_connect_error());
}
// include_once ('config.php');
// $mysqli = new mysqli($DB['host'], $DB['id'], $DB['pw'], $DB['db']);
// if (mysqli_connect_error()) {
//     exit('Connect Error (' . mysqli_connect_errno() . ') '. mysqli_connect_error());
// }

extract($_POST);
//ap_member 테이블 아이디,패스워드,확인,이메일
echo $userId. '<br />';
echo $userPw. '<br />';
echo $userPwch. '<br />';

$q = "INSERT INTO member( id,pw,email ) VALUES ( '$userId', '$userPw')";
$mysqli->query( $q);
//에러가 발생시 메세지 출력 후 실행 중단
?> 