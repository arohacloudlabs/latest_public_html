<?php include('includes/meta.php'); ?>
<!doctype html>
<html amp lang="en">
	<head>
		<?php include('includes/head.php') ?>
		
		 <!-- <script async src="https://cdn.ampproject.org/v0.js"></script> -->
   		<script async custom-element="amp-sidebar" src="https://cdn.ampproject.org/v0/amp-sidebar-0.1.js"></script>
   		<script async custom-element="amp-form" src="https://cdn.ampproject.org/v0/amp-form-0.1.js"></script>
	</head>
	<body>
        <?php include('includes/header.php'); ?>
            <div class="error">
            <div class="container">
                
                <div class="mt-breadcrumb error-link">
                    <div class="error-img">
                        <h1>4<amp-img height="90" width="90" src="../img/err.png"></amp-img>4</h1>
                        <p>Page not found</p>
                        <span>The page you are looking for doesn't exist. Please go back or click any of the below icon for new direction.</span>
                    </div>
                    <ul>
                        <li><a href="https://www.albertapayments.com/amp"><span>Home page</span></a></li>
                        <li><a href="contact-us.php"><span>Contact us</span></a></li>
                        </ul>
                    
                    
                </div>
            </div>
        </div>
        <?php include "includes/footer.php"; ?>
    </body>
</html>        