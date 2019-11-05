<?php session_start(); ?>
<!doctype html>
<html amp>
	<head>
    <meta charset="utf-8">
  <script async src="https://cdn.ampproject.org/v0.js"></script>
  <script custom-element="amp-form" src="https://cdn.ampproject.org/v0/amp-form-0.1.js" async></script>
  <script custom-template="amp-mustache" src="https://cdn.ampproject.org/v0/amp-mustache-0.2.js" async></script>

  <!-- ## Setup -->
  <!-- Import the carousel component in the header. -->
  <script async custom-element="amp-carousel" src="https://cdn.ampproject.org/v0/amp-carousel-0.1.js"></script>
  <link rel="canonical" href="https://preview.amp.dev/documentation/components/amp-form.example.1.html">
  <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
  <link rel="icon" href="../../img/favicon.png" sizes="32x32" type="image/png">
 
  <style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
  <style amp-custom>
    body{
    font-family: Arial, Helvetica, sans-serif;}
    .title{font-size:23px;font-weight:600;text-transform:uppercase;text-align: center;
    margin-bottom: 5px;}.experience-detail{margin-left:15%}.experiance-title{color:#3498db}.passion-title{padding-left:26px;color:#8e44ad}.passion-sub-title{padding:5px}.values-title{padding-left:31px;color:#d68910}.img_background{background:#02090c54}.contant-format{text-align:center; padding: 0 15px;margin-top: 30px;}.contant-text{font-size:27px;font-weight:600;color:#3a3a3a}.contant-second-text{font-size:17px;font-weight:600;color:#3a3a3a;padding-top:7px;padding-bottom:10px}.left-contant{margin-left:15%}.container-title{font-size:15px;color:#fff}.product{height:50px;font-size:9px;background:#fff;padding:5px}.product-lable{font-size:13px;color:#ff7600;font-weight:600}.input-margin{margin-top:5px}.button-margin{margin-top:10px}.sub-title{font-size:17px;text-transform:uppercase;font-style:normal;font-weight:600; text-align: center;
    margin-bottom: 10px;}.lst-content{font-size:14px;width:100%;color:#545252;text-align:center;cursor:pointer}.container{border-radius:5px;background-color:#2196f3;padding:20px;     width: calc(100% - 80px);margin: 0 auto 20px;}.check{bottom:3px;position:relative}.experience-detail {margin-left: 0;padding: 0 15px;margin-bottom: 20px;}
input[type=text], select, textarea, input[type=email] {
    width: 100%;
    padding: 5px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 8px;
    resize: vertical;
}
input[type=submit]:hover {
    background-color: #e44a05;
    border-color: #e44a05;
}
input[type=submit] {
    background-color: #ff7600;
    color: white;
    padding: 7px 16px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    width: 100%;
}
.circle-div {
    margin-bottom: 20px;
    padding: 30px;
}
  </style>

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

    <amp-carousel width="800" height="1422" layout="responsive" type="slides" autoplay delay="2000">
      <div class="slider img_background">
      <a href="https://www.albertapayments.com/amp/payment-processing"><amp-img src="../nacs-landing/assets/images/imgpsh_fullsize_anim.png" width="800" height="1422" layout="responsive" alt="a sample image">
      </amp-img></a>
    </div>
    <div class="slider img_background">
      <a href="https://www.albertapayments.com/amp/rms-pos"><amp-img src="../nacs-landing/assets/images/imgpsh_fullsize_anim(3).png" width="800" height="1422" layout="responsive" alt="a sample image"> 
		  </amp-img></a>
    </div>
    <div class="slider img_background">
      <a href="https://www.albertapayments.com/amp/kiosk-food-ordering"><amp-img src="../nacs-landing/assets/images/imgpsh_fullsize_anim(1).png" width="800" height="1422" layout="responsive" alt="a sample image"> 
		  </amp-img></a>
    </div>
      </amp-carousel>

<!-- Contact Form start-->
<div id="parent experience-detail">
  <div id="wide">
    <div class="contant-format">
      <div class="contant-text">
        We Know You, Because We Are You!
      </div>
      <div class="contant-second-text">
        With our Products You Get:
      </div>
    </div>
<div>
 <div class="left experience-detail">
  <div class="circle-div">
    <amp-img src="../../nacs-landing/assets/images/vikio.png" width="170" height="170" layout="responsive"></amp-img>
    </div>
  <div >
    <div class="title experiance-title">Experience</div>
    <div class="sub-title">you can trust</div>
    <div class="lst-content">Our journey started with owning and managing a small retail business. We shares the same hardships and issues as you at the start . So, we decided to tackle these challenges head on.</div>
  </div>
  </div>
  

</div>
 <div class="left experience-detail">
    <div class="circle-div"><amp-img src="../../nacs-landing/assets/images/vikito.png" width="170" height="170" layout="responsive"></amp-img></div>
    <div >
    <div class="title passion-title">Passion</div>
    <div class="sub-title">you can count on</div>
    <div class="lst-content">Our decision to tackle the retailer's challenge head on and offer retail management solutions that makes economical and business sense, resulted in Alberta.</div>
  </div>
   
  </div>
 <div class="left experience-detail">
  <div class="circle-div"><amp-img src="../../nacs-landing/assets/images/vikith.png" width="170" height="170" layout="responsive"></amp-img></div>
  <div >
    <div class="title values-title">Values</div>
    <div class="sub-title">That stand out</div>
    <div class="lst-content">Friendship encompasses characteristics such as trust, transparency, loyalty, empathy, willingness to help and reliability.</div>
  </div>
</div>
</div>

  </div>
	<div class="container" id="narrow">
    <span class="container-title">Sign up for a sales agent to contact you with more information.</span>
  <form action-xhr="send_mail" method="post" target="_top" on="submit-success:AMP.navigateTo(url='../thank-you')" onsubmit="myFunction()">
    <!-- <label for="fname">First Name</label> -->
    <input type="text" id="fname" name="firstname" placeholder="Name" title="Please enter your Name" required>

    <!-- <label for="lname">Last Name</label> -->
    <input type="text" id="bname" name="bname" placeholder="Business Name" title="Please enter your Business Name" required>
    <input type="text" id="Phone" name="Phone" placeholder="Phone" title="Please enter your Phone Number" required>
    <input type="email" id="Email" name="Email" placeholder="Email" title="Please enter your Email" required>

    <div class="product">
        <label for="Product" class="product-lable">Choose a Product</label><br/>
          <div class="input-margin">
            <input type="checkbox" name="product[]" value="Payment"> <span class="check">Payment Processing</span>
          <input type="checkbox" name="product[]" value="POS">  <span class="check">POS</span>
          <input type="checkbox" name="product[]" value="Kiosks" > <span class="check">Kiosks</span>
          <input type="checkbox" name="product[]" value="ATM" > <span class="check">ATM</span>
          </div>
        </div>
	<div submit-success>
    	<template type="amp-mustache">
      		
    	</template>
  	</div>
    <input type="submit" value="Submit" class="button-margin">
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
