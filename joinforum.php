<?php
if(isset($_POST['submit'])) 
		{
       $fname= $_POST['fname'];
       $lname= $_POST['lname'];
       $email= $_POST['email'];
        $phone= $_POST['phone'];
         $msg= $_POST['msg'];
         $city= $_POST['city'];
         $state= $_POST['state'];
         $linkedin= $_POST['linkedin'];
         
         $jwp1= $_POST['jwp'];
         
         if($jwp1=='Yes'){
             
           $jwp = 'Yes';  
             
         }else{
              $jwp = 'No';  
         }
         
$subject="Join The Forum: New Member";

$to = "manager@amerikaninvestmentforum.com";
$from=$email;

$message = <<<EOF
<html>
  <body bgcolor="#DCEEFC">
  
   <h4>Join The Forum</h4>
          <center>
        <table border="1" align="center" cellpadding="4" cellspacing="4">

  <tr>
    <td align="right" nowrap="nowrap">First  Name</td>
    <td>:</td>
    <td width="374">$fname</td>
  </tr>
   <tr>
    <td align="right" nowrap="nowrap">Last  Name</td>
    <td>:</td>
    <td width="374">$lname</td>
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
    <td align="right" nowrap="nowrap">City</td>
    <td>:</td>
    <td width="374">$city</td>
  </tr>
  
     <tr>
    <td align="right" nowrap="nowrap">State</td>
    <td>:</td>
    <td width="374">$state</td>
  </tr>
  
     <tr>
    <td align="right" nowrap="nowrap">Join WhatsApp group</td>
    <td>:</td>
    <td width="374">$jwp</td>
  </tr>
  
       <tr>
    <td align="right" nowrap="nowrap">LinkedIn link  (if any)</td>
    <td>:</td>
    <td width="374">$linkedin</td>
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

  mail($to, $subject, $message, "From: $from \nContent-Type: text/html; charset=iso-8859-1");
  
  echo "<script>
  alert('Thank You Our Management staff will reach out to you shortly');
window.location.href='joinforum.php';  
</script>";

		}
?>

<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>American Forum</title>
    <meta name="robots" content="American Forum, follow" />
    <meta name="description" content="American Forum">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Place favicon.png in the root directory -->
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon" />
    <!-- Font Icons css -->
    <link rel="stylesheet" href="css/font-icons.css">
    <!-- plugins css -->
    <link rel="stylesheet" href="css/plugins.css">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="css/responsive.css">
    <style>
    .ltn__page-details-inner label {
    font-size: 18px;
    margin-top: 15px;
}
    </style>
	
</head>

<body>


