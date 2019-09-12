

<?php
  $connect=mysqli_connect("localhost", "phpmyadmin", "intae", "phpmyadmin");

  $userID=$_POST[id];
  $userPW=$_POST[pwd];
  $userName=$_POST[username];
  $nicName=$_POST[nic_name];
  $email=$_POST[email];
  $regdate=date('Y-m-d');

  $checkID="select * from member where id='{$userId}'";
  $result=$connect->query($checkID);
  if($result->num_rows >= 1) {
  ?><script>
    alert('중복된 아이디입니다.');
    location.back(-1);
    </script>
  <?php }

  if($userID == '' || $userPW == '' || $userName == '' || $nicName == '' || $email == '') {
  ?><script>
    alert('입력하지 않은 칸이 있습니다.');
    location.back(-1);
    </script>
  <?php }

  $checkEmail=filter_var($email, FILTER_VALIDATE_EMAIL);
  if($checkEmail != true) {
  ?><script>
    alert('이메일 형식이 올바르지 않습니다.');
    location.back(-1);
    </script>
  <?php }

  $query="insert into member (id, pwd, user_name, nic_name, email, regdate) values ('$userID', '$userPW', '$userName', '$nicName', '$email', '$regdate')";

  if($connect->query($query)) {
  ?><script>
    alert('가입되었습니다.');
    location.replace("../index.php");
    </script>
  <?php }
  else {
  ?><script>
    alert('가입에 실패하였습니다. 다시 시도해주십시오.');
    history.back(-2);
    </script>
  <?php }

  mysqli_close($connect);
?>
