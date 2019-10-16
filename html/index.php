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
		<link rel="stylesheet" href="css/index/main.css" />
		<noscript><link rel="stylesheet" href="css/index/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="inner">

							<!-- Logo -->
								<a href="index.php" class="logo">
									<span class="symbol"><img src="index/images/logo.svg" alt="" /></span><span class="title">아이들에게 아름다운 동화를 직접 들려주세요</span>

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
						<div style="margin-bottom:80px;">
						<h2 style="display:inline;">Menu</h2>

					<?php

			 session_start();

			  if(!isset($_SESSION['nic_name']) || !isset($_SESSION['id'])) {

				?>
 						<button style="background-color:white;float:right;" onclick="location.href='index/login.php' ">Login</button>

			  <?php } else { ?>

<div>
			            <button style="display:block; background-color:white; float:left" onclick="location.href='index/mypage.php' ">mypage</button>
						<button style="display:block; background-color:white; float:left" onclick="location.href='index/logout.php' ">Logout</button>
						</div>
			  <?php } ?>

						</div>

						<ul>
							<li><a href="index.php">HOME</a></li>
							<li><a href="introThis/introThis.php">사업소개</a></li>
							<li><a href="notice/notice.php">공지사항</a></li>
							<li>
							<a href="#" onclick="return false;">동화목록</a>

							<ul id = "submenus">

							<li style="list-style:none"><a href="/contentsList/korea_children_story.php">한국 전래동화</a></li>
    							<li style="list-style:none"><a href="/contentsList/world_children_story.php">세계 전래동화</a></li>
    							<li style="list-style:none"><a href="/contentsList/aesops_fables.php">이솝우화</a></li>
                					<li style="list-style:none"><a href="/contentsList/biography.php">위인전</a></li>

				               		</ul>

							</li>


							<li><a href="qna/qna.php">Q & A</a></li>
						</ul>
					</nav>

				<!-- Main -->
					<div id="main">
						<div class="inner">
							<header>

<img src="index/images/mainpic.jpg" class="main_img" style="opacity: 0.8"/>

							</header>

							<section class="tiles">

								<article class="style1">
								 		<span class="image">
                    	<img src="index/images/pic01.jpg"  alt="" />
					 					</span>
                    <a href="/contentsList/korea_children_story.php">
										<h2>한국 전래동화</h2>
										<div class="content">
											<p>한국에서 전해내려오는 아름다운 동화를 통해 아이들에게 상상력을 심어주세요</p>
										</div>
									</a>
								</article>


								<article class="style2">
									<span class="image">
										<img src="index/images/pic02.jpg" alt="" />
									</span>
									<a href="/contentsList/world_children_story.php">
										<h2>세계 전래동화</h2>
										<div class="content">
											<p>세계에서 전해내려오는 아름다운 이야기를 아이들에게 들려주세요.</p>
										</div>
									</a>
								</article>
								<article class="style3">
									<span class="image">
										<img src="index/images/pic03.jpg" alt="" />
									</span>
									<a href="/contentsList/aesops_fables.php">
										<h2>이솝우화</h2>
										<div class="content">
											<p>아이들에게 재밌는 비유를 통해 교훈을 알려주세요.</p>
										</div>
									</a>
								</article>

<article class="style4">
									<span class="image">
										<img src="index/images/pic04.jpg" alt="" />
									</span>
									<a href="/contentsList/biography.php">
										<h2>위인전</h2>
										<div class="content">
											<p>위인들의 이야기를 통해 아이들이 바른 생각과 꿈과 희망을 갖게해주세요.</p>
										</div>
									</a>
								</article>


								<article class="style5">
									<span class="image">
										<img src="index/images/pic05.jpg" alt="" />
									</span>
									<a href="#">
										<h2>준비중입니다^^</h2>
									</a>
								</article>

								<article class="style6">
									<span class="image">
										<img src="index/images/pic06.jpg" alt="" />
									</span>
									<a href="#">
										<h2>준비중입니다^^</h2>
										</a>
								</article>


							</section>
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
			<script src="js/index/jquery.min.js"></script>
			<script src="js/index/browser.min.js"></script>
			<script src="js/index/breakpoints.min.js"></script>
			<script src="js/index/util.js"></script>
			<script src="js/index/main.js"></script>

	</body>
</html>
