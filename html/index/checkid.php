<?php

$id = $_GET['id'];

if($id === "") { ?> 

    <script>

    alert('아이디를 입력하세요');
    window.close();
    
    </script> 
    
    <?php 

}

$connect=mysqli_connect("localhost", "phpmyadmin", "intae", "phpmyadmin");

$checkID= "select * from member where id='".$id."'";

$result=$connect->query($checkID);

$row = $result->fetch_array(MYSQLI_ASSOC);

if($row != null) { 

?>

<script>

alert('아이디 중복');
window.close();

</script> 

<?php 
} else { 
?>

<script>

alert('사용가능합니다');
window.close();

</script>
<?php
} 
?>
