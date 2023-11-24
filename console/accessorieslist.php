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
            <h1 class="m-0"><?php echo $result['car_name'];?> Accessories</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index">Home</a></li>
              <li class="breadcrumb-item"><?php echo $result['car_name'];?> Accessories</li>
              
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
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title"><?php echo $result['car_name'];?> Accessories</h3>
				
				<h3 class="card-title" style="float:right">
                 <a href="add-accessory?id=<?php echo $result['id']; ?>"> <i class="fas fa-edit"></i>
                  Add Accessories</a>
                </h3>
              </div>
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
			  <?php
				$select = "select * from `hy_accessories_list` where `car_id`='".$result['id']."' order by id desc";
				$rows   = $admin->num_rows($select);
				if($rows>0){
				$results = $admin->get_results($select);
			  ?>
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Title</th>
                    <th>Type</th>
                    <th>Image</th>
                    <th>Action</th>
                    
                    
                  </tr>
                  </thead>
                  <?php foreach($results as $value){ ?>
                  <tr>
				   <td><?php echo $value['title']; ?>
                    </td>
                   <td><?php echo $admin->get_single_field('name','hy_accessories_types','id',$value['type']); ?>
                    </td>
                    <td><img src="<?php echo SITEURL; ?>/uploads/accessories/<?php echo $value['image']; ?>" alt="Not found"></td>
                   
                   
                    <td><a href="update-accessory?id=<?php echo $value['id']; ?>" class="btn btn-app">
                  <i class="fas fa-edit"></i> Edit
                </a></td>
                  </tr>
				<?php } ?>
                 
                </table>
				<?php }else{ ?>
				No Data Found
				<?php } ?>
              </div>
			 </div>
			</div>
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  


<?php include('include/footer.php'); ?>
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="plugins/jszip/jszip.min.js"></script>
<script src="plugins/pdfmake/pdfmake.min.js"></script>
<script src="plugins/pdfmake/vfs_fonts.js"></script>
<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script>
  $(function () {
   
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>