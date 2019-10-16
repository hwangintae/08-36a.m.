<!DOCTYPE HTML>
<!--
	Phantom by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>MY PAGE</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="../css/index/main.css" />
		<noscript><link rel="stylesheet" href="../css/index/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="inner">

							<!-- Logo -->
								<a href="mypage.php" class="logo">
			<span class="title"><h1>MY PAGE</h1></span>
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
					
			 session_start(); 
			 
			  if(!isset($_SESSION['nic_name']) || !isset($_SESSION['id'])) {
				 
				?>
 						<button style="background-color:white;float:right;" onclick="location.href='/login.php' ">Login</button>
			  <?php } else 
			  
			  { ?>
	
	<div>
			            <button style="display:block; background-color:white; float:left" onclick="location.href='mypage.php' ">mypage</button>
						<button style="display:block; background-color:white; float:left" onclick="location.href='logout.php' ">Logout</button>
						</div>
			  <?php } ?>  

						</div>
						<ul>
							<li><a href="../index.php">HOME</a></li>
							<li><a href="../introThis/introThis.php">사업소개</a></li>
							<li><a href="../notice/notice.php">공지사항</a></li>
							<li>
							<a href="../contentsList/contentsList.php">동화목록</a>
							
							<ul id = "submenus">
						
							
							<li style="list-style:none"><a href="../contentsList/korea_children_story.php">한국 전래동화</a></li>
    							<li style="list-style:none"><a href="../contentsList/world_children_story.php">세계 전래동화</a></li>
    							<li style="list-style:none"><a href="../contentsList/aesops_fables.php">이솝우화</a></li>
                					<li style="list-style:none"><a href="../contentsList/biography.php">위인전</a></li>

				         
                
				               </ul>

							</li>


							<li><a href="../qna/qna.php">Q & A</a></li>
						</ul>
					</nav>

				<!-- Main -->
					<div id="main">
						<div class="inner">
							<header>
						
          <h2> 녹음한 동화 목록 </h2>  


		  <?php

error_reporting(E_ALL);
ini_set("display_errors" , 1);

$conn = mysqli_connect("localhost", "phpmyadmin", "intae","phpmyadmin");

//일단 member 1 로 하기
$sql = "select distinct video_name from video where video_split in (select video_split from voice where id = 'member1')";

echo "
<html>
<head>
<meta charset = 'utf-8' />
<title>board</title>
</head>
<body>
<table border='1px' style=''>
<tr>
<td>동화이름</td>
</tr>" ;

$result = $conn-> query($sql);
$id = $_SESSION['id']; 

while($row = $result->fetch_array(MYSQLI_NUM)) {

	echo "<tr><td>";

	echo "<a href='mypageView.php?voice_name=$row[0]_1_$id.mp3'> $row[0] </a>" ;

	echo "</td></tr>";
   

}


echo "</table>
</body>
</html> ";


?>

<p style="color:red"> 
    
	
    분할영상이 끝나면 약 2~3초 뒤에 자동으로 다음 분할로 넘어가게 하기 
    녹음 문제 해결하기 위해 ssl 적용 필요 
	
	회원가입 시 자동으로 디렉터리 생성하기 
	그 외 추가적인 조정 필요
</p> 

							</header>


				</div>
					</div>

				<!-- Footer -->
					<footer id="footer">
						<div class="inner">
							<section>
								
<!-- QnA로 이동할 부분 
						 		<h2>Get in touch </h2>
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

							<ul class="copyright">
							<li>한이음 프로젝트 </li>
								<li>부모님의 목소리로 아이에게 책 읽어주는 AI 레코드북</li>
								
								<li>&copy; Untitled. All rights reserved</li>
								<li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
							</ul>
						</div>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="../js/index/jquery.min.js"></script>
			<script src="../js/index/browser.min.js"></script>
			<script src="../js/index/breakpoints.min.js"></script>
			<script src="../js/index/util.js"></script>
			<script src="../js/index/main.js"></script>

	</body>
</html>
