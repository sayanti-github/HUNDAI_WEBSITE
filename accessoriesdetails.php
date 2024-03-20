<?php include('include/config.php'); ?>
<?php include('include/header.php'); ?>
<?php $result = $admin->get_single_result('hy_accessories_list','id',$_GET['id'],'https://mukeshhyundai.com/');
$name = $admin->get_single_field('car_name','hy_accessories_cars','id',$result['car_id']); ?>
<style>
.error{color:red;}
button.slick-prev.slick-arrow{
        left: -24px;
        top: 32px;
}
button.slick-next.slick-arrow{
        right: -26px;
    bottom: 34px;
}
.dkuywW {
    position: relative;
    width: 64px;
    margin: auto;
    display: none!important;
}
@media screen and (max-width: 600px) {
  button.slick-prev.slick-arrow{
           left: 31px;
    top: 35px;
    z-index: 1;
}
button.slick-next.slick-arrow{
      right: 26px;
    bottom: 42px;
}
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
                            <h1>product details</h1>
                            <ul>
                                <li>
                                    <a style="color:#fff;" href="index.html">home</a>
                                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                                </li>
                                <li>product details</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End All Page Banner -->

        <!-- Start Single Shop -->
        <section class="shop-section ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
					<?php 
							if(isset($_SESSION['success']))
							{
								echo '<p style="color:green">'.$_SESSION['success'].'</p>';
								unset($_SESSION['success']);
							}
							?>
                        <div class="left-shop">
                            <!-- Shop Cart Details Start -->
                            <div class="cart-details pb-70">
                                <div class="row align-items-center">
                                    <div class="col-md-12 col-lg-6">
                                        <div class="shop-single-slider">
                                            <div class="slider-for border-for">
                                                <div><img src="<?php echo SITEURL.'/uploads/accessories/'.$result['image']; ?>"></div>
												<?php
$select = "select * from `hy_accessories_images` where `accessory_id`='".$result['id']."' order by id asc";
				$rows   = $admin->num_rows($select);
				if($rows>0){
				$results = $admin->get_results($select);
				foreach($results as $value){ 
				echo '<div><img src="'.SITEURL.'/uploads/accessories/'.$value['image'].'" alt></div>';
				}
				}
												?>
                                              
                                               
                                            </div>
                                            <div class="slider-nav border-nav">
											 <div><img src="<?php echo SITEURL.'/uploads/accessories/'.$result['image']; ?>"></div>
                                                 <?php
$select = "select * from `hy_accessories_images` where `accessory_id`='".$result['id']."' order by id asc";
				$rows   = $admin->num_rows($select);
				if($rows>0){
				$results = $admin->get_results($select);
				foreach($results as $value){ 
				echo '<div><img src="'.SITEURL.'/uploads/accessories/'.$value['image'].'" alt></div>';
					
				}
				}
												?>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12 col-lg-6">
                                        <div class="product-details">
                                            <h3><?php echo $result['title']; ?></h3>
											<?php if($result['price']!=''){?>
                                            <div class="price">
                                                <span class="current">MRP : ₹  <?php echo $result['price']; ?>/-⋆</span>
                                            
                                            </div>
											<?php } ?>
                                            <p><?php echo $result['description']; ?></p>
                
                                            <ul class="p-0 buttons_custom">
                                                
					    <li><button type="button" id="firsts" class="btn btn-danger book_service" data-bs-toggle="modal" data-bs-target="#myModal">Enquire Now</button>
					        </li>
					</ul>
                                           
                                        </div> <!-- Products Details -->
                                    </div> 
                                </div> <!-- end row -->
                            </div>
                            <!-- End Shop Cart Details -->
                            
                            <!-- Shop Cart Tab Start -->
                            <section class="shop-cart-tab">
                                <div class="container">
                                    <ul class="nav nav-pills" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-bs-toggle="pill" href="#home">description</a>
                                        </li>
                                    </ul>
                                    <!-- Tab panes -->
                                    <div class="tab-content shop-tab">
                                        <div id="home" class="tab-pane active description">
                                            <h3>Description</h3>
                                           <p><?php echo $result['description']; ?></p>
                                        </div>
                    
                                        
                                    </div>
                                </div>
                            </section>
                            <!-- End Shop Cart Tab -->

                            <!-- Reletad Post -->
                            <!-- End Reletad Post -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Enquire Now</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
<form action="process.php" method="post" id="booknow">
      <!-- Modal body -->
      <div class="modal-body">

      	<!--input type="hidden" name="accessKey" value="17c3ebdb-ed53-42e7-b048-8d18406ad9b0"-->
        <input type="hidden" name="action" value="enquire_now">
        <input type="hidden" name="page" value="<?php echo 'accessoriesdetails/'.$result['id'].''; ?>">
        <div class="form-group mb-3">
            <input type="text" class="form-control" id="carname"  name="carname" value="<?php echo $name; ?>" required>
          </div>
        <div class="form-group mb-3">
            <input type="text" class="form-control" id="accessname"  name="accessname" value="<?php echo $result['title']; ?>" required>
          </div>
       <div class="form-group mb-3">
            <input type="text" class="form-control" id="uname" placeholder="Your Name" name="names" required>
          </div>
          <div class="form-group mb-3">
            <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
          </div>
          <div class="form-group mb-3">
            <input type="text" pattern="^[6-9]\d{9}$" title="Please enter your 10 digit phone number, starting with 9,8,7,6" class="form-control" id="phone" name="phone" placeholder="Phone Number" required>
            <input type="text" name="honeypot" style="display: none;">
          </div>

      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button id="firstds" class="book_service" type="submit">Submit</button>
      </div>
</form>
    </div>
  </div>
</div>
        <!-- End Single Shop -->
<?php include('include/footer.php'); ?>    