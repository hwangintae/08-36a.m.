<!DOCTYPE HTML>
<!--
	Phantom by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>

		<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
		<title>Login</title>
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
								<button style="background-color:white;float:right;" onclick="location.href='index/login.php' ">Login</button>
					 <?php } else

					 { ?>
							   <button style="background-color:white;float:right;" onclick="location.href='index/logout.php' ">Logout</button>
					 <?php } ?>


						</div>
						<ul>
							<li><a href="../index.php">Home</a></li>
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
							<li><a href="../qna/qna.php">Q&A</a></li>
						</ul>
					</nav>

				<!-- Main -->
					<div id="main">
						<div class="inner">
							<header>
								<h1>로그인</h1>
							</header>

							<body>
								<div style="height:auto; width:60%; margin-left:auto; margin-right:auto; text-align:center;">

									<form method="post" action="loginCheck.php">

										<div style="margin-bottom:2em; text-align:left;">
											<label>ID : <input type="text" name = "loginID" /></label>
											<label>PW : <input type="password" name="loginPW" /></label>
										</div>
										<input type ="submit" name = "Register" value = "로그인"/>

									</form>



								<input type="button" name = "Register" value = "회원가입" onclick = "location.href='register.php'"; />
								</div>
							</body>
						</div>
					</div>

					<!-- Footer -->
					<footer id="footer">
						<div class="inner">
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
