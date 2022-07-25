<?

if($_REQUEST["email"]){

    	$message = $_REQUEST["email"];

	$message = wordwrap($message, 70, "\r\n");
	
	$to      = 'info@wiconnect.com';
    $subject = 'Get demo';
   
    $headers = 'From: info@wiconnect.com'       . "\r\n" .
                 'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message, $headers);
	
	echo "<div class='success_data_modal'><div class='title_modal'>Thanks</div><p>We will reach you soon as possible</p><button class='close_modal_in main_button'>oк</button></div>";
 
 

	
	

}
?>