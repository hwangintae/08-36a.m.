<!DOCTYPE HTML>
<!--
	Phantom by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>아이들에게 아름다운 동화를 직접 들려주세요</title>
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
								<a href="../index.php" class="logo">
									<span class="symbol"><img src="../index/images/logo.svg" alt="" /></span><span class="title">아이들에게 아름다운 동화를 직접 들려주세요</span>
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
								<button style="background-color:white;float:right;" onclick="location.href='../index/login.php' ">Login</button>
					 <?php } else 
					 
					 { ?>
							   <button style="background-color:white;float:right;" onclick="location.href='../index/logout.php' ">Logout</button>
					 <?php } ?>  
	   
						</div>
						<ul>
							<li><a href="../index.php">HOME</a></li>
							<li><a href="../introThis/introThis.php">사업소개</a></li>
							<li><a href="../notice/notice.php">공지사항</a></li>
							<li>
							<a href="#" onclick="return false;">동화목록</a>

							<ul id = "submenus">

							<li style="list-style:none"><a href="/contentsList/korea_children_story.php">한국 전래동화</a></li>
    							<li style="list-style:none"><a href="/contentsList/world_children_story.php">세계 전래동화</a></li>
    							<li style="list-style:none"><a href="/contentsList/aesops_fables.php">이솝우화</a></li>
                					<li style="list-style:none"><a href="/contentsList/biography.php">위인전</a></li>

				               		</ul>

							</li>
							<li><a href="../qna/qna.php">Q & A</a></li>
						</ul>
					</nav>

				<!-- Main -->
					<div id="main">
						<div class="inner">
							
							<header>
								<h1>프로젝트 소개</h1> <br />
			
								<br>

                        <div class="introduce" style="position:relative;">

   <img src="logo.jpg" style="display:block; float:left;"/>

 
<div>
   <p class="introduce_write"> 아이들에게 부모님의 목소리로 동화책을 들려주는 것은 아이들의 정서발달과 부모와 아이들 사이의 유대감을 형성하는데 큰 효과를 줍니다. 
	   아이들의 행복을 위해 이 프로젝트에 동참해주세요<span style="color:red">♥</span> </p> 
    <br>
	   <p class="introduce_write"> 부모님의 목소리로 아이에게 책 읽어주는 AI레코드북은 한이음과 함께합니다.</p>
    
</div>

</div> <!-- div class introduce-->


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
								<h2>Get in touch 이걸 써 말아 으음..</h2>
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


		<!-- Scripts -->
			<script src="../js/index/jquery.min.js"></script>
			<script src="../js/index/browser.min.js"></script>
			<script src="../js/index/breakpoints.min.js"></script>
			<script src="../js/index/util.js"></script>
			<script src="../js/index/main.js"></script>

	</body>
</html>
`
