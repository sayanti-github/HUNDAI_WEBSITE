<?php include('include/config.php'); ?>
<?php include('include/header.php'); ?>
  
<?php $name = $admin->get_single_field('car_name','hy_accessories_cars','id',$_GET['id']); ?>
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
                            <h1>Hyundai <?php echo $name; ?></h1>
                            <ul>
                                <li>
                                    <a style="color:#fff;" href="index.html">home</a>
                                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                                </li>
                                <li>hyundai <?php echo $name; ?></li>
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
                
				<?php 
					$type = "select * from `hy_accessories_types`  order by `id` asc";
					$types = $admin->get_results($type);
					 foreach($types as $value){ 
					$select = "select * from `hy_accessories_list`where `car_id`='".$_GET['id']."' AND `type`='".$value['id']."' order by `id` asc";
					$rows = $admin->num_rows($select);
				    $results = $admin->get_results($select);
					if($rows>0){
				?><div class="row">
                    <h2 class="text-center pb-5"><?php echo $value['name']; ?></h2>
					<?php foreach($results as $val){?>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="single-shop">
                            <div class="shop-image">
                                <a href="accessoriesdetails/<?php echo $val['id'];?>"><img src="<?php echo SITEURL.'/uploads/accessories/'.$val['image']; ?>" alt="Image"></a>
                            </div>
                            <div class="image-caption">
                                <a href="accessoriesdetails/<?php echo $val['id'];?>"><h3><?php echo $val['title']; ?></h3></a>
                            </div>
                        </div>
                    </div>
					<?php }
						?>
						</div>
					 <?php } } ?>
                   
                
                
            </div>
        </section>
        <!-- End Single Shop -->

<?php include('include/footer.php'); ?>  