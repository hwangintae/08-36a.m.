
<!DOCTYPE HTML>
<!--
	Phantom by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>VIEW</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="../css/index/main.css" />
		<noscript><link rel="stylesheet" href="../css/index/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
		<!-- Wrapper -->

		<?php 

session_start(); 
				

$voice_name_count = $_GET['voice_name']; 
$voice_name = $_GET['voice_name'];   

$idxForCount = strpos($voice_name_count , '_'); 

$voice_name_count = substr($voice_name_count , 0 , $idxForCount); //개수 확인할 용도랑 제목 표시 


$conn = mysqli_connect("localhost", "phpmyadmin", "intae","phpmyadmin");
$sql = "select * from voice where voice_name='".$voice_name."'";  // 하나의 값을 가져옴

$sql2 = "select count(*) from voice where voice_name like '".$voice_name_count."%'";  // 하나의 값을 가져옴


$result = $conn-> query($sql);
$result2 = $conn-> query($sql2);

$row = $result->fetch_array(MYSQLI_ASSOC);

$row2 = $result2->fetch_array(MYSQLI_NUM);

?>
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="inner">

							<!-- Logo -->
								<a href="../index.php" class="logo">
									<span class="symbol"><img src="../index/images/logo.svg" alt="" /></span><span class="title"> <?php echo $voice_name_count ?>  <!--이건 제목용 --> 
									 </span>
								</a>
					
							<!-- Nav -->
								<nav>
									<ul>
										<li><a href="#menu">Menu</a></li>
									</ul>
								</nav>

						</div>
					</header>

				<!-- Menu -->
	 					
	<nav id="menu">
						<div style="margin-bottom:60px;">
						<h2 style="display:inline;">Menu</h2>

						<?php 
					
						
					 if(!isset($_SESSION['nic_name']) || !isset($_SESSION['id'])) {
						 
					   ?>
								<button style="background-color:white;float:right;" onclick="location.href='../index/login.php' ">Login</button>
					 <?php } else 
					 
					 { ?>
				
				<div>
			            <button style="display:block; background-color:white; float:left" onclick="location.href='mypage.php' ">mypage</button>
						<button style="display:block; background-color:white; float:left" onclick="location.href='logout.php' ">Logout</button>
						</div>
					 <?php } ?>  
	   
									</div>

						<ul>
							<li><a href="../index.php">Home</a></li>
							<li><a href="../introThis/introThis.php">사업소개</a></li>
							<li><a href="../notice/notice.php">공지사항</a></li>
							<li><a href="../contentsList/contentsList.php">동화목록</a></li>
							<li><a href="../qna/qna.php">Q&A</a></li>
						</ul>
					</nav>

					

					<!-- Main -->
					<div id="main">
						<div class="inner">
							<header>
						
                        
						

<html>
<head>

<meta charset = 'utf-8' /> 
<title>board</title>
</head>

<body>

<?php
$id = $_SESSION['id'];


