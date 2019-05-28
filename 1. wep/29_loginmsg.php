<style>
p{color:#ccaa11;font-size:1.2em}
</style>
<?php
session_start();
if(!isset($_SESSION['nicname']) or !isset($_SESSION['regdate']))
{
	echo "<meta http-equiv='refresh' content='0;url=29_login.html'>";
	exit;
}

	$nicname=$_SESSION['nicname'];
	$regdate=$_SESSION['regdate'];
	echo "<p>안녕하세요 $nicname 님</p>";
	echo "회원님은 $regdate 일에 가입하셨습니다. woodpia에서 좋은시간 보내세요";
?>
