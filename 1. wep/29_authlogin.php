<?php
$id=$_POST['id'];
$pwd=$_POST['pwd'];
$connect=@mysql_connect("localhost","root","qwe123");
mysql_select_db("sample",$connect);
mysql_query('set names utf8');
$sqlrec="select * from member where id='$id' and pwd='$pwd'";
$info=mysql_query($sqlrec,$connect);
if(!$info)
{echo"<script>alert('아이디 또는 비밀번호가 존재하지 않습니다.');history.back();</script>";
 exit;
}
while($i=mysql_fetch_array($info))
     { $b=$i[nicname];
        $c=$i[regdate];  }
session_start();
$_SESSION['nicname']=$b;
$_SESSION['regdate']=$c;
?>
<meta http-equiv='refresh' content='0;url=29_loginmsg.php'>
