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
  <!-- Ekko Lightbox -->
  <link rel="stylesheet" href="plugins/ekko-lightbox/ekko-lightbox.css">
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
            <h1>Gallery</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Gallery</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
   <section class="content">
      <div class="container-fluid">
        <div class="row">
         
          <div class="col-12">
            <div class="card card-primary">
              <div class="card-header">
                <h4 class="card-title">Slider</h4>
              </div>
              <div class="card-body">
                <div class="row">
				  <?php
                                    $query = "SELECT * FROM gallery ";
                                    $result = mysqli_query($connect, $query);
                                    while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                  <div class="col-sm-2">
                      <img src="<?php echo $row['image']; ?>"  class="img-fluid mb-2" alt="white sample"/>
                   	 <a href="delete.php?id=<?php echo $row['id']; ?>"> <span class="btn btn-info">Delete</span></a>

				   </a>
                  </div>
									<?php } ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section> 
	
	
	 <section class="content">
      <div class="container-fluid">
        <div class="row">
         
          <div class="col-12">
            <div class="card card-primary">
              <div class="card-header">
                <h4 class="card-title">Gallery</h4>
              </div>
              <div class="card-body">
                <div class="row">
				  <?php
                                    $query = "SELECT * FROM slider ";
                                    $result = mysqli_query($connect, $query);
                                    while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                  <div class="col-sm-2">
                      <img src="<?php echo $row['image']; ?> " style="width:220px;height:220px;" class="img-fluid mb-2" alt="white sample"/>
                   	 <a href="deleteslider.php?id=<?php echo $row['id']; ?>"> <span class="btn btn-info">Delete</span></a>

				   </a>
                  </div>
									<?php } ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section> 
	
	
	
	
	
	
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
    </div>
    <strong>Copyright &copy; 2021-2022 <a href="https://rajmunnitechnology.com">Developed By:  RajMunni Technology</a>.</strong> 
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Ekko Lightbox -->
<script src="plugins/ekko-lightbox/ekko-lightbox.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- Filterizr-->
<script src="plugins/filterizr/jquery.filterizr.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
      event.preventDefault();
      $(this).ekkoLightbox({
        alwaysShowClose: true
      });
    });

    $('.filter-container').filterizr({gutterPixels: 3});
    $('.btn[data-filter]').on('click', function() {
      $('.btn[data-filter]').removeClass('active');
      $(this).addClass('active');
    });
  })
</script>
</body>
</html>
<?php } ?>