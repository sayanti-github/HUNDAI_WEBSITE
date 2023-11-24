<?php include('include/config.php'); ?>
<?php include('include/header.php'); ?>
  <style>
  @media screen and (min-width: 992px) {
        .single-add-box .image img{
        height: 280px;
max-height: 280px;
}
}
          .all-page-banner.item-one {
    background-image: url(https://www.hyundai.com/content/dam/hyundai/in/en/data/hyundai-story/hyundai-motor-india/Hyundai_motor_india_About_us_MainKV_PC_1860x540_1_Elantra-with-smily-girl-kid_revised.jpg);
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
                            <h1>Hyundai Promise</h1>
                            <ul>
                                <li>
                                    <a style="color:#fff;" href="index.html">home</a>
                                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                                </li>
                                <li>hyundai promise</li>
                            </ul>
                            <p class="pt-2 text-white">Call Us: &nbsp;+919062826063,&nbsp;+919748021364</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End All Page Banner -->

        <!-- Start Recently Added -->
        <section class="recent-add-section pt-100 pb-70">
            <div class="container">
                <div class="row">
				<?php 
				 $select = "select * from `hy_promise` order by `id` asc";
				 $results = $admin->get_results($select);
				 foreach($results as $value){
					 $selectimage = $admin->get_row("select * from `hy_promise_image` where `promise_id`='".$value['id']."' order by id desc Limit 1");
				?>
                    <div class="col-md-6 col-lg-3">
                        <div class="single-add-box">   
                            <div class="image">
                                <a href="promises/<?php echo $value['id']; ?>">
                                    <img src="<?php echo SITEURL;?>promise/<?php echo $selectimage['image']; ?>" alt="Image">
                                </a>
                            </div> 
                            <div class="image-caption-wrapper">
                                <div class="add-box-content">
                                    <a href="promises/<?php echo $value['id']; ?>"><h3><?php echo $value['title'];?></h3></a>
                                    <div class="info-list">
                                        <ul>
                                            <li><i class="flaticon-car"></i><?php echo $value['manufacture'];?></li>
                                            <li><i class="flaticon-shifter"></i><?php echo $value['kms'];?> km</li>
                                            <li><i class="flaticon-facebook-placeholder-for-locate-places-on-maps"></i><?php echo $value['location']; ?></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="add-box-bottom">
                                    <a href="promises/<?php echo $value['id']; ?>"><h5>Rs. <?php echo number_format($value['price']);?></h5></a>
                                    <ul class="react">
                                        <li><i class="flaticon-heart"></i></li>
                                        <li><i class="flaticon-speed-meter"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
				 <?php } ?>
                </div>
            </div>
        </section>
<?php include('include/footer.php'); ?>