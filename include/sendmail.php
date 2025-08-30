<?php
	
	function HtmlMailSend($to,$subject,$mailcontent,$from)
	{
		include_once('class.phpmailer.php');
		$mail = new PHPMailer;
		return $mail->HtmlMailSend($to,$subject,$mailcontent,$from);
	}
	
	function SimpleMailSend($to,$subject,$mailcontent1,$from)
	{
		include_once('class.phpmailer.php');
		$mail = new PHPMailer;
		return $mail->SimpleMailSend($to,$subject,$mailcontent1,$from);
	}	
	
	function SendMail($to,$subject,$mailcontent,$from)
	{
		$array = split("@",$from,2);
		$SERVER_NAME = $array[1];
		$username =$array[0];
		$fromnew = "From: $username@$SERVER_NAME\nReply-To:$username@$SERVER_NAME\nX-Mailer: PHP";
		@mail($to,$subject,$mailcontent,$fromnew);
	}
  
    function SendHTMLMail($to,$subject,$mailcontent,$from1)
	{
		$limite = "_parties_".md5 (uniqid (rand()));
		$headers  = "MIME-Version: 1.0\r\n";
		$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
		$headers .= "From: $from1\r\n";
		@mail($to,$subject,$mailcontent,$headers);
	}
	
	function SendHTMLMailCC($to,$subject,$mailcontent,$from1,$cc)
	{
		$limite = "_parties_".md5 (uniqid (rand()));
		$headers  = "MIME-Version: 1.0\r\n";
		$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
		$headers .= "From: $from1\r\n";
		$headers .= "From: $from1\r\n";
		$headers .= "Cc: $cc\r\n";
		@mail($to,$subject,$mailcontent,$headers);
	}
	function SendSMTPMail($to,$sub,$content,$from,$fname,$bcc)
	{
		include_once('class.phpmailer.php');
		$mail = new PHPMailer;//($email_host,$email_port,$email_auth,$email_username,$email_pass);
		$mail->SMTPAuth = true;
		$mail->SMTPDebug = 0;
		$mail->SMTPAuth = 'true';
		$mail->Host = 'YOUR_MAIL_HOST';
		$mail->Port = 'YOUR_MAIL_PORT';
		$mail->Username = 'YOUR_MAIL_USERNAME';
		$mail->Password = 'YOUR_MAIL_PASSWORD';
		$mail->SetFrom($from,$fname);
		$mail->Subject = $sub;
		$mail->Body = $content;
		$mail->IsHTML(true);
		$mail->AddAddress($to);
		$mail->AddBCC($bcc);
		$mail->Send();
		
	}
?>
