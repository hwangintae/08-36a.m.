
<?php 

error_reporting(E_ALL);
ini_set("display_errors" , 1); 

session_start();  //세션 실행 


#DB 연결
$mysqli = mysqli_connect("localhost", "phpmyadmin" , "intae" , "phpmyadmin") or die("db connect error");


# 값 받아오기 
$id = $_POST['loginID'];
$pw = $_POST['loginPW'];


if( !isset($id) || !isset($pw) || $id == NULL || $pw == NULL) { ?> 

        <script>
                alert('아이디 또는 비밀번호를 입력해주세요');

                location.replace("login.php");
                
</script> 


<?php  } 


$sql = "select * from member where id = '$id' and pwd = '$pw'"; 
         # id pwd user_name nic_name email. regdate 

$result = $mysqli-> query($sql);

        $row = $result->fetch_array(MYSQLI_ASSOC); // 넘어온 결과를 한 행씩 패치해서 $row라는 배열에 담는다.
 
    if ($row != null) {                                                 //만약 배열에 존재한다면

        $_SESSION['id'] = $id; 
        $_SESSION['nic_name'] = $row["nic_name"];  //컬럼명으로 값 찾기
        
        ?>
 
<script>
          var value = '<?=$row["nic_name"]?>'+'님 반갑습니다^^';
             alert(value); 
          location.replace("../index.php");

                </script>

                <?php

         } else {
      ?>

<script>
   alert('아이디 또는 비밀번호가 잘못되었습니다.');
   history.back(); 
   </script>
      


<?php
        }
?>
