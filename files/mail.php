<?php

	$user_name = htmlspecialchars(urldecode(trim($_POST['user_name'])));
	$user_mail = htmlspecialchars(urldecode(trim($_POST['user_mail'])));
	$subject = htmlspecialchars(urldecode(trim($_POST['subject'])));
	$user_message = htmlspecialchars(urldecode(trim($_POST['user_message'])));

	if(mail("salyerik@gmail.com",
					"New letter from Portfolio",
					"Name: ".$user_name."\n".
					"Mail: ".$user_mail."\n".
					"Subject: ".$subject."\n".
					"Message: ".$user_message,
					"From: portfolio \r\n")
	){
		header('Location: ../index.html');
		exit;
	}
