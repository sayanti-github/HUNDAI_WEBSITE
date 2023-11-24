<?php include('include/config.php'); ?>
<?php $admin->is_not_login(); ?>
<?php include('include/header.php'); ?>
<?php include('include/sidebar.php'); ?>
<?php 

$result = $admin->get_single_result('hy_accessories_cars','id',$_GET['id'],'accessories');

?>
<div class="content-wrapper">
    <!-- Content Header (Page header) --> 
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Update Car</h1>
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
                <h3 class="card-title">Update Car</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="process" method="POST" enctype="multipart/form-data">
			  <input type="hidden" name="action" value="UpdateCarAccessories">
			  <input type="hidden" name="id" value="<?php echo $result['id']; ?>">
			  <input type="hidden" name="page" value="update-car?id=<?php echo $_GET['id']; ?>">
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
                    <input type="text" class="form-control" name="title" placeholder="Enter Title" id="title" value="<?php echo $result['car_name']; ?>">
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
                 <input type="hidden" name="filename" value="<?php echo $result['image']; ?>">
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
		  </div>
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
</body>
</html>