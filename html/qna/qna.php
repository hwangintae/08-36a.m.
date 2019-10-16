<!DOCTYPE HTML>
<!--
	Phantom by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Q&A</title>
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
								<h1>Q & A</h1>
							</header>

						<div class="inner">
		
							<section style="display:flex">
								<div style="flex:1; border-right:solid">
									<h2>문의 사항</h2>
										<form method="post" action="#">
											<label>이름 : <input type="text" name="name" id="name" style="width:500px; margin-bottom:50px"/></label>
											<label>이메일 : <input type="email" name="email" id="email" placeholder="필수 입력항목입니다." style="width:500px; margin-bottom:50px"/></label>
											<label>제목 : <input type="text" name="title" id="title" style="width:500px; margin-bottom:50px"/></label>
											<label>문의 내용 : <textarea name="message" id="message" placeholder="필수 입력항목입니다." style="width:500px; margin-bottom:50px"></textarea></label>

											<ul class="actions">
												<li><input type="submit" value="보내기" class="primary" /></li>
											</ul>
										</form>
								</div>

								<div style="flex:1; text-align:center">
									<div style="margin:0 auto; margin-bottom:100px; width:500px">
										<table cellpadding="0" cellspacing="0" width="352"> <tr> <td style="border:1px solid #cecece;"><a href="https://map.naver.com/?searchCoord=e551b1f4d9ccd850c401b1e8a8ff2222e415861d4c90cf7266fccb3fa9294ed1&query=7IiY7JuQ&tab=1&lng=a03851bae088233f7ce1e298454e18d7&mapMode=0&mpx=b5028b94624e7c6a596f2f502cdd4c0382dcb121f0a9d6cfec08fdb26477c7266012581a20507377e81cbd59f52adf0e1450fc7a319aafc55cd81195a53fcf2c&lat=c1cca3fafa9235a6905799bf10fc321b&dlevel=7&enc=b64&menu=location" target="_blank"><img src="http://prt.map.naver.com/mashupmap/print?key=p1564480476841_-1069603894" width="450" height="350" alt="지도 크게 보기" title="지도 크게 보기" style="vertical-align:top;"/></a></td> </tr> </table>
									</div>
									<table border="1px" style="margin:0 auto; margin-bottom:100px; width:500px">
										<tr>
											<td>
												<img src="../qna/address.png" width="30px" height="30px" style="vertical-align:middle">
												경기도 수원시
											</td>
										</tr>
										<tr>
												<td>
												<img src="../qna/call.png" width="30px" height="30px" style="vertical-align:middle">
												010-OOOO-XXXX
												</td>
										</tr>
										<tr>
												<td>
													<img src="../qna/email.png" width="30px" height="30px" style="vertical-align:middle">
													lorem@ipsum.com </br>
												</td>
										</tr>
									</table>
								</div>
							</section>
						

						</div>
					</div>
</div>
	
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
					<footer id="footer">
	<div class="inner">


							<ul class="copyright">

									<li>한이음 프로젝트 </li>
								<li>부모님의 목소리로 아이에게 책 읽어주는 AI 레코드북</li>
						
								<li>&copy; Untitled. All rights reserved</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
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
