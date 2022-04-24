<?php
//sätter variablerna 
if (isset($_POST['submit'])) {
		$name= $_POST['name'];
		$email= $_POST['mail'];
		$message= $_POST['message'];
	//sätter vilken mail som ska mailas till
	$mailTo = "testingwebsida@gmail.com";
	//här sätter vi headern i mailen till mail adressen man skrev in
	$headers= "From: ".$email;
	//sätter medelandet och namnet man skrev in
	$txt = "You got mail from ".$name.".\n\n".$message;
	
	
	//skickar en till succsess pagen om mailet skickas 
	if(mail($mailTo, $headers, $txt)){
    header("Location: mailsent.php");
}else
	{
		//om mailet failar så kommer man till fail pagen och kan försöka igen
    header("Location: mailfail.php");
}
}

?>
