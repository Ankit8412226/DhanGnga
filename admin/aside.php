 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
      <img src="dist/img/sai.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Naye Soch|Board</span>
    </a>
<?php
												$mobile=$_SESSION['admin'];
                                    $query = "SELECT * FROM admin WHERE mobile = '$mobile'";
                                    $result = mysqli_query($connect, $query);
                                    $row = mysqli_fetch_assoc($result);
                                    ?>
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/sai.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $row['name'];?> </a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
 

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
           
            <li class="nav-item">
                <a href="index.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard</p>
                </a>
              </li>
          </li>
           <li class="nav-item">
            <a href="payment.php" class="nav-link">
              <i class="nav-icon fas fa-list-alt"></i>
              <p>
                Naye Soch Payment Data
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
          
          </li>  <li class="nav-item">
            <a href="dpayment.php" class="nav-link">
              <i class="nav-icon fas fa-list-alt"></i>
              <p>
                Dhanganga App Payment 
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
          
          </li>
          <li class="nav-item">
            <a href="data.php" class="nav-link">
              <i class="nav-icon fas fa-list-alt"></i>
              <p>
                Enquiry Data
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
          
          </li>   <li class="nav-item">
            <a href="membership.php" class="nav-link">
              <i class="nav-icon fas fa-list-alt"></i>
              <p>
                Membership Data
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
          
          </li>
           <li class="nav-item">
            <a href="nsnk.php" class="nav-link">
              <i class="nav-icon fas fa-list-alt"></i>
              <p>
                Naye Soch Naya Kadam Data
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
          
          </li>
		    <li class="nav-item">
            <a href="netralaydata.php" class="nav-link">
              <i class="nav-icon fas fa-glasses"></i>
              <p>
                Netralay Enquiry Data
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
          </li>
           <li class="nav-item">
            <a href="netrat.php" class="nav-link">
              <i class="nav-icon fas fa-glasses"></i>
              <p>
                Netralay Terms & Conditions

                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
          </li>
            <li class="nav-item">
            <a href="busdata.php" class="nav-link">
              <i class="nav-icon fas fa-glasses"></i>
              <p>
                Netralay Booking Data
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
          </li>
		  <li class="nav-item">
            <a href="contactdata.php" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Contact Data
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
          
          </li>
		   <li class="nav-item">
            <a href="addservices.php" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                Add Services
              </p>
            </a>
          </li> 
		  <li class="nav-item">
            <a href="subcat.php" class="nav-link">
              <i class="nav-icon far fa-plus-square"></i>
              <p>
                Add SubServices
              </p>
            </a>
          </li> 
           <li class="nav-item">
            <a href="addtype.php" class="nav-link">
              <i class="nav-icon far fa-plus-square"></i>
              <p>
                Add Type
              </p>
            </a>
          </li> 
		  <li class="nav-item">
            <a href="associate.php" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                Add Associate
              </p>
            </a>
          </li> 
             <li class="nav-item">
            <a href="about.php" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                About
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
           
          </li>
		  	  <li class="nav-item">
            <a href="offeradd.php" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                Add Offer
              </p>
            </a>
          </li>
		  <li class="nav-item">
            <a href="newsadd.php" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                News/Event
              </p>
            </a>
          </li>

		  <li class="nav-item">
            <a href="addteam.php" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                Team
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="benefits.php" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
               NSNK Benefits
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
           
          </li>
         <li class="nav-item">
            <a href="termsn.php" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Terms And Conditions
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
           
          </li>
		<!--  <li class="nav-item">
            <a href="general.php" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Netralay Page
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
           
          </li>
       
         
          <li class="nav-item">
            <a href="gallery.php" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                About Page
              </p>
            </a>
          </li>  

		  <li class="nav-item">
            <a href="gallery.php" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                Service Page
              </p>
            </a>
          </li>  -->
	  <li class="nav-item">
            <a href="nsnkabout.php" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                NSNK Introduction
              </p>
            </a>
          </li> 
		 
		 	  <li class="nav-item">
            <a href="nsnkmember.php" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                NSNK Member
              </p>
            </a>
          </li> 
            <li class="nav-item">
            <a href="terms.php" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                NSNK Terms and Conditions

              </p>
            </a>
          </li> 
           <li class="nav-item">
            <a href="setting.php?id=<?php echo $mobile ?>" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Profile Setting
              </p>
            </a>
          </li>
        <li class="nav-item">
            <a href="logout.php" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Logout
              </p>
            </a>
          </li>
        
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>