<!-- Body main wrapper start -->
<div class="body-wrapper">

    <!-- HEADER AREA START (header-5) -->
    <header class="ltn__header-area ltn__header-5 ltn__header-transparent--- gradient-color-4---">

        
        <!-- ltn__header-middle-area start -->
        <div class="ltn__header-middle-area ltn__header-sticky ltn__sticky-bg-white">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="site-logo-wrap">
                            <div class="site-logo">
                                <a href="index.html"><img src="images/logo.png" alt="Logo" width="250"></a>
                            </div>
                            <div class="get-support clearfix d-none">
                                <div class="get-support-icon">
                                    <i class="icon-call"></i>
                                </div>
                                <div class="get-support-info">
                                    <h6>Get Support</h6>
                                    <h4><a href="tel:+123456789">123-456-789-10</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col header-menu-column">
                        <div class="header-menu d-none d-xl-block">
                            <nav>
                                <div class="ltn__main-menu">
                                    <ul>
                                        <li class="menu-icon1"><a href="index.html">Home</a>
                            
                                        </li>
                             <li class="menu-icon"><a href="investment.html">Investments</a>
                                  <ul>
                                                <li><a href="type-of-investment.html">Types of Investment</a></li>
                                                <li><a href="portfolio.html">Our Portfolio</a></li>
                                                <li><a href="selectionprocess.html">Selection Process</a></li>
                                                <li><a href="pitch-to-us.html">	Pitch to US</a></li>
                  
                                            </ul>
                                        </li>
                                        
                                            <li class="menu-icon"><a href="about.html">About Us</a>
                                            <ul>
                                                <li><a href="history.html">History</a></li>
                                                <li><a href="our-mission.html">Our Mission</a></li>
                                                <li><a href="leadership.html">Leadership</a></li>
                                     
                  
                                            </ul>
                                        </li>
           <li class="menu-icon1"><a href="services.html">Services</a>
                                            
                                        </li>
                                        
                                        <li><a href="contact.html">Contact Us</a></li>
									<!--	<li><a href="#" class="theme-btn-1 btn btn-effect-1" style="padding: 9px 30px;
    border-radius: 30px;
    margin-top: 14px;background:#093B5E;color:#fff">
										      Login
										</a></li> -->
                                    </ul>
                                </div>
                            </nav> </div>
                    </div>
							                           <div class="col ltn__header-options ltn__header-options-2 mb-sm-20">

                        <!-- Mobile Menu Button -->
                           <div class="mobile-menu-toggle d-xl-none">
                            <a href="#ltn__utilize-mobile-menu" class="ltn__utilize-toggle">
                                <svg viewBox="0 0 800 600">
                                    <path d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200" id="top"></path>
                                    <path d="M300,320 L540,320" id="middle"></path>
                                    <path d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190" id="bottom" transform="translate(480, 320) scale(1, -1) translate(-480, -318) "></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                       

                </div>
            </div>
        </div>
        <!-- ltn__header-middle-area end -->
    </header>
    <!-- HEADER AREA END -->

    <!-- Utilize Cart Menu Start -->
    <div id="ltn__utilize-cart-menu" class="ltn__utilize ltn__utilize-cart-menu">
        <div class="ltn__utilize-menu-inner ltn__scrollbar">
            <div class="ltn__utilize-menu-head">
                <span class="ltn__utilize-menu-title">Cart</span>
                <button class="ltn__utilize-close">×</button>
            </div>
            <div class="mini-cart-product-area ltn__scrollbar">
                <div class="mini-cart-item clearfix">
                    <div class="mini-cart-img">
                        <a href="#"><img src="img/product/1.png" alt="Image"></a>
                        <span class="mini-cart-item-delete"><i class="icon-cancel"></i></span>
                    </div>
                    <div class="mini-cart-info">
                        <h6><a href="#">Wheel Bearing Retainer</a></h6>
                        <span class="mini-cart-quantity">1 x $65.00</span>
                    </div>
                </div>
                <div class="mini-cart-item clearfix">
                    <div class="mini-cart-img">
                        <a href="#"><img src="img/product/2.png" alt="Image"></a>
                        <span class="mini-cart-item-delete"><i class="icon-cancel"></i></span>
                    </div>
                    <div class="mini-cart-info">
                        <h6><a href="#">3 Rooms Manhattan</a></h6>
                        <span class="mini-cart-quantity">1 x $85.00</span>
                    </div>
                </div>
                <div class="mini-cart-item clearfix">
                    <div class="mini-cart-img">
                        <a href="#"><img src="img/product/3.png" alt="Image"></a>
                        <span class="mini-cart-item-delete"><i class="icon-cancel"></i></span>
                    </div>
                    <div class="mini-cart-info">
                        <h6><a href="#">OE Replica Wheels</a></h6>
                        <span class="mini-cart-quantity">1 x $92.00</span>
                    </div>
                </div>
                <div class="mini-cart-item clearfix">
                    <div class="mini-cart-img">
                        <a href="#"><img src="img/product/4.png" alt="Image"></a>
                        <span class="mini-cart-item-delete"><i class="icon-cancel"></i></span>
                    </div>
                    <div class="mini-cart-info">
                        <h6><a href="#">Shock Mount Insulator</a></h6>
                        <span class="mini-cart-quantity">1 x $68.00</span>
                    </div>
                </div>
            </div>
            <div class="mini-cart-footer">
                <div class="mini-cart-sub-total">
                    <h5>Subtotal: <span>$310.00</span></h5>
                </div>
                <div class="btn-wrapper">
                    <a href="#" class="theme-btn-1 btn btn-effect-1">View Cart</a>
                    <a href="#" class="theme-btn-2 btn btn-effect-2">Checkout</a>
                </div>
                <p>Free Shipping on All Orders Over $100!</p>
            </div>

        </div>
    </div>
    <!-- Utilize Cart Menu End -->

    <!-- Utilize Mobile Menu Start -->
    <div id="ltn__utilize-mobile-menu" class="ltn__utilize ltn__utilize-mobile-menu">
        <div class="ltn__utilize-menu-inner ltn__scrollbar">
            <div class="ltn__utilize-menu-head">
                <div class="site-logo">
                    <a href="index.html"><img src="images/logo.png" alt="Logo"></a>
                </div>
                <button class="ltn__utilize-close">×</button>
            </div>
            <div class="ltn__utilize-menu-search-form">
                <form action="#">
                    <input type="text" placeholder="Search...">
                    <button><i class="fas fa-search"></i></button>
                </form>
            </div>
            <div class="ltn__utilize-menu">
               <ul>
                                <li class="menu-icon1"><a href="index.html">Home</a>
                            
                                        </li>
                             <li class="menu-icon"><a href="investment.html">Investments</a>
                                            <ul>type-of-investment.htmlinvestment.html">Types of Investment</a></li>
                                                <li><a href="portfolio.html">Our Portfolio</a></li>
                                                <li><a href="#">Selection Process</a></li>
                                                <li><a href="#">	Pitch to US</a></li>
                  
                                            </ul>
                                        </li>
                                        
                                       <li class="menu-icon"><a href="about.html">About Us</a>
                                            <ul>
                                                <li><a href="history.html">History</a></li>
                                                <li><a href="our-mission.html">Our Mission</a></li>
                                                <li><a href="leadership.html">Leadership</a></li>
                                     
                  
                                            </ul>
                                        </li>
                        <li class="menu-icon1"><a href="services.html">Services</a>
                                            
                                        </li>
                                        
                                        <li><a href="contact.html">Contact Us</a></li>
									<!--	<li><a href="#" class="theme-btn-1 btn btn-effect-1" style="padding: 9px 30px;
    border-radius: 30px;
    margin-top: 14px;background:#093B5E;color:#fff">
										      Login
										</a></li> -->
                                    </ul>
            </div>


        </div>
    </div>
    <!-- Utilize Mobile Menu End -->

    <div class="ltn__utilize-overlay"></div>

