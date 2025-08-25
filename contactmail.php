<?php
if(isset($_POST['submit'])) 
		{
       $name= $_POST['name'];

       $email= $_POST['email'];
        $phone= $_POST['phone'];
         $msg= $_POST['msg'];
        // $sub= $_POST['sub'];
    
$subject="Contact-Form: American Investment Forum";

$to = "manager@amerikaninvestmentforum.com";
$from=$email;

$message = <<<EOF
<html>
  <body bgcolor="#DCEEFC">
   
   <center>
        <table border="1" align="center" cellpadding="4" cellspacing="4">

  <tr>
    <td align="right" nowrap="nowrap"> Name</td>
    <td>:</td>
    <td width="374">$name</td>
  </tr>

  <tr>
    <td align="right" nowrap="nowrap">Email</td>
    <td>:</td>
    <td width="374">$email</td>
  </tr>

   <tr>
    <td align="right" nowrap="nowrap">Phone</td>
    <td>:</td>
    <td width="374">$phone</td>
  </tr>
   <tr>
    <td align="right" nowrap="nowrap">Message</td>
    <td>:</td>
    <td width="374">$msg</td>
  </tr>

</table>
   </center>
  </body>
</html>
EOF;
   //end of message
    $headers  = "From:youremail@yoursite.com\r\n";
    $headers .= "Content-type: text/html\r\n";
	//$headers1 .= 'Cc: shubhalahari@gmail.com' . "\r\n";
    //options to send to cc+bcc
  //  $message .= "Cc: [email]shubhalahari@gmail.com[/email]";
    //$headers .= "Bcc: [email]email@maaking.cXom[/email]";
    
    // now lets send the email. 
	
  mail($to, $subject, $message, "From: $from \nContent-Type: text/html; charset=iso-8859-1");
  
  echo "<script>
  alert('Thank You Our Management staff will reach out to you shortly');
window.location.href='contact.html';  
</script>";

		}

?>