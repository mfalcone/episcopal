<?php
session_start();

if($_SERVER["REQUEST_METHOD"] != 'POST') header( "Location: .." );

include ("class.phpmailer.php");

class formmail {
	
    var $From     = "noreply@greenhill.org";
    var $FromName = "Building Community";        
    var $Host     = "localhost";
    var $Username = "";	
    var $Password = "";    
    var $Mailto   = "diazj@greenhill.org";    
    
    var $CharSet  = 'UTF-8';    
    
    
    /*function send()
    {	 
        $mail = new PHPMailer();
        $mail->IsHTML(true);
        $mail->From     = $this->From;
        $mail->FromName = $this->FromName;
        $mail->AddReplyTo($_REQUEST['__E-mail'],"");
        $mail->CharSet = $this->CharSet;

        $mail->Mailer   = "smtp";
        $mail->Host     = $this->Host;
        $mail->Username = $this->Username;	
        $mail->Password = $this->Password;

        $mail->Body    	= $this->msg();
        $mail->Subject 	= "Contact from website";

        $mail->AddAddress($this->Mailto, "");	      

        if(!$mail->Send()) echo "ERROR: ".$mail->ErrorInfo;
        else echo "SUCCESS";	
    }*/

	function send()
    {	 
    	// To send HTML mail, the Content-type header must be set
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset='.$this->CharSet . "\r\n";

		// Additional headers
		$headers .= 'To: Administrator <'.$this->Mailto.'>' . "\r\n";
		$headers .= 'From: '.$this->FromName.' <'.$this->From.'>' . "\r\n";
		$headers .= 'Reply-to: '. $_REQUEST['__E-mail'] . "\r\n";
    
    	if(!mail($this->Mailto, "Contact from website", $this->msg(), $headers)) echo "ERROR";
        else echo "SUCCESS";
    }


    function msg () 
    {	
        $msg = "";

        foreach ( $_REQUEST as $field => $data) {
                if (trim(substr ($field,0,2)) == "__" && trim(substr ($field,2,3)) != "utm" ) {
                        $label =  substr($field,2, strlen($field));
                        $msg .=  str_replace ("_", " ", $label) . ": " . $data ."<br/>\r\n" ;
                }
        }

        return $msg;
    }
}
?>
