<?php
$irum=$_POST['irum'];
$id=$_POST['id'];
$nicname=$_POST['nicname'];
$email=$_POST['email'];
$pwd=$_POST['pwd'];
$regdate=$_POST['regdate'];
$connect=@mysql_connect("localhost","root","qwe123");
mysql_select_db("sample",$connect);
mysql_query('set names utf8');
$inrec="insert into member values('$irum','$id','$nicname','$email','$pwd','$regdate')";
echo $inrec; 
$info=mysql_query($inrec,$connect);
if(!$info) 
    die("회원가입실패");
echo "회원가입이 완료되었습니다.";
mysql_close($connect);
?>
<a href="29_login.html">처음으로 이동</a>
