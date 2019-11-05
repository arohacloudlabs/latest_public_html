    <!-- Footer section starts-->
	<footer class="footer-bg">
		<div class="footer-bord">
			<div class="container py-7">
				<div class="row footer-cont">
					<div class="col-md-6">
						<h5>About</h5>
						<p class="text-justify">Alberta Payments and Technology provides with Retail Management Solutions like Point-of-sale systems and Merchant Processing services to Small and Medium Retail Businesses. Our retail management solutions has been inspired by businesses like your’s to improve operational efficiency and increase profitability by providing innovative technology at affordable pricing. We understand the need to get solutions quickly during store operation hours and our customer service team makes sure to provide with prompt assistance to keep your business moving each day.</p>
						<a class="footer-call" href="tel:888-502-6650">
					       <img src="img/ring-icon.png" alt="Ring me">
					         <span> 
					          <span class="white">Ring us</span>
					          <small class="white">(888) 502 6650</small>
					        </span>
				    	 </a>
					</div>
					<div class="col-md-3">
						<h5>Navigations</h5>
						<ul>
							<!-- <li><a href="">Retail solutions</a></li>
							<li><a href="">Products</a></li> -->
							<li><a href="payment-processing">Payment processing</a></li>
							<li><a href="rms-pos">Retail management solutions / POS</a></li>
							<li><a href="industry-relations">Industry relations</a></li>
							<li><a href="testimonials">Customer testimonials</a></li>
							<li><a href="agent-program">Agent program</a></li>
							<li><a href="about-us">Our story</a></li>
							<li><a href="dosti">Our values</a></li>	
						</ul>
					</div>
					<div class="col-md-3">
						<h5>Important links</h5>
						<ul>
							<li><a href="contact-us">Contact us</a></li>
							<li><a href="https://www.albertapayments.com/blog/">Blog</a></li>
							<li><a href="news-and-events">News & events</a></li>
							<li><a href="careers">Career</a></li>
						</ul>
						<!-- <a href="javascript;"><img src="img/Apple.png" alt="Download on app store" width="150px"></a> -->
					</div>
				</div>
			</div>
			<div class="container text-center">
				<div class="social-icons">
					<ul>
						<li><a href="https://www.facebook.com/albertapayments" target="_blank"><img src="img/facebook.png" alt="facebook"></a></li>
						<li><a href="https://twitter.com/AlbertaPayments?lang=en" target="_blank"><img src="img/twitter.png" alt="twitter"></a></li>
						<li><a href="https://www.instagram.com/alberta.payments/" target="_blank"><img src="img/instagram.png" alt="instagram"></a></li>
						<li><a href="https://www.youtube.com/channel/UC1cA4B72v5xv3i-RSEKnrTw" target="_blank"><img src="img/youtube.png" alt="youtube"></a></li>
						<li><a href="https://www.linkedin.com/company/alberta-paymentstech" target="_blank"><img src="img/linkedin.png" alt="Linkedin"></a></li>
					</ul>
				</div>
				<div class="footer-text text-center">
					<p><small>Alberta Payments LLC is an Independent Sales Organization (ISO) with its own sponsoring bank. Alberta Payments LLC is registered with all major credit card processing networks.</small></p>
					<p>Copyright &copy; 2018 - 2028. Alberta Payments, LLC. Headquartered in New Jersey, USA. All rights reserved.</p>
					<p><a href="privacy-policy">Privacy policy</a> <span>|</span><a href="terms-of-use">Terms & conditions</a><span>|</span><a href="sitemap">Sitemap</a></p>
				</div>
			</div>
		</div>

	</footer>
    <!-- Footer section ends-->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.js"></script>
    <script src="js/custom.js"></script>
    <script>
		$('#main-slider').carousel({
			interval: 4000,
			cycle: true
		});
		$('#event-slider').carousel({
			interval: 4000,
			cycle: true
		});
		
		$(function(){	$('#video-modal').on('show.bs.modal', function (event) {	  var button = $(event.relatedTarget) ;	  var recipient = button.data('video') ;	  var modal = $(this);	 	  modal.find('.modal-body video').attr('src','videos/'+recipient+'.mp4');	});});

		//Active class
			
		$(document).ready(function($){
			// Get current path and find target link
			var path = window.location.pathname.split("/").pop();

			// Account for home page with empty path
			if ( path == '' ) {
			path = 'index.php';
			}

			var target = $('nav a[href="'+path+'"]');
			// Add active class to target link
			target.parent('li').addClass('active');
		});
	</script>


<script src="https://code.jquery.com/jquery-3.3.1.js"></script>

	<script>
			$(window).on('load',(function () {
				var t = window.location.hash;
				if ("" != t) {
						$("html, body").scrollTop(0);
						var a = $(t).offset() ? $(t).offset().top : 0;
						$("html, body").animate({
								scrollTop: a - 200
						}, 500)
				}
			}));
		
			
			$(".scroll-hash").click(function(e){
			e.preventDefault();

				var dataHash = "#"+$(this).attr('data-hash');
				var t = dataHash;
				var a = $(t).offset() ? $(t).offset().top : 0;
				$("html, body").animate({scrollTop: a - 180}, 500);
			});
	</script>
	
  </body>
</html>