<!-- BREADCRUMB AREA START -->
    <div class="ltn__breadcrumb-area text-left bg-overlay-white-30 bg-image "  data-bs-bg="img/bg/14.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__breadcrumb-inner">
                        <h1 class="page-title">Join The Forum</h1>
                        <div class="ltn__breadcrumb-list">
                  
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BREADCRUMB AREA END -->


 <!-- PAGE DETAILS AREA START (blog-details) -->
    <div class="ltn__page-details-area ltn__blog-details-area mb-120">
        <div class="container">
            <div class="row">
             
                <div class="col-lg-12">
                    <div class="ltn__blog-details-wrap">
                        <div class="ltn__page-details-inner ltn__blog-details-inner">
                        <div class="ltn__comment-reply-area ltn__form-box mb-60---">
                            <h4 class="title-2">Fill out Form</h4>
                            <form action="" method="POST">
                       <div class="row">
             
                <div class="col-lg-4">
                                <div class="input-item input-item-name ltn__custom-icon">
                                    <input type="text" name="fname" placeholder="First name...." required>
                                </div></div>
                                 <div class="col-lg-4">
                                          <div class="input-item input-item-name ltn__custom-icon">
                                    <input type="text" name="lname" placeholder="Last name...." required>
                                </div></div>
                                               
                                 <div class="col-lg-4">
                                                  <div class="input-item input-item-phone ltn__custom-icon">
                                    <input type="text" name="phone" placeholder="Phone...." required>
                                </div></div>
                                
                                 <div class="col-lg-4">
                                <div class="input-item input-item-email ltn__custom-icon">
                                    <input type="email" name="email" placeholder="Type your email...." required>
                                </div></div>
                                
                                <div class="col-lg-4">
                                                  <div class="input-item input-item-textarea ltn__custom-icon">
                                    <input type="text" name="city" placeholder="City...." required>
                                </div></div>
                                
                                 <div class="col-lg-4">
                                <div class="input-item input-item-textarea ltn__custom-icon">
                                    <input type="text" name="state" placeholder="State...." required>
                                </div></div>
 <div class="col-lg-3">

  <p><label class="input-info-save mb-0"><input type="checkbox" name="jwp" value="Yes"> &nbsp;&nbsp;Join WhatsApp group</label></p>

