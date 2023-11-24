<?php include('include/config.php'); ?>
<?php include('include/header.php'); ?>
  
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
                            <h1>Genuine Accessories</h1>
                            <ul>
                                <li>
                                    <a style="color:#fff;" href="index.html">home</a>
                                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                                </li>
                                <li>genuine-accessories</li>
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
				<?php 
				 $select = "select * from `hy_accessories_cars` order by `id` asc";
				 $results = $admin->get_results($select);
				 foreach($results as $value){
				?>
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <div class="single-shop">
                            <div class="shop-image">
                                <a href="accessories/<?php echo $value['id']; ?>"><img src="<?php echo SITEURL.'/uploads/'.$value['image']; ?>" alt="Image"></a>
                            </div>
                            <div class="image-caption">
                                <a href="accessories/<?php echo $value['id']; ?>"><h3><?php echo $value['car_name']; ?></h3></a>
                            </div>
                        </div>
                    </div>
				 <?php } ?>
                  
                </div>
            </div>
        </section>
        <!-- End Single Shop -->

        <!-- Start Top Footer -->
   <?php include('include/footer.php'); ?>    