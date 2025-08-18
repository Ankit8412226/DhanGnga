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

	$aname=$_POST['aname'];
	
			$ss=$_POST['country'];
$query = "SELECT * FROM services  WHERE sid = '$ss'";
$result = mysqli_query($connect, $query);
$row = mysqli_fetch_assoc($result);
		$las=$row['sname'];

		$ab=$_POST['state'];

$query = "SELECT * FROM subcatogry  WHERE scid = '$ab'";
$result = mysqli_query($connect, $query);
$row = mysqli_fetch_assoc($result);
	$amain=$row['scname'];

	$atype=$_POST['city'];


	$code=$_POST['code'];
	$atype=$_POST['city'];
	$aamount=$_POST['aamount'];
	$atime=$_POST['atime'];
	$bio=$_POST['bio'];

    $filename = $_FILES['image']['name'];
    $tempname = $_FILES['image']['tmp_name']; 
    $folder = "image/associ/".$filename; 
	move_uploaded_file($tempname,$folder);
	
    $sql = "INSERT INTO advc(aname,bio,amain,atype,las,aamount,atime,image,code) values ('$aname','$bio','$atype','$amain','$las','$aamount','$atime','$folder','$code')";
    mysqli_query($connect, $sql) or die($sql);
    header('location: associate.php');
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
        <a href="#" class="nav-link">Contact</a>
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
            <h1>Associate Upload</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Associate Upload</li>
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
                <h3 class="card-title">Associate Page</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
		<form action="" method="post" enctype="multipart/form-data">
                <div class="card-body">
                 
                  <div class="form-group">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" name="aname" class="form-control" id="date" placeholder="Name">
                      </div>
                  </div> 
				 <div class="card-body">
                <div class="input-group mb-3">
                    <select class="form-select" id="country" name="country">
                        <option selected disabled>Select Services</option>
                        <?php $query = "SELECT * FROM services ";
										$result = mysqli_query($connect, $query);
										while ($row = mysqli_fetch_assoc($result)) {    ?>
                            <option value="<?php echo $row['sid']; ?>"> <?php echo $row['sname']; ?> </option>
										
										<?php } ?>
                    </select>
                </div>
                <div class="input-group mb-3">
                    <select class="form-select" id="state" name='state'>
                        <option selected disabled>Select SubServices</option>
                    </select>
                </div>
                <div class="input-group mb-3">
                    <select class="form-select" id="city" name="city">
                        <option selected disabled>Select Type</option>
                    </select>
                </div>
                 <label for="vehicle3">It Is Such Type Of Advice..</label>
                    <select class="form-select" id="country" name="code">
                        <option value="0">No </option>
                        <option value="1">Yes </option>
										
                    </select>
            </div>
      				  <div class="form-group">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Amount</label>
                        <input type="text" name="aamount" class="form-control" placeholder="Amount">
                      </div>
                  </div> 
                  <div class="form-group">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Bio</label>
                        <input type="text" name="bio" class="form-control" placeholder="Bio">
                      </div>
                  </div> 
				  <div class="form-group">
                    <div class="form-group">
                        <label for="Main">Time</label>
                        <input type="text" name="atime" class="form-control" placeholder="Time">
                      </div>
                  </div> 
				 
				  
				
				  <div class="form-group">
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
                  </div>
                  
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
                <h3 class="card-title">Associate Are</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Name</th>
                    <th>Bio</th>
                    <th>Image</th>
                    <th>Amount</th>
                    <th>Category</th>
                    <th>Sub Category</th>
                    <th>Type</th>
                    <th>Delete</th>
                  
                  </tr>
                  </thead>
                  <tbody>
                   <?php 
										 $query = "SELECT * FROM advc ";
										$result = mysqli_query($connect, $query);
										while ($row = mysqli_fetch_assoc($result)) {
    
											?>
                  <tr>
                    <td><?php echo $row['aname'];?></td>
                    <td><?php echo $row['bio'];?></td>
                    <td> <img src="<?php echo $row['image'];?>" width="100" height="100" alt=""></td>
                    <td><?php echo $row['aamount'];?></td>
                    <td><?php echo $row['amain'];?></td>
                    <td><?php echo $row['atype'];?></td>
                   <td><?php echo $row['las'];?></td>

				   <td><a href="deleteasoc.php?id=<?php echo $row['advid']; ?>"> <span class="btn btn-info">Delete</span></a></td>
                  
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
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"  crossorigin="anonymous"></script>
      <script>
    // County State

    $('#country').on('change', function() {
        var country_id = this.value;
        // console.log(country_id);
        $.ajax({
            url: 'state.php',
            type: "POST",
            data: {
                country_data: country_id
            },
            success: function(result) {
                $('#state').html(result);
                // console.log(result);
            }
        })
    });
    // state city
    $('#state').on('change', function() {
        var state_id = this.value;
        // console.log(country_id);
        $.ajax({
            url: 'city.php',
            type: "POST",
            data: {
                state_data: state_id
            },
            success: function(data) {
                $('#city').html(data);
                // console.log(data);
            }
        })
    });
</script>
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