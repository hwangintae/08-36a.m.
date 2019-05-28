<?php
$connect=@mysql_connect("localhost","root","qwe123");
mysql_select_db("sample",$connect);
$str="create table member(irum varchar(10) not null,id varchar(13) not null,nicname varchar(10) not null,email varchar(30) not null,pwd  varchar(15) not null, regdate date,primary key(id))";
$qry=mysql_query($str,$connect);
if(!$qry)
     die("테이블 작성실패");
echo "테이블이 생성되었습니다.";
mysql_close($connect);
?>
