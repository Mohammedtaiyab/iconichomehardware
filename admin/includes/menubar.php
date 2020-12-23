<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?php echo (!empty($admin['photo'])) ? '../images/'.$admin['photo'] : '../images/user.jpg'; ?>" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p><?php echo $admin['firstname'].' '.$admin['lastname']; ?></p>
        <a><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">REPORTS</li>
      <li><a href="home.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
      <li><a href="sales.php"><i class="fa fa-money"></i> <span>Sales</span></a></li>
      <li class="header">MANAGE</li>
      <li><a href="users.php"><i class="fa fa-users"></i> <span>Users</span></a></li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-barcode"></i>
          <span>Products</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="category.php"><i class="fa fa-circle-o"></i>Top Category</a> <ul class="treeview-menu">
          <li><a href="subcategory.php"><i class="fa fa-circle-o"></i>Sub Category</a></li></ul></li>
           <li><a href="client.php"><i class="fa fa-circle-o"></i>Company</a></li>
          <li><a href="products.php"><i class="fa fa-circle-o"></i>Product List</a></li>
          <li><a href="gallery.php"><i class="fa fa-circle-o"></i>Product Gallary</a></li>
          <li><a href="banner.php"><i class="fa fa-circle-o"></i>Banner</a></li>
             <li><a href="country.php"><i class="fa fa-circle-o"></i>Country</a></li>
        </ul>
      </li>
<!-- 

  <li class="treeview">
        <a href="#">
          <i class="fa fa-home"></i>
          <span>Home</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="ideanation.php"><i class="fa fa-circle-o"></i>Ideanation</a></li>
          <li><a href="career.php"><i class="fa fa-circle-o"></i>Career</a></li>
          <li><a href="enquiry.php"><i class="fa fa-circle-o"></i>Enquiry</a></li>
          <li><a href="client.php"><i class="fa fa-circle-o"></i>Clients</a></li>
          <li><a href="augallery.php"><i class="fa fa-circle-o"></i>Gallery</a></li>
        </ul>
      </li>
 -->

    </ul>
  </section>
  <!-- /.sidebar -->
</aside>