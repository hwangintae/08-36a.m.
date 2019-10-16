
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


$video_name_count = $_GET['video_name'];   

$idxForCount = strrpos($video_name_count , '_'); 

$video_name_count = substr($video_name_count , 0 , $idxForCount); //개수 확인할 용도




$video_name = $_GET['video_name'].'.mp4'; //넘겨진 값 받아오기 .mp4 등 확장자 아직 없음



$conn = mysqli_connect("localhost", "phpmyadmin", "intae","phpmyadmin");
$sql = "select * from video where video_split='".$video_name."'";  // 하나의 값을 가져옴
$sql2 = "select count(*) from video where video_name='".$video_name_count."'"; 

$result = $conn-> query($sql);
$result2 = $conn -> query($sql2);

$row = $result->fetch_array(MYSQLI_ASSOC);
$row2 = $result2->fetch_array(MYSQLI_NUM); 

?>
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="inner">

							<!-- Logo -->
								<a href="../index.php" class="logo">
									<span class="symbol"><img src="../index/images/logo.svg" alt="" /></span><span class="title"><?php echo $row['video_name'] ?> </span>
								</a>
								<span>
								
								
<input type="button" value="녹음하기" id="startButton"/>
<input type="button" value="녹음중지" id="stopButton"/>

<span style="float:right; margin-top:10px">소리 모드</span> 


</span> 


<?php

#error_reporting(E_ALL);
#ini_set("display_errors" , 1);

#$result = shell_exec("python tts_test.py");
#Echo "<pre>".$result."<pre>";

?>

<script>

let shouldStop = false;
let stopped = false;

var start = document.getElementById('startButton');
start.onclick = startButton;

var stop = document.getElementById('stopButton');

stopButton.addEventListener('click' , function() {

	document.getElementById('video').stop(); 
	shouldStop = true; 
})




function startButton() {

alert('지금부터 녹음이 시작됩니다.');
document.getElementById('video').play(); 
var startBtn = document.getElementById('startButton').value = "녹음중";



var handleSuccess = function(stream) {

 const chunks = [];
 const recorder = new MediaRecorder(stream);

recorder.addEventListener('dataavailable' , function(e) { 
 	 
 chunks.push(e.data);
 
if(shouldStop === true && stopped === false) {
  	 document.getElementById('video').stop();
	 recorder.stop();
	 stopped = true; 

  }

 });

recorder.addEventListener('stop' , function() {

    var stopBtn = document.getElementById('stopButton').value = '녹음중지됨';
	const blob = new Blob(chunks, { type: 'audio/webm' });
	createAudioElement(URL.createObjectURL(blob));


});

recorder.start(1000);
 };




//현재 권한을 얻어오질 못하고 있음


var getUserMedia =  navigator.getUserMedia || navigator.webkitGetUserMedia || navigator.mozGetUserMedia;



navigator.mediaDevices.getUserMedia({ audio: true }).then(handleSuccess); 




}

// appends an audio element to playback and download recording
function createAudioElement(blobUrl) {
    
    const downloadEl = document.createElement('button');
	  downloadEl.style = 'display: inline';
    downloadEl.innerHTML = 'download';
    downloadEl.download = 'test.webm';
    downloadEl.href = blobUrl;
    const audioEl = document.createElement('audio');
    audioEl.controls = true;
   	const sourceEl = document.createElement('source');
    sourceEl.src = blobUrl;
    sourceEl.type = 'audio/webm';
	audioEl.style='display:block; width:400px';
    audioEl.appendChild(sourceEl);
    document.body.appendChild(downloadEl);
    document.body.appendChild(audioEl);
}



  
</script>


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



if($row != null) { // 

?>
 

<video id="video" style="width: 100% ; max-width:100%; height:100%; max-height:500px" controls="controls" >

<source src="resource/video/<?php echo $video_name ?>" type="video/mp4" /> <!--확장자 불러온것--> 

</video> 


<div style="max-width: 100%; text-align:center" >

<p style="margin-top:30px; color:red">※녹음시 음소거 버튼을 눌러주세요※</p>

</div>

<input type="button" value="이전" a href="#" style="float : left" onclick="checkPrev()">

<input type="button" value="다음" a href="#" style="float : right" onclick="checkNext()">


<?php 

$find = strrpos($row['video_split'] , '_') ;

$value = substr($row['video_split'] , $find+1 , -4);  //value 에는 동화 숫자값 있음
// 자바스크립트에서 사용하려면 script 내에 echo 변수로 받아줘야함 

?>



<script>

var video_name = "<?php echo $row['video_name'] ?>"

var value ="<?php echo $value ?>";
value *= 1 ; //숫자로 형변환

var last = "<?php echo $row2[0] ?>"  //마지막 값이 들었음 

last *= 1;  


function checkPrev() {

value = value - 1 ; 

if(value == 0) {
	alert('해당 동화의 첫 페이지 입니다.');
	value = 1 ; 
}

else {

location.href='view.php?video_name='+video_name+'_'+value; 

}
}


function checkNext() {

if( value == last) {//값이 값을 경우 마지막 페이지 

alert('해당 동화의 마지막 페이지 입니다.');

}

else { 
value = value+1 ;
location.href='view.php?video_name='+video_name+'_'+value; 
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
