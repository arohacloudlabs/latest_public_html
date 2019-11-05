<?php include('includes/meta.php'); ?>
<!doctype html>
<html amp lang="en">
	<head>
		<?php include('includes/head.php') ?>
		
		 <!-- <script async src="https://cdn.ampproject.org/v0.js"></script> -->
   		    <script async custom-element="amp-sidebar" src="https://cdn.ampproject.org/v0/amp-sidebar-0.1.js"></script>
            <script async custom-element="amp-form" src="https://cdn.ampproject.org/v0/amp-form-0.1.js"></script>
            <script async custom-element="amp-lightbox" src="https://cdn.ampproject.org/v0/amp-lightbox-0.1.js"></script>
            <script async custom-element="amp-video" src="https://cdn.ampproject.org/v0/amp-video-0.1.js"></script>
	</head>
	<body>
        <?php include('includes/header.php'); 
            $testarr[]=array('name'=>'Atul Patel','alt'=>'Atul','img'=>'atul-thumb.png','playimg'=>'play-btn-orange.png','nameimg'=>'name-bg-orange.png','vid'=>'Atul_Service_Years_Customer_9.mp4','title'=>'&nbsp');
            $testarr[]=array('name'=>'Jignesh Patel','alt'=>'Jignesh','img'=>'jignesh-thumb.png','playimg'=>'play-btn-maroon.png','nameimg'=>'name-bg-maroon.png','vid'=>'Jignesh _Card_POS_Customer_6.mp4','title'=>'Card & POS Customer');
            $testarr[]=array('name'=>'Hardik Patel','alt'=>'Hardik','img'=>'hardik-thumb.png','playimg'=>'play-btn-aqua.png','nameimg'=>'name-bg-aqua.png','vid'=>'Hardik Patel_Card_POS_Customer 2.mp4','title'=>'Card & POS Customer');
            $testarr[]=array('name'=>'Pankaj Patel','alt'=>'Pankaj','img'=>'pankaj-thumb.png','playimg'=>'play-btn-purple.png','nameimg'=>'name-bg-purple.png','vid'=>'Pankaj_Acct_Service_customer.mp4','title'=>'Account Services Customer');
            $testarr[]=array('name'=>'Piyush Patel','alt'=>'Card Customer','img'=>'card-customerl-thumb.png','playimg'=>'play-btn-yellow.png','nameimg'=>'name-bg-yellow.png','vid'=>'Card_Customer_1.mp4','title'=>'Card Customer');
            $totitem=count($testarr);
            $gcontent=file_get_contents('includes/weeksel.txt');
            $splitarr=explode('|',$gcontent);
            $index = $splitarr[0];
            $curdate=new DateTime();
            $oltime=new DateTime($splitarr[1]);
            $interval = $curdate->diff($oltime);
            $diffdays= $interval->format('%a');
            //if($diffdays>5){
                $newindex=$index+2;
                if($newindex>=$totitem)$newindex=0;
                file_put_contents('includes/weeksel.txt',$newindex.'|'.date('Y-m-d'));	
            //}
            $newarr[]=$testarr[$index];
            $newarr[]=($index+1)==$totitem?$testarr[0]:$testarr[$index+1];
        ?>
        <div class="breadcrumbs mt-breadcrumb">
            <div class="container">
                <p><span><a href="index.php">Home</a></span> <span><amp-img height="12" width="12" src="../img/arrow-point-to-right.png"></amp-img></span> <span>Testimonials</span></p>
            </div>
        </div>
        <section class="testimonials">
            <div class="container pt-7 pb-4">
                <div class="col-md-9 m-auto text-center">
                    <h1 class="futuramedium">Customer<span class="futurabold"> testimonials</span></h1>
                    <h4 class="test-sub-head">See what <b>clients</b> are saying</b> about <b>Alberta Payments</b></h4>
                    <p class="pb-3">At Alberta we have a strong track record of repeat business from our clients, while continuing to win new customers on a consistent basis. We're proud to present the following testimonials from some of our clients.</p>
                </div>
            </div>
            <div class="container pb-5 testi-wrap">
                <div class="row">
                    <div class="col-md-10">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card c-aqua text-center">
                                    <div class="card-top">
                                        <amp-img height="100" width="100" class="mx-auto" src="../img/testimonials/test2.png" alt="Name"></amp-img>
                                        <h5 class="card-title">Hardik Patel</h5>
                                        <span>Card processing & POS customer</span>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text">Alberta Payments provides great retail management solution for our POS & payment processing system</p>
                                        <amp-img height="47" width="47" class="play-btn" src="../img/play-btn-aqua-white.png" alt="Play Video" on="tap:my-lightbox1" tabindex="0" role="button"></amp-img>
                                        <amp-lightbox id="my-lightbox1" layout="nodisplay">
                                            <div class="lightbox lightbox-new" on="tap:my-lightbox1.close" role="button" tabindex="0">
                                                <div class="contain-box">
                                                    <div class="close" on="tap:my-lightbox1.close" role="button" tabindex="0"></div>
                                                        <amp-video width="480" height="270" src="<?= BASEURL; ?>videos/Hardik Patel_Card_POS_Customer 2.mp4" layout="responsive" controls  autoplay>
                                                            <div fallback>
                                                                <p>Your browser doesn\'t support HTML5 video.</p> 
                                                            </div> 
                                                            <source type="application/vnd.apple.mpegurl" src="<?= BASEURL; ?>videos/Hardik Patel_Card_POS_Customer 2.mp4"> 
                                                            <source type="video/mp4" src="<?= BASEURL; ?>videos/Hardik Patel_Card_POS_Customer 2.mp4">
                                                        </amp-video>    
                                                    </div>
                                                </div>
                                            </amp-lightbox>
                                        </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card c-yellow text-center">
                                    <div class="card-top">
                                        <amp-img height="100" width="100" class="mx-auto" src="../img/testimonials/test1.png" alt="Name"></amp-img>
                                        <h5 class="card-title">Piyush Patel</h5>
                                        <span>Card customer<br>&nbsp</span>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text">Alberta Payments is the best card processors and payment solutions company in New Jersey</p>
                                        <amp-img height="47" width="47" class="play-btn" src="../img/play-btn-maroon-white.png" alt="Play Video" on="tap:my-lightbox2" tabindex="0" role="button"></amp-img>
                                        <amp-lightbox id="my-lightbox2" layout="nodisplay">
                                            <div class="lightbox lightbox-new" on="tap:my-lightbox2.close" role="button" tabindex="0">
                                                <div class="contain-box">
                                                    <div class="close" on="tap:my-lightbox2.close" role="button" tabindex="0"></div>
                                                        <amp-video width="480" height="270" src="<?= BASEURL; ?>videos/Card_Customer_1.mp4" layout="responsive" controls autoplay>
                                                            <div fallback>
                                                                <p>Your browser doesn\'t support HTML5 video.</p> 
                                                            </div> 
                                                            <source type="application/vnd.apple.mpegurl" src="<?= BASEURL; ?>videos/Card_Customer_1.mp4"> 
                                                            <source type="video/mp4" src="<?= BASEURL; ?>videos/Card_Customer_1.mp4">
                                                        </amp-video>    
                                                    </div>
                                                </div>
                                            </amp-lightbox>
                                    </div>
                                </div>
                            </div>          
                
                            <div class="col-md-4">
                                <div class="card c-blue text-center">
                                    <div class="card-top">
                                        <amp-img height="100" width="100" class="mx-auto" src="../img/testimonials/test9.png" alt="Name"></amp-img>
                                        <h5 class="card-title">Jignesh Patel</h5>
                                        <span>Card processing & POS customer</span>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text">I am very happy with their services and love their customer support.</p>
                                        <amp-img height="47" width="47" class="play-btn" src="../img/play-btn-maroon-white.png" alt="Play Video" on="tap:my-lightbox3" tabindex="0" role="button"></amp-img>
                                        <amp-lightbox id="my-lightbox3" layout="nodisplay">
                                            <div class="lightbox lightbox-new" on="tap:my-lightbox3.close" role="button" tabindex="0">
                                                <div class="contain-box">
                                                    <div class="close" on="tap:my-lightbox3.close" role="button" tabindex="0"></div>
                                                        <amp-video width="480" height="270" src="<?= BASEURL; ?>videos/Jignesh _Card_POS_Customer_6.mp4" layout="responsive" controls  autoplay>
                                                            <div fallback>
                                                                <p>Your browser doesn\'t support HTML5 video.</p> 
                                                            </div> 
                                                            <source type="application/vnd.apple.mpegurl" src="<?= BASEURL; ?>videos/Jignesh _Card_POS_Customer_6.mp4"> 
                                                            <source type="video/mp4" src="<?= BASEURL; ?>videos/Jignesh _Card_POS_Customer_6.mp4">
                                                        </amp-video>    
                                                    </div>
                                                </div>
                                            </amp-lightbox>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card c-purple text-center">
                                    <div class="card-top">
                                        <amp-img height="100" width="100" class="mx-auto" src="../img/testimonials/test4.png" alt="Name"></amp-img>
                                        <h5 class="card-title">Pankaj Patel</h5>
                                        <span>Account services customer<br>&nbsp</span>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text">Have known Alberta Payments for past 5 years and have 5 accounts card processing accounts with them. They are very reasonably priced and have amazing customer service</p>
                                        <amp-img height="47" width="47" class="play-btn" src="../img/play-btn-purple-white.png" alt="Play Video" on="tap:my-lightbox4" tabindex="0" role="button"></amp-img>
                                        <amp-lightbox id="my-lightbox4" layout="nodisplay">
                                            <div class="lightbox lightbox-new" on="tap:my-lightbox4.close" role="button" tabindex="0">
                                                <div class="contain-box">
                                                    <div class="close" on="tap:my-lightbox4.close" role="button" tabindex="0"></div>
                                                        <amp-video width="480" height="270" src="<?= BASEURL; ?>videos/Pankaj_Acct_Service_customer.mp4" layout="responsive" controls  autoplay>
                                                            <div fallback>
                                                                <p>Your browser doesn\'t support HTML5 video.</p> 
                                                            </div> 
                                                            <source type="application/vnd.apple.mpegurl" src="<?= BASEURL; ?>videos/Pankaj_Acct_Service_customer.mp4"> 
                                                            <source type="video/mp4" src="<?= BASEURL; ?>videos/Pankaj_Acct_Service_customer.mp4">
                                                        </amp-video>    
                                                    </div>
                                                </div>
                                            </amp-lightbox>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-md-2">
                        <div class="video-sec text-center">
                            <?php foreach($newarr as $k=>$loop){
                                echo' <div class="videos-list col-md-4">
                                <div class="video-thumb" on="tap:my-lightbox'.$k.'">
                                <amp-img height="168" width="168" src="../img/'.$loop['img'].'" alt="'.$loop['alt'].'"></amp-img>
                                <amp-img height="47" width="47" class="play-btn" src="../img/'.$loop['playimg'].'" alt="Play Video"></amp-img>
                                <amp-img height="40" width="195" class="name-board" src="../img/'.$loop['nameimg'].'" alt="Play Video"></amp-img>
                                <span class="test-vid-name">'.$loop['name'].'</span>
                                </div>
                                <span class="name-desc">'.$loop['title'].'</span>
                            </div>
                            <div class="vid-divider"></div>
                            <amp-lightbox id="my-lightbox'.$k.'" layout="nodisplay">
                                <div class="lightbox lightbox-new" on="tap:my-lightbox'.$k.'.close" role="button" tabindex="0">
                                    <div class="contain-box">
                                        <div class="close" on="tap:my-lightbox'.$k.'.close" role="button" tabindex="0"></div>
                                            <amp-video width="480" height="270" poster="'.BASEURL.'videos/'.$loop['vid'].'" layout="responsive" controls autoplay>
                                            <div fallback>
                                                <p>Your browser doesn\'t support HTML5 video.</p> 
                                            </div> 
                                            <source type="application/vnd.apple.mpegurl" src="'.BASEURL.'videos/'.$loop['vid'].'"> 
                                            <source type="video/mp4" src="'.BASEURL.'videos/'.$loop['vid'].'">
                                        </amp-video>    
                                    </div>
                                </div>
                            </amp-lightbox>
                    ';
                            
                            }?>         
                
                        </div> -->
                    </div>
                </div>
            </div>
        </section>
        <div class="text-center my-3">
            <a href="contact-us.php" class="c2a-btn">Ask for a demo!</a>
        </div>
        <?php include "product-slider.php"; ?>
        <?php include "includes/footer.php"; ?>
    </body>
</html>        