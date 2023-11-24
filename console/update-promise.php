<?php include('include/config.php'); ?>
<?php $admin->is_not_login(); ?>
<?php include('include/header.php'); ?>
<?php include('include/sidebar.php'); ?>
<?php
$result = $admin->get_single_result('hy_promise','id',$_GET['id'],'hyundaipromise');
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) --> 
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"><?php echo $result['title']; ?> Car</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index">Home</a></li>
              
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        
        <div class="row">
          <!-- Left col -->
          <div class="col-md-12">
		   <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"><?php echo $result['title']; ?> Car</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="process" method="POST" enctype="multipart/form-data">
			  <input type="hidden" name="action" value="UpdatePromise">
			  <input type="hidden" name="id" value="<?php echo $result['id']; ?>">
			  <input type="hidden" name="page" value="update-promise?id=<?php echo $result['id']; ?>">
                <div class="card-body">
				<?php if(isset($_SESSION['error'])){?>
	<div class="alert alert-danger alert-dismissible">
	
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <h5><i class="icon fas fa-ban"></i> Alert!</h5>
                 <?php echo $_SESSION['error']; ?>
                </div>
	<?php 
	unset($_SESSION['error']);
	} ?><?php if(isset($_SESSION['success'])){?>
	<div class="alert alert-success alert-dismissible">
	
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <h5><i class="icon fas fa-check"></i> Alert!</h5>
                 <?php echo $_SESSION['success']; ?>
                </div>
	<?php 
	unset($_SESSION['success']);
	} ?>
                  <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" name="title" placeholder="Enter Title" id="title" value="<?php echo $result['title']; ?>">
                  </div>
                 
                  <div class="form-group">
                    <label for="price">Price</label>
                    <input type="text" class="form-control" name="price" placeholder="Enter Price" id="price" value="<?php echo $result['price']; ?>">
                  </div>
                 
                  <div class="form-group">
                    <label for="year">Manufacture</label>
                    <select  class="form-control" name="manufacture" id="year">
					<option value="">Select Manfacture</option>
					<?php for($i=2000;$i<=Date('Y');$i++) {
						if($i==$result['manufacture']){
							$selected = 'Selected';
						}else{
							$selected = '';
						}
						echo '<option '.$selected.' value="'.$i.'">'.$i.'</option>';
					}	?>
					</select>
                  </div>
                 
                 <div class="form-group">
                    <label for="owner">Owner</label>
                    <input type="text" class="form-control" name="owner" placeholder="Enter Owner" id="owner" value="<?php echo $result['owner']; ?>">
                  </div>
                 
                  <div class="form-group">
                    <label for="color">Color</label>
                    <input type="text" class="form-control" name="color" placeholder="Enter Color" id="color" value="<?php echo $result['color']; ?>">
                  </div>
                   <div class="form-group">
                    <label for="location">Location</label>
                    <input type="text" class="form-control" name="location" placeholder="Enter Location" id="location" value="<?php echo $result['location']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="kms">Kms Driven</label>
                    <input type="text" class="form-control" name="kms" placeholder="Enter Kms" id="kms" value="<?php echo $result['kms']; ?>">
                  </div>
                 
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" name="file[]" multiple>
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                     
                    </div>
                  </div>
                 
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
			  
            </div>
		  </div>
		  <div class="col-md-12">
		   <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"><?php echo $result['title']; ?> Images</h3>
              </div>
		  <?php
				$select = "select * from `hy_promise_image` where `promise_id`='".$result['id']."' order by id asc";
				$rows   = $admin->num_rows($select);
				if($rows>0){
				$results = $admin->get_results($select);
			  ?>
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    
                    <th>Image</th>
                   
                    <th>Action</th>
                    
                    
                  </tr>
                  </thead>
                  <?php foreach($results as $value){ ?>
                  <tr>
                  
                     <td><img src="<?php echo SITEURL; ?>/promise/<?php echo $value['image']; ?>" alt="Not found"></td>
                    
                    </td>
                   
                    <td><a href="javascript:void(0)" onclick="deleteimage(<?php echo $value['id']; ?>)" class="btn btn-app">
                  <i class="fas fa-trash"></i> Delete
                </a></td>
                  </tr>
				<?php } ?>
                 
                </table>
				<?php }else{ ?>
				No Image Found
				<?php } ?>
		  </div></div>
          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
          
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
<?php include('include/footer.php'); ?>
<script src="js/custom.js"></script>
</body>
</html>