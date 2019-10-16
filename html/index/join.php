

<?php
  $connect=mysqli_connect("localhost", "phpmyadmin", "intae", "phpmyadmin");

  $userID=$_POST['id'];
  $userPW=$_POST['pwd'];
  $userName=$_POST['username'];
  $nicName=$_POST['nic_name'];
  $email=$_POST['email'];
  $regdate=date('Y-m-d');

  $query="insert into member values ('$userID', '$userPW', '$userName', '$nicName', '$email', '$regdate')";

  if($connect->query($query)) {
  ?>
  
  <script>
    alert('가입되었습니다.');
    location.replace("login.php");
    </script>

  <?php }

  mysqli_close($connect);

  ?>
