<?php
session_start();
if(!isset($_SESSION['uid'] or !isset($_SESSION['pwd']))
{
echo "<meta http-equiv='refresh' content='0;url=18_login.html'>";
}
else
{
$userid=$_SESSION['uid'];
$password=$_SESSION['pwd'];
echo "<p>안녕하세요 $userid 님</p> 귀하의 비밀번호 $password 는 보안에 취약하므로 변경해주시기 바랍니다. ";
}
?>
