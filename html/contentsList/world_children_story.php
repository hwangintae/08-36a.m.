
<!DOCTYPE HTML>
<!--
	Phantom by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>한국 전래 동화</title>
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
				
				<div>
			            <button style="display:block; background-color:white; float:left" onclick="location.href='../index/mypage.php' ">mypage</button>
						<button style="display:block; background-color:white; float:left" onclick="location.href='../index/logout.php' ">Logout</button>
						</div>
					 <?php } ?>

									</div>

						<ul>
							<li><a href="../index.php">Home</a></li>
							<li><a href="../introThis/introThis.php">사업소개</a></li>
							<li><a href="notice.php">공지사항</a></li>
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
								<h1>세계 전래동화</h1><br />


								<?php

error_reporting(E_ALL);
ini_set("display_errors" , 1);

$conn = mysqli_connect("localhost", "phpmyadmin", "intae","phpmyadmin");
$sql = "select distinct video_name from video where video_class='world'"; 

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
<td>작성자</td>
</tr>" ;

$result = $conn-> query($sql);

while($row = $result->fetch_array(MYSQLI_ASSOC)) {


	echo "<tr>
	<td><a href='view.php?video_name=".$row['video_name']."_1'>";
	echo $row['video_name']; echo "</a></td>
	<td>"; echo 'MANAGER' ; echo "</td></tr>";


}

echo "</table>
</body>
</html> ";


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
