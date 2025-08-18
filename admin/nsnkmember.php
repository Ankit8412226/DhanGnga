<?php
include "conn.php";
 session_start();
 if(empty($_SESSION["admin"]))
{
	header('location:login.php');
}
else
{
?>
<?php

if (isset($_POST['submit'])) {
	$n=$_POST['n'];
	$p=$_POST['p'];
	$bio=$_POST['bio'];
	
    $filename = $_FILES['image']['name'];
    $tempname = $_FILES['image']['tmp_name']; 
    $folder = "image/".$filename; 
    move_uploaded_file($tempname,$folder);
	
    $sql = "INSERT INTO nmember(name,position,image,bio) values ('$n','$p','$folder','$bio')";
    mysqli_query($connect, $sql) or die($sql);
    header('location: nsnkmember.php');
}

?> 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Naye Soch Naya Kadam | Bhagalpur</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index.php" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Member</a>
      </li>
    </ul>

    <!-- Right navbar links -->
  
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
 <?php include "aside.php"?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Naye Soch Naya Kadam</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Member Add</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Member Add</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
		<form action="" method="post" enctype="multipart/form-data">
                <div class="card-body">
                 
                 
				  <div class="form-group">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" name="n" class="form-control" placeholder="Name">
                      </div>
                  </div> 
				  <div class="form-group">
                    <div class="form-group">
                        <label for="Main">Position</label>
                        <input type="text" name="p" class="form-control" placeholder="Position">
                      </div>
                  </div> 
				 		 <div class="form-group">
                    <div class="form-group">
                        <label for="Main">Bio</label>
                        <input type="text" name="bio" class="form-control" placeholder="Bio">
                      </div>
                  </div>		  <div class="form-group">
                    <div class="form-group">
                        <label for="Main">Image</label>
                        <input type="file" name="image" class="form-control" placeholder="image">
                      </div>
                  </div> 

				  
				
				 <!-- <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="image" class="custom-file-input"  required="">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>-->
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->


            <!-- /.card -->

          
                    <!-- <label for="customFile">Custom File</label> -->

                 
                  </div>
                  </div>
                
       
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>

	
			<section>
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Avillable Offer Are</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Name</th>
                    <th>Position</th>
                                        <th>Bio</th>

                                      <th>image</th>

                  
                  </tr>
                  </thead>
                  <tbody>
                   <?php 
										 $query = "SELECT * FROM nmember ";
										$result = mysqli_query($connect, $query);
										while ($row = mysqli_fetch_assoc($result)) {
    
											?>
                  <tr>
                    <td><?php echo $row['name'];?></td>

                    <td><?php echo $row['position'];?></td>
                                                            <td><?php echo $row['bio'];?></td>

                                        <td>              
                                        <img src="<?php echo $row['image'];?>" alt="" style="width:200px;height:170px;">
</td>

                       <td><a href="editm.php?id=<?php echo $row['nmid']; ?>"> <span class="btn btn-info">Update</span></a></td>

                     <td><a href="deletem.php?id=<?php echo $row['nmid']; ?>"> <span class="btn btn-info">Delete</span></a></td>

                  
                  </tr>
      
                  </tbody>
                <?php } ?>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
</section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src="plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
$(function () {
  bsCustomFileInput.init();
});
</script>
</body>
</html>
<?php } ?>