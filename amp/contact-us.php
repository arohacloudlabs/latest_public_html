<?php include('includes/meta.php'); ?>
<!doctype html>
<html amp lang="en">
	<head>
		<?php include('includes/head.php') ?>
		
		 <!-- <script async src="https://cdn.ampproject.org/v0.js"></script> -->
   		<script async custom-element="amp-sidebar" src="https://cdn.ampproject.org/v0/amp-sidebar-0.1.js"></script>
        <script async custom-element="amp-form" src="https://cdn.ampproject.org/v0/amp-form-0.1.js"></script>
        <script async custom-template="amp-mustache" src="https://cdn.ampproject.org/v0/amp-mustache-0.2.js"></script>
        <script async custom-element="amp-lightbox" src="https://cdn.ampproject.org/v0/amp-lightbox-0.1.js"></script>

	</head>
	<body>
        <?php include('includes/header.php'); 
                @session_start(); 
        ?>
        <div class="breadcrumbs mt-breadcrumb">
            <div class="container">
                <p><span><a href="index.php">Home</a></span> <span><amp-img height="12" width="12" src="../img/arrow-point-to-right.png"></amp-img></span> <span>Contact Us</span></p>  
            </div>
        </div>
        <section class="contact-sec py-7">
            <div class="container">
                <div class="col-md-9 m-auto text-center">
                <h1 class="futuramedium">Contact <span class="futurabold">us</span></h1>
                <p class="pb-3">Get in touch with our team for more information or for a free product demo. Send us an inquiry and our sales team will contact you in less than 12 hrs to book your free product demo at your convenient time.</p>
                </div>
            </div>
            <div class="container pt-5">
                <div class="row">
                <div class="col-md-6">
                    <h4>Reach the <b>appropriate team</b></h4>
                    <div class="call-no">
                    <span><amp-img height="18" width="18" src="../img/call-no.png" alt="Contact no"></amp-img></span>
                    <a  on="tap:my-lightbox"><b>Call us.</b> We are here to help</a>
                    </div>
                    <!--Phone Modal-->
                    <amp-lightbox id="my-lightbox" layout="nodisplay">
                        <div class="lightbox lightbox-new" on="tap:my-lightbox.close" role="button" tabindex="0">
                            <div class="contain-box">
                                <div class="close" on="tap:my-lightbox.close" role="button" tabindex="0"></div>
                                <h2 class="pl-3">Call Customer Support</h2>
                                <h3 class=""><a href="tel:888 502 6650">(888) 502 6650</a></h3>
                                <a href="tel:888 502 6650" class="btn btn-block white py-2 my-4 col-md-6 mx-auto call-btn">Call us now</a>
                                 
                            </div>
                        </div>
                    </amp-lightbox>
                    <!-- <div class="modal fade" id="call-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                        <div class="modal-content text-center">
                            <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            <div class="modal-body">
                            <h2 class="py-3">Call Customer Support</h2>
                            <h3 class=""><a href="tel:888 502 6650">(888) 502 6650</a></h3>
                            <a href="tel:888 502 6650" class="btn btn-block white py-2 my-4 col-md-6 mx-auto call-btn">Call us now</a>
                            </div>
                        </div>
                        </div>
                    </div> -->
                    
                    <!--Fax Modal-->
                    
                    <div class="call-no">
                    <span><amp-img height="18" width="18" src="../img/fax.png" alt="Contact no"></amp-img></span>
                    <a href="contact-us.php"><b>Fax Number</b> 888 690 8856</a>
                    </div>
                    
                    
                        <!--Fax Modal Ends-->
                    
                    <!--Phone Modal-->
                    <div class="call-no">
                    <span><amp-img height="18" width="18" src="../img/email-sm.png" alt="Contact no"></amp-img></span>
                    <a  on="tap:my-lightbox1"><b>Email us.</b> Let us know your concern</a>
                    </div>
                    <!--Email Modal-->
                    <amp-lightbox id="my-lightbox1" layout="nodisplay">
                        <div class="lightbox lightbox-new" on="tap:my-lightbox1.close" role="button" tabindex="0">
                            <div class="contain-box">
                                <div class="close" on="tap:my-lightbox1.close" role="button" tabindex="0"></div>
                                <h2 class="pl-3">Email Customer Support</h2>
                                <h3 class=""><a href="tel:888-502-6650">support@albertapayments.com</a></h3>
                                <a href="mailto:support@albertapayments.com" class="btn btn-block white py-2 my-4 col-md-6 mx-auto call-btn">Email us</a>
                                
                            </div>
                        </div>
                    </amp-lightbox>
                    <!-- <div class="modal fade" id="email-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                        <div class="modal-content text-center">
                            <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            <div class="modal-body">
                            <h2 class="py-3">Email Customer Support</h2>
                            <h3 class=""><a href="tel:888-502-6650">support@albertapayments.com</a></h3>
                            <a href="mailto:support@albertapayments.com" class="btn btn-block white py-2 my-4 col-md-6 mx-auto call-btn">Email us</a>
                            </div>
                        </div>
                        </div>
                    </div> -->
                    <!--Email Modal-->
                    <div class="call-no">
                    <span><amp-img height="18" width="18" src="../img/media.png" alt="Contact no"></amp-img></span>
                    <a  on="tap:my-lightbox3"><b>Media.</b> Send your queries here</a>
                    </div>
                    <!--Media Modal-->
                    <amp-lightbox id="my-lightbox3" layout="nodisplay">
                        <div class="lightbox lightbox-new" on="tap:my-lightbox3.close" role="button" tabindex="0">
                            <div class="contain-box">
                                <div class="close" on="tap:my-lightbox3.close" role="button" tabindex="0"></div>
                                <h2 class="pl-3">Media and Press</h2>
                                <h3 class=""><a href="tel:888 502 6650">support@albertapayments.com</a></h3>
                                <a href="mailto:support@albertapayments.com" class="btn btn-block white py-2 my-4 col-md-6 mx-auto call-btn">Email us</a> 
                            </div>
                        </div>
                    </amp-lightbox>
                    <!-- <div class="modal fade" id="media-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                        <div class="modal-content text-center">
                            <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            <div class="modal-body">
                            <h2 class="py-3">Media and Press</h2>
                            <h3 class=""><a href="tel:888 502 6650">support@albertapayments.com</a></h3>
                            <a href="mailto:support@albertapayments.com" class="btn btn-block white py-2 my-4 col-md-6 mx-auto call-btn">Email us</a>
                            </div>
                        </div>
                        </div>
                    </div> -->
                    <!--Media Modal-->
                    <figure class="img-for-dsk">
                    <amp-img height="100" width="100" src="../img/send-mail.png" alt="Send Email here >>"></amp-img>
                    </figure>
                </div>
                <div class="col-md-6">
                    <?php if(isset($_GET['type'])){
                        if ($_GET['type'] == "err"){
                            if($_GET['msg'] == "smting"){
                                $msg = "Something went wrong, Unable to send message now"; 	
                                $class = "alert  alert-danger";
                            }else if ($_GET['msg'] == "capCErr")
                            {
                                $msg = "The security code entered was incorrect	"; 	
                                $class = "alert  alert-danger";
                                
                            }
                        }
                        ?>
                            <div class = "<?php echo $class; ?>"><?php echo $msg; ?></div>
                        <?php }	?> 
                    <div> 
                    
                    </div>
                    <form class="sample-form"
                            method="post"
                            action-xhr="mails"
                            target="_top" on="submit-success:AMP.navigateTo(url='<?= BASEURL ?>amp/thank-you')">
                    <!-- <form method="post" action-xhr="mails.php"   id="registerForm" target="_top"> -->
                    <!-- <label class="sr-only" for="inlineFormInputGroupUsername2">Username</label> -->
                    <div class="elemts-check"> 
                        <input type = "text" name = "serverHost" value = "<?php echo $_SERVER['REMOTE_ADDR']; ?>" />

                    </div>
                    <div class="input-group mb-2 mr-sm-2">
                        <div class="input-group-prepend name-bg">
                        <div class="input-group-text"><amp-img height="40" width="35" src="../img/name.png" alt="Name"></amp-img></div>
                        </div>
                        <input type="text" class="form-control required" id="name" name="name" placeholder="Name" title="Please enter your Name" required="">
                    </div>
                    <div class="input-group mb-2 mr-sm-2">
                        <div class="input-group-prepend company-bg">
                        <div class="input-group-text"><amp-img height="40" width="35" src="../img/company.png" alt="Company"></amp-img></div>
                        </div>
                        <input type="text" class="form-control required" id="company" name="company" placeholder="Business Name" title="Please enter your business name" required="">
                    </div>
                    <div class="input-group mb-2 mr-sm-2">
                        <div class="input-group-prepend phone-bg">
                        <div class="input-group-text"><amp-img height="40" width="35" src="../img/phone.png" alt="Phone"></amp-img></div>
                        </div>
                        <input type="text" class="form-control required" id="phone" name="phone" placeholder="Phone" title="Please enter your Phone No" required="">
                    </div>
                    <div class="input-group mb-2 mr-sm-2">
                        <div class="input-group-prepend email-bg">
                        <div class="input-group-text"><amp-img height="40" width="35" src="../img/email.png" alt="Email"></amp-img></div>
                        </div>
                        <input type="email" class="form-control required" id="email" name="email" placeholder="Email" title="Please enter your Email" required="">
                    </div>
                    
                        <div class="input-group prod-check mb-2 mr-sm-2">
                        <div class="prod-bord">
                        <legend>Choose a Product</legend>
                            <div class="form-check form-check-inline">
                            <input class="form-check-input checking" type="checkbox" name="inlineCheckbox[]" id="check1" value="Payment Processing"  title="Please enter your Email">
                            <p class="form-check-label" >Payment Processing</p>
                            </div>
                            <div class="form-check form-check-inline">
                            <input class="form-check-input checking" type="checkbox" name="inlineCheckbox[]" id="check2" value="POS" title="Please enter your Email">
                            <p class="form-check-label" >POS</p>
                            </div>
                            <div class="form-check form-check-inline">
                            <input class="form-check-input checking" type="checkbox" name="inlineCheckbox[]" id="check3" value="Kiosks" title="Please enter your Email">
                            <p class="form-check-label" >Kiosks</p>
                            </div>
                            <div class="form-check form-check-inline">
                            <input class="form-check-input checking" type="checkbox" name="inlineCheckbox[]" id="check4" value="ATM" title="Please enter your Email">
                            <p class="form-check-label" >ATM</p>   
                            </div>
                        </div>
                        </div>

                    <div class="form-group">
                    <div class="input-group mb-2 mr-sm-2">
                        <div class="input-group-prepend req-bg">
                        <div class="input-group-text"><amp-img height="40" width="35" src="../img/message.png" alt="Requirements"></amp-img></div>
                        </div>
                        <textarea class="form-control required" id="comments" name="comments" rows="3" placeholder="Requirements" title="Please enter your Requirements" required=""></textarea>
                    </div>
                    </div>
                    
                    <div class="form-group">
                    <div class="input-group mb-2 mr-sm-2">
                    <div class="row"> 
                        <div class="col-md-12">
                        Human verification code
                        </div>
                        <div class="col-md-12">
                            <amp-img height="50" width="100" src="captcha.php" /></amp-img>
                            
                        </div>
                        <div submit-error>
                            <template type="amp-mustache">
                                {{ errmsg }}
                            </template>
                        </div>
                        </div>
                    </div>
                    </div>
                    
                    
                    <div class="input-group mb-2 mr-sm-2">
                        <div class="input-group-prepend phone-bg">
                        <div class="input-group-text"><amp-img height="40" width="35" src="../img/padlock.png" alt="Phone"></amp-img></div>
                        </div>
                        <input type="text" name="captcha_code" size="10" maxlength="7" class="form-control required"  title="Please enter security vertification" placeholder = "Enter Human verification code here" required=""/>
                    </div>
                    
                    <div class="input-group mb-2 mr-sm-2">
                            
                    </div>
                    
                    
                    
                    
                    

                    <!--<div class="form-group">
                    <div class="input-group mb-2 mr-sm-2">
                        <div class="g-recaptcha resol" id="recaptcha" data-sitekey="6LfcaH8UAAAAAFQXH9cb6M35ITyHAmsr0BNV8zoC"></div> 
                        
                        <span class="msg-error"></span>
                    </div>
                    </div>-->
                    <!-- <button type="submit" class="btn btn-primary contact-btn mb-2">Send us</button> -->
                    <button type="submit" name="sbt_form" class="btn btn-primary contact-btn mb-2 subaction" value="Submit">Submit</button>
                    </form>
                </div>
                    <figure class="img-for-mob">
                    <amp-img height="318" width="595" src="../img/send-mail.png" layout="responsive" alt="Send Email here >>"></amp-img>
                    </figure>
                </div>
                </div>
            </div>
            </section>
            <!--Contact us section ends-->


            <?php include "includes/footer.php"; ?>
    </body>
</html>        