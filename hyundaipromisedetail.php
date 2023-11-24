<?php include('include/config.php'); ?>
<?php include('include/header.php'); ?>
<?php $result = $admin->get_single_result('hy_promise','id',$_GET['id'],'Hyundai Promise'); ?>
 <style type="text/css">
            .particles-js-canvas-el {
                position: absolute;
                top: 0;
            }
            .book_service,.test_drive{
                    background-color: #002c5f;
                    color: #fff;
                    padding: 10px 20px;
                    margin-right: 20px;
            }
            .all-page-banner.item-one {
    background-image: url(https://www.hyundai.com/content/dam/hyundai/in/en/data/hyundai-story/hyundai-motor-india/Hyundai_motor_india_About_us_MainKV_PC_1860x540_1_Elantra-with-smily-girl-kid_revised.jpg);
}
            .list-inline {
    padding-left: 0;
    list-style: none;
}
.carIcons .list-inline-item:not(:last-child) {
    margin-right: 10px;
}
.carIcons .list-inline>li {
    padding-right: 0px;
    display:inline-grid;
}
.list-inline-item:not(:last-child) {
    margin-right: 0.5rem;
}
.list-inline>li {
    display: inline-block;
}
.list-inline-item {
    display: inline-block;
}
.carIcons .list-inline li .fa {
    color: #fff;
    font-size: 20px;
}
.buttons_custom li{
    display:inline-block;
    padding-right:10px;
}
.buttons_custom{
    margin-top:20px;
}
.list-inline li .fa {
    font-size: 14px;
    color: #99999999;
}
.iconStyle {
    background: #002c5f;
    padding: 15px 25px;
    border-radius: 10px;
}
.iconText {
    font-size: 14px;
    padding-top: 13px;
    text-align: center;
    margin-left: -10px;
}
.pb30 {
    padding-bottom: 30px;
}
.certifiedBenefits {
    font-size: 44px;
    padding-top: 30px;
    padding-bottom: 20px;
}
.car-details-sidebar h4 {
    border-bottom: 3px solid #00aad2;
    padding-bottom: 10px;
}
.certifiedIcon p {
    border-bottom: 1px solid #ccc;
    padding-bottom: 10px;
}
.certifiedIcon p i {
    font-size: 15px;
    font-style: normal;
    color: #000;
    padding-right: 15px;
}
            .perfperformance {
    background-image: url(assets/img/hyundaigrand10nios/carousel/performance-bg-1920x2248.jpg);
    background-position: center;
    background-size: cover;
}

#demo img{
    height:550px;
}

