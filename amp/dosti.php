<?php include('includes/meta.php'); ?>

<!doctype html>

<html amp lang="en">

	<head>

		<?php include('includes/head.php') ?>

		 <!-- <script async src="https://cdn.ampproject.org/v0.js"></script> -->

         <script async custom-element="amp-form" src="https://cdn.ampproject.org/v0/amp-form-0.1.js"></script>

         <script async custom-element="amp-sidebar" src="https://cdn.ampproject.org/v0/amp-sidebar-0.1.js"></script>
         <script async custom-element="amp-video" src="https://cdn.ampproject.org/v0/amp-video-0.1.js"></script>
	</head>

	<body>

        <?php include('includes/header.php'); ?>

        <div id="main-slider" class="carousel slide carousel-fade dosti-carousel" data-ride="carousel">

        <!--<ol class="carousel-indicators">

            <li data-target="#main-slider" data-slide-to="0" class="active"></li>

            <li data-target="#main-slider" data-slide-to="1"></li>

            <li data-target="#main-slider" data-slide-to="2"></li> 

        </ol>-->

        <div class="inner-header dosti-header py-9">

            <div class="container">

                <amp-img src="img/DostiLogo.png" width="350" height="175" layout="responsive" alt="a sample image"></amp-img> 

                <h2 class="white pt-4 text-center" >a Way of doing business</h2>

               

            </div>

        </div>

        <!-- <div class="carousel-inner">

            <div class="carousel-item active">

            <amp-img height="530" width="1920" src="../img/dosti-bg.jpg" layout="responsive"></amp-img>

            </div>

        </div> -->

        </a>

        </div>

        <!--breadcrumbs -->

        <div class="breadcrumbs">

            <div class="container">

            <p><span><a href="index.php">Home</a></span> <span>

                <amp-img height="12" width="12" src="../img/arrow-point-to-right.png"></amp-img></span> <span>Our Values</span></p>

            </div>

        </div>

        <!--breadcrumbs ends-->

        <div class="dosti-text-mix">

        <div class="container py-7">

            <div class="dosti-backset">

                <div class="row">

                    <div class="col-md-6 col-sm-6">

                    <div class="dosti-img">

                        <amp-img height="297" width="524" src="../img/dosti-text-mix.jpg" layout="responsive" alt="Dosti"></amp-img>

                    </div>

                    </div>

                    <div class="col-md-6 col-sm-6">

                        <p class="karlo">

                        <span class="text-left"><i>"</i>Alberta se dosti karlo,

                        <span class="text-right">fayde mein rahoge<i>"</i></span></span>

                        </p>

                    </div>

                </div>

            </div>

        </div>  

        </div>

        <div class="dosti-power">

        <div class="container py-4">

            <div class="dosti-video">

                <amp-video width="480" height="270" src="<?php echo BASEURL; ?>videos/Prashant_AARA_Industry.mp4" layout="responsive" controls autoplay>

                    <div fallback>

                        <p>Your browser doesn't support HTML5 video.</p> 

                    </div> 

                    <source type="application/vnd.apple.mpegurl" src="<?php echo BASEURL; ?>videos/Sandip_CLosing_Dosti.mp4"> 

                    <source type="video/mp4" src="<?php echo BASEURL; ?>videos/Sandip_CLosing_Dosti.mp4">

                </amp-video>

                <p>Power of technology fueled by <span>Dosti!</span></p>

            </div>

        </div>

        </div>



        <div class="text-center my-3">

        <a href="contact-us.php" class="c2a-btn">Ask for a demo!</a>

        </div>



        <div class="dosti-clrlabel">

        <div class="container py-5">

            <div class="row">

                <div class="col-md-6 col-sm-6">

                <div class="label-content label-blue">

                    <div class="dosti-icon ">

                        <amp-img height="48" width="65" src="../img/label-icon1.png" alt="label-icon"></amp-img>

                    </div>

                    <p>Friendship isnt about doing one big thing' It is about doing millions of small things for the people you care about</p>

                </div>

                </div>

                <div class="col-md-6 col-sm-6">

                <div class="label-content label-org">

                    <div class="dosti-icon ">

                        <amp-img height="48" width="65" src="../img/label-icon2.png" alt="label-icon"></amp-img>

                    </div>

                    <p>Friendship is the greatest form of kinship </p>

                </div>

                </div>

            </div>

            <div class="row gap-row">

                <div class="col-md-6 col-sm-6">

                <div class="label-content label-purple">

                    <div class="dosti-icon ">

                        <amp-img height="48" width="65" src="../img/label-icon3.png" alt="label-icon">

                    </div>

                    <p>Friendship encompasses character-istics such as trust, transparency, loyalty, empathy, willingness to help and reliability.</p>

                </div>

                </div>

                <div class="col-md-6 col-sm-6">

                <div class="label-content label-green">

                    <div class="dosti-icon ">

                        <amp-img height="48" width="65" src="../img/label-icon4.png" alt="label-icon"></amp-img> 

                    </div>

                    <p>We believe in building relationship with friendliness, trust and transparency.</p>

                </div>

                </div>

            </div>

        </div>

        </div>

        <?php include "includes/footer.php"; ?>

    </body>

</html>        