</div>

                                 <div class="col-lg-4">
                                <div class="input-item input-item-link ltn__custom-icon">
                                    <input type="text" name="linkedin" placeholder="LinkedIn link  (if any)....">
                                </div></div>

 <div class="col-lg-5">
                        
                       <div class="input-item input-item-textarea ltn__custom-icon">
                                    <textarea name="msg" placeholder="What Industries do you have expertise in? ...." required></textarea>
                                </div>
                                </div>
                                
                               <!--  <div class="col-lg-12">
                                       <H5>Accredited Investor Certification</H5>
	<p style="margin-bottom:5px">Please Select on the Select box below to self certify that you are an Accredited Investor.</p>
         
<ul style="margin-bottom:0px">

		<li> I am a natural person with an individual net worth, or joint net worth with my spouse, excluding the value of my or our primary residence, exceeds $1,000,000.
</li></ul>


            <div class="input-item1">
                                                <select name="ai1" class="nice-select" style="margin-bottom: 0px;" required>
                                                    <option>Select </option>
                                                    <option>Yes</option>
                                                    <option>No</option>
                                                    <option>N/A</option>
                
                                                </select>
                                            </div>


                                         
      <br> <ul style="margin-bottom:0px">                                  
                                         <li> I am a natural person, who had an individual income in excess of $200,000 in each of the two most recent calendar years; or joint income, with my spouse, in excess of $300,000 in each of the two most recent calendar years. I reasonably expect reaching the same income level in the current calendar year.</li>

	</ul>
	<div class="input-item1">
<select class="nice-select" name="ai2" style="margin-bottom: 0px;" required>
                                                    <option>Select </option>
                                                    <option>Yes</option>
                                                    <option>No</option>
                                                    <option>Not Sure</option>
                
                                                </select>
                                                </div>

                              </div>
                              
                                                           <!--  <div class="col-lg-12">
                	<H5 style="margin-top: 15px;">How do you wish to participate?</H5>
 <ul style="margin-bottom:0px">                                  
                                         <li>We have set a target of $1 Million for the Amerikan Founders Fund. One can invest from $10,000 up to $50,000. If you wish to invest, how much do you plan on investing?</li></ul>


	<div class="input-item1">
<select class="nice-select" name="howmuchinvest" style="margin-bottom: 0px;" required>
                                                    <option>Select </option>
                                                    <option>$10K - 20K</option>
                                                    <option>$20K - 30K</option>
                                                    <option>$30K - 40K</option>
                                                    <option>$40K - 50K</option>
                                                    <option>More than $50K</option>
                                                    <option>None</option>
                
                                                </select>
                                                </div>
 <br> <ul style="margin-bottom:0px">                                  
                                         <li>The Amerikan Management Company investment is $2500. Would you like to invest in the management company?</li></ul>
	<div class="input-item1">
<select class="nice-select" name="investmanagement" style="margin-bottom: 0px;" required>
                                                    <option>Select </option>
                                                    <option>Yes</option>
                                                    <option>No</option>
                         
                                          
                
                                                </select></div>
                                                
                       <br> <ul style="margin-bottom:0px">                                  
                                         <li>Would you like to participate in the management of the AmeriKan Management Company (for example, as a director, officer, volunteer, or member of the investment committee). We estimate that the maximum commitment will be 2-3 days per month.</li></ul>     
                                                	<div class="input-item1">