.perfperformance h3.feature-head, .perfperformance .feature-sm-block p {
    color: #fff;

            .book_service:hover,.test_drive:hover{
                color:#fff;
            }
            .test_drive{
                margin-right:0px;
            }
            .mobile-nav img{
                max-width: 235px;
            }
    

        </style>
        <!-- Start SearchBox Modal -->
        <!-- <div class="search">
            <button type="button" class="close">×</button>
            <form>
                <input type="search" value="" class="form-control" placeholder="Type Here..." />
                <button type="submit" class="btn theme-btn"><i class="fa fa-search"></i> Search</button>
            </form>
        </div> -->
        <!-- End SearchBox Modal -->

        <!-- Start All Page Banner -->
        <section class="all-page-banner item-one">
            <div class="d-table">
                <div class="d-tablecell">
                    <div class="container">
                        <div class="banner-text text-center">
                            <h1><?php echo $result['title']; ?></h1>
                            <ul>
                                <li>
                                    <a style="color:#fff;" href="index.html">home</a>
                                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                                </li>
                                <li><?php echo $result['title']; ?></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <div class="container py-5"><div class="row">
        <div class="col-sm-5">
    <div class="ng-scope" ng-controller="BuyViewPublicCtrl">
       <div class="car-details-sidebar">
       
       <div class="container carIcons p-0">
	       <div class="col-md-12 pt-4 pl-1 p-0">
		       	<ul class="list-inline">
		       		<li class="list-inline-item">
		       			<i class="fa fa-calendar iconStyle mr-3" title="Model Year"></i>
		       			<div class="iconText"><span><?php echo $result['manufacture']; ?></span></div>
		       		</li>
		       		<li class="list-inline-item">
		       			<i class="fa flaticon-steering-wheel iconStyle mr-3" title="Kilometer Driven"></i>
		       			<div class="iconText"><span>&nbsp;<?php echo $result['kms']; ?></span>Km</div>
		       		</li>
		       		
		       		<li class="list-inline-item">
		       			<i class="fa fa-truck iconStyle mr-3" title="Color"></i>
		       			<div class="iconText"><span><?php echo str_replace(' ','<br/>',$result['color']); ?></span></div>
		       		</li>
		       		
		       
		       		<li class="list-inline-item" title="Viewed By">
		       			<i class="fa fa-eye iconStyle"></i>
		       			<div class="iconText"><span style="padding-left:10px;">0</span></div>
		       		</li>
		       	</ul>
	       	</div>
       </div>
      <!--  
       <div class="pl-1 buyEMIcalc">
			<a href="/footer/emi-calculator">EMI Calculator</a>
       </div>
       
        -->
       
       
       
       
       
       <!-- ngIf: stock.certifiedId == 10 --><div class="pb30 ng-scope" ng-if="stock.certifiedId == 10">
       
       <div class="certifiedBenefits">
						<h4>Certified Car Benefits</h4>
					</div>
					<div class="certifiedIcon">
						<p>
							Backed By Hyundai Warranty
						</p>
						<p>
						Road Side Assistance
						</p>
						<p>
						Free Service
						</p>
						<p>
						Re-energized with Hyundai Genuine Parts
						</p>
						<p>
							Presence in more than 290 cities
						</p>
					</div>
					
					<ul class="p-0 buttons_custom">
					    <li><a class="book_service" href="/contactus.html">Enquire Now</a></li>
					</ul>
       </div><!-- end ngIf: stock.certifiedId == 10 -->
          </div>
        </div>
    
</div>
    <div class="col-sm-7">
        <div id="demo" class="carousel slide" data-bs-ride="carousel">
<?php 
$select = "select * from `hy_promise_image` where `promise_id`='".$result['id']."' order by `id` desc";
$results = $admin->get_results($select);
?>
  <!-- Indicators/dots -->
  <div class="carousel-indicators">
  <?php 
  $i= 0;
  foreach($results as $key=>$value){
	  $i++;
 if($i==1)
					 {
						 $add = 'active';
					 }else{
						 $add = '';
					 }
	  ?>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="<?php echo $key; ?>" class="<?php echo $add; ?>"></button>
  <?php } ?>
   
    </div>
  
  <!-- The slideshow/carousel -->
  <div class="carousel-inner">
 <?php 
				 
				 $i= 0;
				 foreach($results as $value){
					 $i++;
					 if($i==1)
					 {
						 $add = 'active';
					 }else{
						 $add = '';
					 }
				?>
    <div class="carousel-item <?php echo $add; ?>">
      <img src="<?php echo SITEURL;?>/promise/<?php echo $value['image']; ?>" alt="Los Angeles" class="d-block" style="width:100%">
    </div>
				 <?php } ?>
    
    
  </div>
  
  <!-- Left and right controls/icons -->
  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
  
  <div class="pt-4"> 
            <!-- <h6>Elite i20</h6>    -->
              <table class="table table-bordered">
                 
                <tbody>                
                 <tr>
                       <th scope="row">Price</th>
                    <td><span><span>₹&nbsp;<?php echo number_format($result['price']); ?></span></span>
                    <!-- <i class="fa fa-inr" /> [[${#numbers.formatDecimal(selStock.price, 0, 'COMMA', 0, 'POINT')}]]</span> -->
                    </td>
                  </tr>
                          <tr>
                    <th scope="row">No. of Owner(s)</th>
                    <td>
                     <div class="ng-binding"><?php echo $result['owner']; ?> </div>
	                 	  
	                 	  
	                 	  
                    </td>
                  </tr>
                   <tr>
                    <th scope="row">KMs Driven</th>
                    <td><span>&nbsp;<?php echo $result['kms']; ?></span> </td>
                    <!-- <td><span th:inline="text">[[${#numbers.formatDecimal(selStock.milage, 0, 'COMMA', 0, 'POINT')}]]</span> Kms</td> -->
                  </tr>
                   <tr>
                    <th scope="row">Color</th>
                    <td><span><?php echo $result['color']; ?></span></td>
                  </tr>
                  <tr>
                    <th scope="row">Year of Manufacturer</th>
                    <td><span><?php echo $result['manufacture']; ?></span></td>
                  </tr>
                </tbody>
              </table>
         </div>
</div></div>




</div></div>
        <!-- End Single Shop -->


<?php include('include/footer.php'); ?>