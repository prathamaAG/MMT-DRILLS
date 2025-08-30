<?php include("include/sendmail.php");

$SITE_URL = "https://mmtdrills.com/";

if (isset($_POST['submit'])) {
	/*echo "<pre>";
	print_r($_POST);
	echo "</pre>"; exit;*/
	extract($_POST);
	$subject1 = 'MMT Drills Contact Request';
	$to = "samiraghera@yahoo.co.in";
	$to1 = "samirvaghera1@gmail.com";
	$from = "noreply@mmtdrills.com";
	$mailcontent1 = '<style>
	.bodrtab {
		border:1px solid #333333;
	}
	td {
		font-family: Arial;
		font-size: 12px;
		color: #363636;
	}
	.txt-14 {
		font-family: Arial;
		font-size: 14px;
		font-weight: bolder;
		color: #FFFFFF;
	}
	</style>	
	<table width="50%"  style="border:1px solid #000000;" cellspacing="4" cellpadding="4">
		<tr bgcolor="#FFF">
			<td colspan="2" style="background-color:#000000; border-bottom: 1px solid #999999;"><img src="' . $SITE_URL . 'images/logo.png" alt="MMT Drills"></td>
		</tr>			
		<tr style="background-color:#ffffff;  border-bottom:#999999 1px solid">
			<td height="30" colspan="2" class="txt-14" width="" style="font-family:Arial;font-size:14px;color:#2976c5;font-weight:bolder"><strong>Dear Admin</strong></td>
		</tr>	
		<tr>
			<td colspan="2"><strong>' . $fname . '</strong> submitted Contact details. &nbsp;&nbsp; Details are below :</td>
		</tr>
		<tr>
			<td><strong>Name:</strong></td>
			<td width="61%" >' . $fname . '</td>
		</tr>
		<tr>
			<td><strong>Name:</strong></td>
			<td width="61%" >' . $lname . '</td>
		</tr>
		<tr>
			<td><strong>Email Address:</strong></td>
			<td width="61%" >' . $email . '</td>
		</tr>	
		<tr>
			<td><strong>Phone Number:</strong></td>
			<td width="61%" >' . $phone . '</td>
		</tr>
		<tr>
			<td><strong>Message:</strong></td>
			<td width="61%" >' . $message . '</td>
		</tr>
		
		<tr>
			<td colspan="2"><strong>&nbsp;</strong></td>
		</tr>
		<tr>
			<td colspan="2"><strong>Thank You,<br>' . $fname . '</strong></td>
		</tr>
	</table>';
	$success = SendHTMLMail($to, $subject1, $mailcontent1, $from, $fname);
	$success = SendHTMLMail($to1, $subject1, $mailcontent1, $from, $fname);
	$msg = "Thank you for contacting us. We will respond as soon as possible.";
	header("Location: thank-you.html");
} ?>