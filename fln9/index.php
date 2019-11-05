<?php session_start(); ?>
<?php  
$pageName =  basename($_SERVER["SCRIPT_FILENAME"], '.php');

$useragent = $_SERVER['HTTP_USER_AGENT'];
if (preg_match("/Mobile|Android|BlackBerry|iPhone|Windows Phone/", $_SERVER['HTTP_USER_AGENT'])) {
  //echo $pageName; die;
    echo "<script> var name='".$pageName."';location.href='https://www.albertapayments.com/amp/fln9/'+name+'.php'</script>";exit;
    //header('Location:https://www.albertapayments.com/amp/index.php'); exit;
}
?>
<html>
<head>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
	<link rel="stylesheet" href="css/styles.css">
	<script src="js/jquery.min.js"></script>
	<script src="js/tradeshow.js"></script>
  <!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '920303741653006');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=920303741653006&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
</head>
<body>
	<div class="slider-container">
		<div class="slider-control left inactive"></div>
		<div class="slider-control right"></div>
		<ul class="slider-pagi"></ul>
		<div class="slider">
			<div class="slide slide-0 active">
				<div class="slide__bg"></div>
				<div class="slide__content">
				<div><img src="assets/images/toplogo.png" class="toplogo"></div>
        <img src="assets/images/Full_Bundle.png" class="Full_Bundle">
          <div class="slide__text">
            <div>
              <!-- Logo image -->
              <img src="assets/images/Alberta_POS_Logo_NoTAG.png" class="POS_Logo_NoTAG">
              <!-- End Logo image -->
            </div>
            <!-- content -->
            <div class="alb_info_text">
              <span>Alberta POS system is a cloud based technology designed  for making your retail business operations efficient by utilizing key features. Streamline your retail store operations with powerful data drive solutions with these key features to enhance your sales and customer experiance.</span>
            </div><!--end content -->
            <div class="alb_icon_listing">
              <div class="alb_list_left">
                <ul>
                  <li><span class="alb_icon"><img src="assets/images/Inventory_Icon.png"></span><span class="alb_ic_detail "><a href="../inventory-management.php">SMART Inventory Management</a></span></li>
                  <li><span class="alb_icon"><img src="assets/images/Loyalty_Icon.png"></span><span class="alb_ic_detail"><a href="../rms-pos.php#loyalty-prog" title="">Loyalty Plat</a></span></li>
                  <li><span class="alb_icon"><img src="assets/images/Scan_Data_Icon.png"></span><span class="alb_ic_detail"><a href="../scan-data.php" title="">Automized Scan Data Reports</a></span></li>
                </ul>
              </div>
              <div class="alb_list_right">
              <ul>
                <li><span class="alb_icon"><img src="assets/images/Loss_Prevention_Icon.png"></span><span class="alb_ic_detail"><a href="../loss-prevention.php">Loss/Theft Prevention</a></span></li>
                <li><span class="alb_icon"><img src="assets/images/Mobile_App_Icon.png"></span><span class="alb_ic_detail"><a href="../mobile-product.php">Mobile Application</a></span></li>
                <li><span class="alb_icon"><img src="assets/images/Reporting_Tools_Icon.png"></span><span class="alb_ic_detail"><a href="../rms-pos.php#biz-ins">Live Sales Reports</a></span></li>
              </ul>
            </div>

            </div>
        <button class="learn-more">Learn More</button>
        </div>
        
          

      </div>
    </div>
    <div class="slide slide-1">
      <div class="slide__bg"></div>
      <div class="slide__content">
         <!-- Main logo -->
        <div><img src="assets/images/toplogo.png" class="toplogo"></div>
        <!-- end main logo -->
        <!-- side image -->
          <img src="assets/images/Terminal_Left_Angled.png" class="Terminal_Left_Angled">
        <!-- end side image -->

        <div class="slide__text">
           <!-- heading -->
        <div class="alb_title">
              <span>Payment Processing</span>
        </div><!-- end heading -->
        <!-- content -->
        <div class="alb_info_text">
            <span>Alberta POS system is a cloud based technology designed  for making your retail business operations efficient by utilizing key features. Streamline your retail store operations with powerful data drive solutions with these key features to enhance your sales and customer experiance.</span>
        </div>
        <!-- end content -->
        <div class="alb_icon_listing">
          <div class="alb_list_right">
            <ul>
              <li><span class="alb_icon"><img src="assets/images/No_Early_Icon.png"></span><span class="alb_ic_detail">No Early Termination Fee</span></li>
              <li><span class="alb_icon"><img src="assets/images/Service_Icon.png"></span><span class="alb_ic_detail">Service you can rely on</span></li>
              <li><span class="alb_icon"><img src="assets/images/No_Fees_Icon.png"></span><span class="alb_ic_detail">No Hidden Fees</span></li>
               <li><span class="alb_icon"><img src="assets/images/Secured_Platform_Icon.png"></span><span class="alb_ic_detail">Secured platform</span></li>
            </ul>
          </div>
          </div>
             <button class="learn-more">Learn More</button>
        </div>
      </div>
    </div>
    <div class="slide slide-2">
      <div class="slide__bg"></div>
      <div class="slide__content">
        <!-- Main logo -->
        <div><img src="assets/images/toplogo.png" class="toplogo"></div>
        <!-- end main logo -->
         <div>
          <!-- side image -->
          <img src="assets/images/KioskPhoto.png" class="KioskPhoto">
        </div>
        <!-- end side image -->
        <div class="slide__text">
          <div class="alb_title">
          <span>Food Ordering kiosk</span>
        </div>
        <div class="alb_info_text">
          <span>Alberta's food ordering kiosk is the most economical & reliable technology in the market. The Kiosk helps you control cost, improves order accuracy and reduces time taken to check out by taking customer orders to eliminate  traditional processes and human error.</span>
        </div>

        <div class="alb_icon_listing">
          <div class="alb_list_left">
            <ul>
              <li><span class="alb_icon"><img src="assets/images/Increase_Sales_Icon.png"></span><span class="alb_ic_detail">Increase Sales up to 20%</span></li>
              <li><span class="alb_icon"><img src="assets/images/Reduce_Cost_Icon.png"></span><span class="alb_ic_detail">Reduce Operational Costs</span></li>
              <li><span class="alb_icon"><img src="assets/images/Central_Menu_Icon.png"></span><span class="alb_ic_detail">Centralized Menu Boards</span></li>
            </ul>
          </div>

          <div class="alb_list_right">
            <ul>
              <li><span class="alb_icon"><img src="assets/images/Improve_Icon.png"></span><span class="alb_ic_detail">Improve Customer Service</span></li>
              <li><span class="alb_icon"><img src="assets/images/Marketing_Kiosk_Icon.png"></span><span class="alb_ic_detail">Marketing Platform</span></li>
              <li><span class="alb_icon"><img src="assets/images/Menu_Icon.png"></span><span class="alb_ic_detail">Menu Mnagement</span></li>
            </ul>
          </div>
          </div>
          <button class="learn-more">Learn More</button>
        </div>
        
        
        </div>
      </div>
    </div>
