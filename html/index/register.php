<!DOCTYPE HTML>
<!--
	Phantom by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>회원가입</title>
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
								<button style="background-color:white;float:right;" onclick="location.href='login.php' ">Login</button>
					 <?php } else

					 { ?>
							   <button style="background-color:white;float:right;" onclick="location.href='logout.php' ">Logout</button>
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
								<h1>회원가입</h1>
							</header>

							<body>

								<div style="height:auto; width:70%; margin-left:auto; margin-right:auto; text-align:center;">
									<form method="POST" action="join.php">
										
										<div style="margin-left:auto; margin-right:auto; margin-bottom:2em; text-align:left">
										
											<label>아이디 : <input type="button" value="아이디 확인" style="float:right" onclick="checkID()"/>
											
											<input type="text" name = "id" id="id" />
											
											</label>

											<label>비밀번호 : <input type="password" name="pwd" id="pwd" /></label>
											<label>이름 : <input type="text" name="username" id="username"/></label>
											<label>닉네임 : <input type="text" name="nic_name" id="nic_name"/></label>
											<label>이메일: <input type="text" name="email" id="email"/></label>
										</div>


									<input type="submit" name = "Register" value = "가입하기"  onclick="return checkValue()"/>

								</div>


								<script>


function checkID() {

var checkId = document.getElementById('id').value; //입력값 얻어와서 sql쿼리에 넣을 거임
var url = 'checkid.php?id='+checkId; 
window.open(url, '_blank' , 'width=600,height=400' , 'left=300,top=300');
}


function checkValue() {

var userPW = document.getElementById('pwd').value;
var userName = document.getElementById('username').value;
var nicName = document.getElementById('nic_name').value;
var email = document.getElementById('email').value;

if(userPW==='')  {
	alert('비밀번호를 입력하세요');
	return false; 
	}

else if(userName==='') {
	alert('이름을 입력하세요');
	return false; 
	}

else if(nicName==='') {
	alert('닉네임을 입력하세요');
	return false; 
}


else if(email==='') {

alert('이메일을 입력하세요');
return false;
} 

else return true; 

//유효성 검사할 내용 있으면 추가하면 됨


}

</script>  





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
