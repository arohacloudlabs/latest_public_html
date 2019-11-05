<?php include "includes/header.php"; 
// $testarr[]=array('name'=>'Tushar Patel','alt'=>'Tushar','img'=>'tushar-patel.png','playimg'=>'play-btn-navi-blue.png','nameimg'=>'name-bg-navi-blue.png','vid'=>'Tushar_AARAPresident_2018_Industry','title'=>'President, AARA');
 $testarr[]=array('name'=>'Atul Patel','alt'=>'Atul','img'=>'atul-thumb.png','playimg'=>'play-btn-orange.png','nameimg'=>'name-bg-orange.png','vid'=>'Atul_Service_Years_Customer_9.mp4','title'=>'&nbsp');
$testarr[]=array('name'=>'Jignesh Patel','alt'=>'Jignesh','img'=>'jignesh-thumb.png','playimg'=>'play-btn-maroon.png','nameimg'=>'name-bg-maroon.png','vid'=>'Jignesh _Card_POS_Customer_6.mp4','title'=>'Card & POS Customer');
$testarr[]=array('name'=>'Hardik Patel','alt'=>'Hardik','img'=>'hardik-thumb.png','playimg'=>'play-btn-aqua.png','nameimg'=>'name-bg-aqua.png','vid'=>'Hardik Patel_Card_POS_Customer 2.mp4','title'=>'Card & POS Customer');
// $testarr[]=array('name'=>'Sandip Patel','alt'=>'Sandip','img'=>'sandipl-thumb.png','playimg'=>'play-btn-orange.png','nameimg'=>'name-bg-orange.png','vid'=>'Sandip_CLosing_Dosti','title'=>'Card processing customer');
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
<!--breadcrumbs -->
  <div class="breadcrumbs mt-breadcrumb">
    <div class="container">
      <p><span><a href="index.php">Home</a></span> <span><img src="img/arrow-point-to-right.png"></span> <span>Testimonials</span></p>
    </div>
  </div>
<!--breadcrumbs ends-->
<!--Testimonials section starts-->
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
                <img class="mx-auto" src="img/testimonials/test2.png" alt="Name">
                <h5 class="card-title">Hardik Patel</h5>
                <span>Card processing & POS customer</span>
              </div>
                <div class="card-body">
                  <p class="card-text">Alberta Payments provides great retail management solution for our POS & payment processing system</p>
                </div>
            </div>
          </div>
          <!-- <div class="col-md-4">
            <div class="card c-maroon text-center">
              <div class="card-top">
                <img class="mx-auto" src="img/testimonials/vipul-patel.png" alt="Name">
                <h5 class="card-title">Vipul Patel</h5>
                <span>Card processing customer<br>&nbsp</span>
              </div>
                <div class="card-body">
                  <p class="card-text">Alberta Payments can help you make your business profitable</p>
                </div>
            </div>
          </div> -->
          
          
          <div class="col-md-4">
            <div class="card c-yellow text-center">
              <div class="card-top">
                <img class="mx-auto" src="img/testimonials/test1.png" alt="Name">
                <h5 class="card-title">Piyush Patel</h5>
                <span>Card customer<br>&nbsp</span>
              </div>
                <div class="card-body">
                  <p class="card-text">Alberta Payments is the best card processors and payment solutions company in New Jersey</p>
                </div>
            </div>
          </div>
          
          <div class="col-md-4">
            <div class="card c-blue text-center">
              <div class="card-top">
                <img class="mx-auto" src="img/testimonials/test9.png" alt="Name">
                <h5 class="card-title">Jignesh Patel</h5>
                <span>Card processing & POS customer</span>
              </div>
                <div class="card-body">
                  <p class="card-text">I am very happy with their services and love their customer support.</p>
                </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card c-purple text-center">
              <div class="card-top">
                <img class="mx-auto" src="img/testimonials/test4.png" alt="Name">
                <h5 class="card-title">Pankaj Patel</h5>
                <span>Account services customer<br>&nbsp</span>
              </div>
                <div class="card-body">
                  <p class="card-text">Have known Alberta Payments for past 5 years and have 5 accounts card processing accounts with them. They are very reasonably priced and have amazing customer service</p>
                </div>
            </div>
          </div>
          <!-- <div class="col-md-4">
            <div class="card c-blue text-center">
              <div class="card-top">
                <img class="mx-auto" src="img/testimonials/test7.png" alt="Name">
                <h5 class="card-title">Tushar Patel</h5>
                <span>President, AARA</span>
              </div>
                <div class="card-body">
                  <p class="card-text">During our relationship, Alberta Payments has developed a good understanding of our own vision and work flows and found a way to successfully complement our operations without causing any discontinuities or issues on our side.</p>
                </div>
            </div>
          </div> -->
          
        </div>
      </div>
      <div class="col-md-2">
        <div class="video-sec">
		<?php foreach($newarr as $k=>$loop){
			
			echo' <div class="videos-list col-md-4">
            <div class="video-thumb" data-toggle="modal" data-target="#video-modal" data-video="'.$loop['vid'].'">
              <img src="img/'.$loop['img'].'" alt="'.$loop['alt'].'">
              <img class="play-btn" src="img/'.$loop['playimg'].'" alt="Play Video">
              <img class="name-board" src="img/'.$loop['nameimg'].'" alt="Play Video">
              <span class="test-vid-name">'.$loop['name'].'</span>
            </div>
            <span class="name-desc">'.$loop['title'].'</span>
          </div>
          <div class="vid-divider"></div>';
		}?>         
         
        </div>
      </div>
    </div>
  </div>
</section>
<!--Testimonials section ends-->

<!--Video Modal 1-->
<!-- Modal -->
<div class="modal fade" id="video-modal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" id="htmlVideo" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <video src="" id="htmlVideo" controls></video>
        <!-- <video  controls>
          <source src="" type="video/mp4">
        </video> -->
      </div>
    </div>
  </div>
</div>

<div class="text-center my-3">
  <a href="contact-us.php" class="c2a-btn">Ask for a demo!</a>
</div>


<?php include "product-slider.php"; ?>

<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script>
  $(document).ready(function() {
    $('#video-modal').on('hidden.bs.modal', function() {
     $(this).find('.modal-body #htmlVideo').attr('src','');
    });
    
    $('.video-thumb').on('click',function(){
        var url = $(this).attr('data-video');
        $('#video-modal .modal-body #htmlVideo').attr('src','videos/'+url);
    });

  }); 
</script>
<?php include "includes/footer.php"; ?>