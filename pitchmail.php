<?php
if(isset($_POST['submit'])) 
		{
       $fname= $_POST['fname'];
       $lname= $_POST['lname'];
       $email= $_POST['email'];
        $phone= $_POST['phone'];
         $msg= $_POST['msg'];
         $sub= $_POST['sub'];
    
$subject="Pitch-Form Entry: $sub";

$to = "amerikan.management@gmail.com";
$from="info@amerikaninvestmentforum.com";

$message = <<<EOF
<html>
  <body bgcolor="#DCEEFC">
   
    <p>Dear $fname $lname, <br>
Thank you for signing up for this form.
</p>
    <h3>Amerikan Management Company (AMC): Consideration for Investment </h3>
       <h4>AMC</h4>
<p>AMC manages the Amerikan Investment Forum (AIF), a large group of accredited investors, creates investment syndicates, and offers advisory/consulting services. As such, AMC screens business ventures and provides a platform to pitch to the group. The presentations are virtual and are recorded. </p>
<h4>Investment Process</h4>
<p>Based on the presentation and the level of interest, AMC will begin a due-diligence process which will include reviewing the venture. This may lead to investment from the Amerikan Founders Fund (AIF) and/or the creation of a Special Purpose Investment Vehicle to pool our investments. During 2021, AMC facilitated the creation of two syndicates and an investment of about $200,000.</p>
<h4>Setup and Management Fee</h4>
<p>Should the presentation and due diligence lead to an investment in the business, the business will pay AMC a set-up and management fee of $5,000 to set up the investment or the syndicate, provide quarterly reports, and manage the relationship.</p>
<h4>Submission of investment pitches</h4>
<p>Please reply to this email with a pitch deck and other digital materials (videos, spreadsheets, etc.) Please ensure the following information is included:</p>
<ul>
<li> Problem solved, Product/Service </li>
<li> Addressable Market size and scope </li>
<li> Intellectual property, patents, etc. </li>
<li> Competition </li>
<li> Leadership team and qualifications </li>
<li> Financials including - </li>
<ul>
<li> Current spend details </li>
<li> Current ARR, 1 and 3-year financial projections </li>
<li> What you are seeking: investment size and terms, etc.</li>
<li> What set of milestones are planned with this round of investment </li>
<li> Investment history (funds raised to date, commitments in this round, future plans) </li>
</ul>
<li> Exit strategy </li>
<li> Contact information (name, phone, email) </li>
</ul>
<p>Based on a review by our investment committee and subject matter experts and our calendar, we will schedule your pitch. We look forward to engaging with you about your venture.</p>
<p>Sincerely,</p>
AmeriKan Management Company


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
  alert('Mail Sent Successfully');
window.location.href='pitch-to-us.html';  
</script>";

			
		
		}


?>