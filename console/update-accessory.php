<?php include('include/config.php'); ?>
<?php $admin->is_not_login(); ?>
<?php include('include/header.php'); ?>
<?php include('include/sidebar.php'); ?>
<?php
$result = $admin->get_single_result('hy_accessories_list','id',$_GET['id'],'accessories');
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) --> 
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Update <?php echo $admin->get_single_field('car_name','hy_accessories_cars','id',$result['car_id']);?> Accessory</h1>
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
                <h3 class="card-title">Add <?php echo $admin->get_single_field('car_name','hy_accessories_cars','id',$result['car_id']);?> Accessory</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="process" method="POST" enctype="multipart/form-data">
			  <input type="hidden" name="action" value="UpdateAccessories">
			 <input type="hidden" name="id" value="<?php echo $result['id']; ?>">
			<input type="hidden" name="page" value="update-accessory?id=<?php echo $result['id']; ?>">
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
                    <label for="title">Type</label>
                    <select name="type" class="form-control" name="type"  id="type">
					<option value="">Select Type</option>
					<?php 
					$results = $admin->get_results("select * from `hy_accessories_types` order by id asc");
					foreach($results as $value){
						if($value['id']==$result['type']){
							$selected = 'Selected';
						}else{
							$selected = '';
						}
						?>
					<option <?php echo $selected; ?> value="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></option>
					<?php } ?>
					</select>
                  </div>
                  <div class="form-group">
                    <label for="title">Price</label>
                    <input type="text" class="form-control" name="price" placeholder="Enter Price" id="price" value="<?php echo $result['price']; ?>">
                  </div>
                 <div class="form-group">
                    <label for="title">Description</label>
                    <textarea class="form-control" name="description" placeholder="Enter Description" id="description" ><?php echo $result['description']; ?></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" name="file">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                     
                    </div>
                  </div>
					  <div class="form-group">
                    <label for="exampleInputFile">Other Images</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" name="files[]" multiple >
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                     
                    </div>
                  </div>
						<input type="hidden" name="filename" value="<?php echo $result['image']; ?>">
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
				$select = "select * from `hy_accessories_images` where `accessory_id`='".$result['id']."' order by id asc";
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
                  
                     <td><img src="<?php echo SITEURL; ?>/uploads/accessories/<?php echo $value['image']; ?>" alt="Not found"></td>
                    
                    </td>
                   
                    <td><a href="javascript:void(0)" onclick="deleteaccessoryimage(<?php echo $value['id']; ?>)" class="btn btn-app">
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