</div>			
							
			<!-- Contact Form start-->
			<div id="parent">
				<div id="wide">
					<div style="text-align: center;">
						<div style="font-size: 27px;font-weight: 600;color: #3a3a3a;">
							We Know You, Because We Are You!
						</div>
						<div style="font-size: 17px;font-weight: 600;color: #3a3a3a;padding-top: 7px;padding-bottom: 10px;">
							With our Products You Get:
						</div>
					</div>
					<div>
 <div class="left al-block" style="margin-top: 20px;">
  <div class="circle-div"><img src="assets/images/vikio.png"></div>
  <div class="al-items-content">
    <div class="title" style="color: #3498DB;">Experience</div>
    <div class="sub-title">you can trust</div>
    <div class="lst-content">Our journey started with owing and managing a small retail bussiness. We shared the same retail bussiness. We shares the same hardships and issues as you at the start . So, we decided to tackle these challenges head on.</div>
  </div>
  </div>
  
 <div class="left al-block">
    <div class="circle-div"><img src="assets/images/vikito.png"></div>
    <div class="al-items-content">
    <div class="title" style="color: #8E44AD;">Passion</div>
    <div class="sub-title">you can count on</div>
    <div class="lst-content">Our decision to tackle retailer's challenge head on and aoofer retail management solutions that makes economical and business sense, resulted in Alberta..</div>
  </div>
   
  </div>
 <div class="left al-block">
  <div class="circle-div"><img src="assets/images/vikith.png"></div>
  <div class="al-items-content">
    <div class="title" style="color: #D68910">Values</div>
    <div class="sub-title">That stand out</div>
    <div class="lst-content">Friendship encompasses characteristics such as trust, transparancy, loyalty, empanthy, willingness to help and reliability.</div>
  </div>
</div>

</div>
				</div>
				<div class="container" id="narrow">
					<span style="font-size: 15px;color: #fff;">Sign up for a sales agent to contact you with more information.</span>
					<form method="post" action="send_mail.php" onsubmit="myFunction()">
						<!-- <label for="fname">First Name</label> -->
						<input type="text" id="fname" name="firstname" placeholder="Name" required>

						<!-- <label for="lname">Last Name</label> -->
						<input type="text" id="bname" name="bname" placeholder="Business Name" required>

						<input type="number" id="Phone" name="Phone" placeholder="Phone" required>
						<input type="email" id="Email" name="Email" placeholder="Email">

						<div style="height: 50px;font-size: 9px;background: #fff;padding: 5px;">
							<label for="Product" style="font-size: 13px;color: #ff7600;font-weight: 600;">Choose a Product</label><br/>
							<div style="margin-top: 5px">
								<input type="checkbox" name="product[]" value="Payment" > <span class="check">Payment Processing</span>
								<input type="checkbox" name="product[]" value="POS" >  <span class="check">POS</span>
								<input type="checkbox" name="product[]" value="Kiosks" > <span class="check">Kiosk</span>
								<input type="checkbox" name="product[]" value="ATM" > <span class="check">ATM</span>
							</div>
						</div>
						<input type="submit" value="Submit" style="margin-top:5px;">
					</form>
				</div>

			</div>
<!-- call facebook pixel script -->
<script>
  function myFunction() {
  fbq('track', 'CompleteRegistration');
  }
</script>
<!-- call facebook pixel script -->
		</body>

		</html>
