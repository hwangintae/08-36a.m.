k<?php
$uid=$_POST['uid'];
$pwd=$_POST['pwd'];
$memlist=array(array("momo9988","assa1010"),array("super8","qwe989"),array("goldne","zaq321"));
$sw=0;
for($i=0;$i<count($memlist);$i++)
{if($memlist[$i][0]==$uid and $memlist[$i][1]==$pwd)
{$sw=1;   break;   }
}
if($sw==0)
{echo "<script>alert('아이디 또는 패스워드가 잘못 입력되었습니다.');
history.back();</script>";
exit;}
else
{ session_start();
 $_SESSION['uid']=$uid;
 $_SESSION['pwd']=$pwd;
 }
?>
<meta http-equiv='refresh'content='0; url=18_oksession.php'>
