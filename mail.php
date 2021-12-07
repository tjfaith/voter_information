<?php
error_reporting(0);
if($_POST['submit2']){

 $to = "tjbenbiz@gmail.com";
 $user_name = $_POST['sender_name'];
 $subject = $_POST['subject'];
 $message = $_POST['message'];
 $header = "From:".$_POST['email_address']."\r\n";
 $retval = mail ($to,$subject,$message,$header);
 if( $retval == true )
 {
 echo "Message sent successfully...";
 }
 else
 {	

 	?>
		<script>
			alert("Unable to send message, please check your internet connection");
			javascript:history.go(-1);
		</script>
		<?php

 }
}


