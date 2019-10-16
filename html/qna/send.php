<?php
	header("Content-Type: text/html; charset=UTF-8");

	if(empty($_POST['email']) || empty($_POST['message']) || !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)) {
			echo "<script>alert(\"필수항목을 입력해주세요.\"); history.back(-1);</script>";
			return false;
		}

	$name = strip_tags(htmlspecialchars($_POST['name']));
	$email = strip_tags(htmlspecialchars($_POST['email']));
	$title = strip_tags(htmlspecialchars($_POST['title']));
	$message = strip_tags(htmlspecialchars($_POST['message']));

	$to = "zxc21322@naver.com";
	$email_title = "0836am : 문의사항입니다.";
	$email_body = "본 메일은 0836am 문의사항입니다.\n\n"."제목 : $name\n\n이메일 : $email\n\n제목 : $title\n\n문의내용 : \n$message";
	$headers = "Reply-To: $email\r";

	mail($to,'=?UTF-8?B?'.base64_encode($email_title).'?=',$email_body,$headers);
	return true;
?>