<select class="nice-select"  name="participatemanagement" style="margin-bottom: 0px;" required>
                                 <option>Select </option>
                                                    <option>Yes</option>
                                                    <option>No</option>
                <option>Other</option>
                                                </select>
                                                
                                                <textarea name="yourinterest" rows="4" placeholder="If other, please indicate other interest
" style="margin-bottom:0px"></textarea>

                                                </div>
                                                
                                                
                                                        	<H5 style="margin-top: 15px;">References</H5>
 <ul style="margin-bottom:0px">                                  
                                         <li>This forum and the AmeriKan Founders Fund is restricted to our Friends and Family, whom we know. Do you wish to invite your friends or family members, who might be interested in the Forum or this Fund? If so, please enter their information below and we will reach out to them. Thank you</li></ul>
                                         
                                                                                <textarea name="friendfamily" placeholder="Name and Email, one per line please
" rows="6" required></textarea>


                              </div> -->
                         
                                <div class="btn-wrapper">
                                    <button class="btn theme-btn-1 btn-effect-1 text-uppercase" name="submit" type="submit"><i class="far fa-comments"></i> Submit Now</button>
                                </div>
                                
                                </div>
                            </form>
                        </div>
                    </div>
                </div> </div> </div> </div> </div>

 <!-- FOOTER AREA START -->
    <footer class="ltn__footer-area  ">
        <div class="footer-top-area  section-bg-2 plr--5">
            <div class="container">
                <div class="row">
                    <!--<div class="col-xl-4 col-md-6 col-sm-6 col-12">
                        <div class="footer-widget footer-about-widget">
                                                       <h4 class="footer-title">Contact Us</h4>

							<div class="car-dealer-form-inner">
                                                <form action="#" class="ltn__car-dealer-form-box row"> 
                                                    <div class="ltn__car-dealer-form-item ltn__custom-icon ltn__icon-car col-lg-12 col-md-12">
                                                 <input type="text" class="nice-select" placeholder="Name">

                                                    </div> 
                                                    <div class="ltn__car-dealer-form-item ltn__custom-icon ltn__icon-meter col-lg-12 col-md-12">
                                                        <input type="text" class="nice-select" placeholder="Email">
                                                    </div> 
                                                    <div class="ltn__car-dealer-form-item ltn__custom-icon ltn__icon-calendar col-lg-12 col-md-12">
                                                        <input type="text" class="nice-select" placeholder="Phone">
                                                    </div>
                                                    <div class="ltn__car-dealer-form-item ltn__custom-icon ltn__icon-calendar col-lg-12 col-md-12">
                                                        <div class="btn-wrapper text-center mt-0">
                                                            <!-- <button type="submit" class="btn theme-btn-1 btn-effect-1 text-uppercase">Search Inventory</button> 
                                                            <a href="#" class="btn theme-btn-1 btn-effect-1 text-uppercase">Submit</a>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>

                        </div>
                    </div> -->
                   
                   
                                     <!--   <div class="col-xl-4 col-md-6 col-sm-6 col-12">
                        <div class="footer-widget footer-about-widget">
                                                       <h4 class="footer-title">Address</h4>


                            <div class="footer-address">
                                <ul>
                                    <li>
                                        <div class="footer-address-icon">
                                            <i class="icon-placeholder" style="    border: 1px solid #fff;
    border-radius: 50px;
    padding: 10px;
"></i>
                                        </div>
                                        <div class="footer-address-info">
                                            <p>loremiupsiuim, loremiupsiuim, loremiupsiuim</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="footer-address-icon">
                                            <i class="icon-call" style="    border: 1px solid #fff;
    border-radius: 50px;
    padding: 10px;
"></i>
                                        </div>
                                        <div class="footer-address-info">
                                            <p><a href="tel:+0123-456789">+0123-456789</a></p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="footer-address-icon">
                                            <i class="icon-mail" style="    border: 1px solid #fff;
    border-radius: 50px;
    padding: 10px;