if($row != null) { // 

?>
 
<audio id="audio" autoplay="autoplay">

<source src="../contentsList/resource/<?php echo $id ?>/voice/<?php echo $voice_name ?>" type="audio/mp3" />

</audio>


<video id="video" style="width: 100% ; max-width:100%; height:100%; max-height:500px" controls="controls" muted = "muted" autoplay="autoplay">  <!--음소거-->

<source src="../contentsList/resource/video/<?php echo $row['video_split'] ?>" type="video/mp4" /> <!--확장자 불러온것--> 

</video> 

<div style="max-width:100%">  


</div> 


<div style="max-width: 100%">

<input type="button" value="이전" a href="#" style="float : left" onclick="checkPrev()">

<input type="button" value="다음" a href="#" style="float : right" onclick="checkNext()">

<?php 
$first = strpos($row['voice_name'] , '_') ;  // 7 
$second = strrpos($row['voice_name'] , '_') ;  // 9 
$minus = (int)$second - (int)$first ; 

$value = substr($row['voice_name'] , $first+1 , $minus-1 );  //value 에는 동화 숫자값 있음
// 자바스크립트에서 사용하려면 script 내에 echo 변수로 받아줘야함 
//echo $row2[0];

?>

<script>

var voice_name = "<?php echo $row['voice_name'] ?>"
var voice_name_count = "<?php echo $voice_name_count ?>"
var id = "<?php echo $id ?>"
var last = '<?php echo $row2[0] ?>';

var value ="<?php echo $value ?>";
value *= 1 ; //숫자로 형변환
last *=1 ; 


function checkPrev() {

value = value - 1 ; 

if(value == 0) {
	alert('해당 동화의 첫 페이지 입니다.');
	value = 1 ; 
}

else {

location.href='mypageView.php?voice_name='+voice_name_count+'_'+value+'_'+id + '.mp3'; 

  }
}


function checkNext() {

if(value == last) {
	alert('해당 동화의 마지막 페이지 입니다.');

}

else {

value = value+1; 

location.href='mypageView.php?voice_name='+voice_name_count+'_'+value+'_'+id + '.mp3'; 


}

}

</script> 



</div>




<?php  
}

echo " </body></html> ";  

?> 

							</header>
							
						</div>
					</div>




				<!-- Footer -->
				
				




				<footer id="footer">
						<div class="inner">
							<ul class="copyright">
							<li>한이음 프로젝트 </li>
								<li>부모님의 목소리로 아이에게 책 읽어주는 AI 레코드북</li>
								<li>Team : 0836am </li>
								<li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
							</ul>
						</div>
		<!-- --> 				
	
						<div class="inner"> 
	
								<ul class="copyright" style="display:block; margin-top : -20px">
								   <li> 멘토 : 박철훈 </li>
								   <li> 팀장: 황인태</li>
								   <li> 팀원: 이예호, 정석원, 한수화, 강태우</li>
								</ul>
							
							</div>
						
							<div class="inner"> 
	
									<ul class="copyright" style="display:block; margin-top : -20px">
										<li > 대표전화 : 010-1111-1111</li>
									   <li> 메일 : xodn9500@hanmail.net</li>
								
									</ul>
								
								</div>
						
					</footer>



<!--
							<section>
								<h2>Get in touch</h2>
								<form method="post" action="#">
									<div class="fields">
										<div class="field half">
											<input type="text" name="name" id="name" placeholder="Name" />
										</div>
										<div class="field half">
											<input type="email" name="email" id="email" placeholder="Email" />
										</div>
										<div class="field">
											<textarea name="message" id="message" placeholder="Message"></textarea>
										</div>
									</div>
									<ul class="actions">
										<li><input type="submit" value="Send" class="primary" /></li>
									</ul>
								</form>
							</section>
	
-->
<!--

							<section>
								<h2>Follow</h2>
								<ul class="icons">
									<li><a href="#" class="icon brands style2 fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="#" class="icon brands style2 fa-facebook-f"><span class="label">Facebook</span></a></li>
									<li><a href="#" class="icon brands style2 fa-instagram"><span class="label">Instagram</span></a></li>
									<li><a href="#" class="icon brands style2 fa-dribbble"><span class="label">Dribbble</span></a></li>
									<li><a href="#" class="icon brands style2 fa-github"><span class="label">GitHub</span></a></li>
									<li><a href="#" class="icon brands style2 fa-500px"><span class="label">500px</span></a></li>
									<li><a href="#" class="icon solid style2 fa-phone"><span class="label">Phone</span></a></li>
									<li><a href="#" class="icon solid style2 fa-envelope"><span class="label">Email</span></a></li>
								</ul>
							</section>
	
-->


		<!-- Scripts -->
			<script src="../js/index/jquery.min.js"></script>
			<script src="../js/index/browser.min.js"></script>
			<script src="../js/index/breakpoints.min.js"></script>
			<script src="../js/index/util.js"></script>
			<script src="../js/index/main.js"></script>

	</body>
</html>
