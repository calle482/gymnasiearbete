<?php

if (isset($_POST['submit'])) {
		$name= $_POST['name'];
		$email= $_POST['mail'];
		$message= $_POST['message'];
	
	$mailTo = "testingwebsida@gmail.com";
	$headers= "From: ".$email;
	$txt = "You got mail from ".$name.".\n\n".$message;
	
	
	header("Location: index.php?mailsent");
	
	if(mail($mailTo, $headers, $txt)){
    header("Location: mailsent.php");
}else
	{
    header("Location: mailfail.php");
}
}

/*
if (isset($_POST['submit'])) {
$receiver= "testingwebsida@gmail.com";
$subject=$_POST['name'];
$message="You got mail from".$sender.".\n\n".$message;;
$sender=$_POST['mail'];


if(mail($receiver, $subject, $message, $sender)){
    echo "Email sent successfully to $receiver";
}else{
    echo "Sorry, failed while sending mail!";
}
}
*/
?>