"></i>
                                        </div>
                                  <div class="footer-address-info">
                                            <p><a href="mailto:info@amerikaninvestmentforum.com">info@amerikaninvestmentforum.com</a></p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                           
                        </div>
                    </div> -->
                     <div class="col-xl-2 col-md-6 col-sm-6 col-12"></div>
                    <div class="col-xl-4 col-md-6 col-sm-6 col-12">
                        <div class="footer-widget footer-menu-widget clearfix">
                            <h4 class="footer-title">Quick Links</h4>
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="investment.html">Investments</a></li>
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="services.html">Services</a></li>
                                    <li><a href="contact.html">Contact Us</a></li>
                                   
                                </ul>
                            </div>
                        </div>
                    </div>
                   
                       
                    <div class="col-xl-4 col-md-6 col-sm-12 col-12">
                        <div class="footer-widget footer-newsletter-widget">
                            <h4 class="footer-title">Newsletter</h4>
                            <p>Subscribe to our Newsletter and receive updates via email.</p>
                            <div class="footer-newsletter">
                                <form action="#">
                                    <input type="email" name="email" placeholder="Email*">
                                    <div class="btn-wrapper">
                                        <button class="theme-btn-1 btn" type="submit"><i class="fas fa-location-arrow"></i></button>
                                    </div>
                                </form>
                            </div>
							 <div class="ltn__social-media mt-20">
                                 <ul>
                                      <li><a href="https://www.linkedin.com/company/amerikan-investments/" target="_blank" title="Linkedin"><img src="img/link.png" width="23"></a></li>
                <li><a href="joinforum.php" title="Instagram"><img src="img/w.png" width="23"></a></li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ltn__copyright-area ltn__copyright-2 section-bg-7  plr--5">
            <div class="container-fluid ltn__border-top-2">
                <div class="row">
                    <div class="col-md-12 col-12">
                        <div class="ltn__copyright-design clearfix">
                          						  							 <p style="text-align:center"><span class="current-year"></span> American Forum All Rights Reserved Designed By <a href="http://smdsui.com/" target="_blank">SMDS</a> </p>

                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </footer>
    <!-- FOOTER AREA END -->

    <!-- MODAL AREA START (Quick View Modal) -->
    <div class="ltn__modal-area ltn__quick-view-modal-area">
        <div class="modal fade" id="quick_view_modal" tabindex="-1">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            <!-- <i class="fas fa-times"></i> -->
                        </button>
                    </div>
                    <div class="modal-body">
                         <div class="ltn__quick-view-modal-inner">
                             <div class="modal-product-item">
                                <div class="row">
                                    <div class="col-lg-6 col-12">
                                        <div class="modal-product-img">
                                            <img src="img/product/4.png" alt="#">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="modal-product-info">
                                            <div class="product-ratting">
                                                <ul>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                                    <li class="review-total"> <a href="#"> ( 95 Reviews )</a></li>
                                                </ul>
                                            </div>
                                            <h3><a href="#">3 Rooms Manhattan</a></h3>
                                            <div class="product-price">
                                                <span>$34,900</span>
                                                <del>$36,500</del>
                                            </div>
                                            <hr>
                                            <div class="modal-product-brief">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos repellendus repudiandae incidunt quidem pariatur expedita, quo quis modi tempore non.</p>
                                            </div>
                                            <div class="modal-product-meta ltn__product-details-menu-1 d-none">
                                                <ul>
                                                    <li>
                                                        <strong>Categories:</strong> 
                                                        <span>
                                                            <a href="#">Parts</a>
                                                            <a href="#">Car</a>
                                                            <a href="#">Seat</a>
                                                            <a href="#">Cover</a>
                                                        </span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="ltn__product-details-menu-2 d-none">
                                                <ul>
                                                    <li>
                                                        <div class="cart-plus-minus">
                                                            <input type="text" value="02" name="qtybutton" class="cart-plus-minus-box">
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="theme-btn-1 btn btn-effect-1" title="Add to Cart" data-bs-toggle="modal" data-bs-target="#add_to_cart_modal">
                                                            <i class="fas fa-shopping-cart"></i>
                                                            <span>ADD TO CART</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- <hr> -->
                                            <div class="ltn__product-details-menu-3">
                                                <ul>
                                                    <li>
                                                        <a href="#" class="" title="Wishlist" data-bs-toggle="modal" data-bs-target="#liton_wishlist_modal">
                                                            <i class="far fa-heart"></i>
                                                            <span>Add to Wishlist</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="" title="Compare" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                                            <i class="fas fa-exchange-alt"></i>
                                                            <span>Compare</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <hr>
                                            <div class="ltn__social-media">
                                                <ul>
                                                    <li>Share:</li>
                                                    <li><a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="#" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                                    <li><a href="#" title="Linkedin"><i class="fab fa-linkedin"></i></a></li>
                                                    <li><a href="#" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                                                    
                                                </ul>
                                            </div>
                                            <label class="float-end mb-0"><a class="text-decoration" href="#"><small>View Details</small></a></label>
                                        </div>
                                    </div>
                                </div>
                             </div>
                         </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- MODAL AREA END -->

    <!-- MODAL AREA START (Add To Cart Modal) -->
    <div class="ltn__modal-area ltn__add-to-cart-modal-area">
        <div class="modal fade" id="add_to_cart_modal" tabindex="-1">
            <div class="modal-dialog modal-md" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                         <div class="ltn__quick-view-modal-inner">
                             <div class="modal-product-item">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="modal-product-img">
                                            <img src="img/product/1.png" alt="#">
                                        </div>
                                         <div class="modal-product-info">
                                            <h5><a href="#">3 Rooms Manhattan</a></h5>
                                            <p class="added-cart"><i class="fa fa-check-circle"></i>  Successfully added to your Cart</p>
                                            <div class="btn-wrapper">
                                                <a href="#" class="theme-btn-1 btn btn-effect-1">View Cart</a>
                                                <a href="#" class="theme-btn-2 btn btn-effect-2">Checkout</a>
                                            </div>
                                         </div>
                                         <!-- additional-info -->
                                         <div class="additional-info d-none">
                                            <p>We want to give you <b>10% discount</b> for your first order, <br>  Use discount code at checkout</p>
                                            <div class="payment-method">
                                                <img src="img/icons/payment.png" alt="#">
                                            </div>
                                         </div>
                                    </div>
                                </div>
                             </div>
                         </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- MODAL AREA END -->

    <!-- MODAL AREA START (Wishlist Modal) -->
    <div class="ltn__modal-area ltn__add-to-cart-modal-area">
        <div class="modal fade" id="liton_wishlist_modal" tabindex="-1">
            <div class="modal-dialog modal-md" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                         <div class="ltn__quick-view-modal-inner">
                             <div class="modal-product-item">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="modal-product-img">
                                            <img src="img/product/7.png" alt="#">
                                        </div>
                                         <div class="modal-product-info">
                                            <h5><a href="#">3 Rooms Manhattan</a></h5>
                                            <p class="added-cart"><i class="fa fa-check-circle"></i>  Successfully added to your Wishlist</p>
                                            <div class="btn-wrapper">
                                                <a href="#" class="theme-btn-1 btn btn-effect-1">View Wishlist</a>
                                            </div>
                                         </div>
                                         <!-- additional-info -->
                                         <div class="additional-info d-none">
                                            <p>We want to give you <b>10% discount</b> for your first order, <br>  Use discount code at checkout</p>
                                            <div class="payment-method">
                                                <img src="img/icons/payment.png" alt="#">
                                            </div>
                                         </div>
                                    </div>
                                </div>
                             </div>
                         </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- MODAL AREA END -->

</div>
<!-- Body main wrapper end -->

    <!-- preloader area start -->
    <div class="preloader d-none" id="preloader">
        <div class="preloader-inner">
            <div class="spinner">
                <div class="dot1"></div>
                <div class="dot2"></div>
            </div>
        </div>
    </div>
    <!-- preloader area end -->

    <!-- All JS Plugins -->
    <script src="js/new.js"></script>
    <!-- Main JS -->
    <script src="js/main.js"></script>
  
</body>


</html>

