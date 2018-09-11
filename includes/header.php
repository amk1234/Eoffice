<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Eoffice | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link href="dist/css/custom.css" rel="stylesheet" type="text/css"/>
  <link rel="stylesheet" href="bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  
   <link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b>LTE</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class=""><a href="#" >Inventory Search </a></li>
          <li class=""><a href="#" >Email Alerts</a></li>
          <li class=""><a href="#" >Post Listing</a></li>
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                      page and may cause design problems
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-red"></i> 5 new members joined
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-user text-red"></i> You changed your username
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          <!-- Tasks: style can be found in dropdown.less -->
          <li class="dropdown tasks-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger">9</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 9 tasks</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Design some buttons
                        <small class="pull-right">20%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">20% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Create a nice theme
                        <small class="pull-right">40%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">40% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Some task I need to do
                        <small class="pull-right">60%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">60% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Make beautiful transitions
                        <small class="pull-right">80%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">80% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                </ul>
              </li>
              <li class="footer">
                <a href="#">View all tasks</a>
              </li>
            </ul>
          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">Alexander Pierce</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  Alexander Pierce - Web Developer
                  <small>Member since Nov. 2012</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
         
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active ">
          <a href="index.php">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            
          </a>
          
        </li>
        <!--MAILBOX-->
      <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Mailbox</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href=""><i class="fa fa-circle-o"></i>Inbox </a></li>
            <li><a href=""><i class="fa fa-circle-o"></i>Sent Item </a></li>
          </ul>
        </li>
        <!--MAILBOX-->
        
        
       <!--TRADER-->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Trader</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="customer.php"><i class="fa fa-circle-o"></i>Customer </a></li>
            <li><a href="vendor.php"><i class="fa fa-circle-o"></i>Vendor</a></li>
          </ul>
        </li>
       <!--TRADER-->
     
       
       <!--SALES-->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Sales</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
        <li><a href="create-invoice.php"><i class="fa fa-circle-o"></i>Create Invoice</a></li>
            <li><a href="all-invoice.php"><i class="fa fa-circle-o"></i>All Invoice</a></li>
             <li><a href="processing-order.php"><i class="fa fa-circle-o"></i>Processing Order</a></li>
             <li><a href="pending-shipment.php"><i class="fa fa-circle-o"></i>Pending Shipment</a></li>
             <li><a href="delivered-order-list.php"><i class="fa fa-circle-o"></i>Delivered Order</a></li>
          </ul>
        </li>
       <!--SALES-->
       
       <!--PURCHASE-->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Purchase</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="new-purchase.php"><i class="fa fa-circle-o"></i> New Purchase</a></li>
            <li><a href="purchase-list.php"><i class="fa fa-circle-o"></i>Purchase List</a></li>
             <li><a href="received-products.php"><i class="fa fa-circle-o"></i>Received Products</a></li>
            
          </ul>
        </li>
       <!--PURCHASE-->
       
       
       <!--STORE-->
        <!--PURCHASE-->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Store</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="raw-material.php"><i class="fa fa-circle-o"></i> Raw Material</a></li>
            <li><a href="work-in-progress.php"><i class="fa fa-circle-o"></i>Work In Progress</a></li>
             <li><a href="finished-goods.php"><i class="fa fa-circle-o"></i>Finished Goods</a></li>
             <li><a href=""><i class="fa fa-circle-o"></i>Tools</a></li>
            
          </ul>
        </li>
       <!--PURCHASE-->
       <!--STORE-->
      
      
       <!--PRODUCT & SERVICES-->
       <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Product & Serivces</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="product-list.php"><i class="fa fa-circle-o"></i> Product List</a></li>
           
             <li><a href="category-list.php"><i class="fa fa-circle-o"></i>Category</a></li>
            
          </ul>
        </li>
       <!--PRODUCT & SERVICES-->
       
       <!--TRANSACTION-->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Transaction</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="add-transaction.php"><i class="fa fa-circle-o"></i> Add Transaction</a></li>
            <li><a href="transaction-list.php"><i class="fa fa-circle-o"></i>Transaction List</a></li>
            
            
          </ul>
        </li>
       <!--TRANSACTION-->
       
       <!--DEPRECIATION-->
         <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Depreciation</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="add-asset.php"><i class="fa fa-circle-o"></i>Add Asset</a></li>
            <li><a href="asset-list.php"><i class="fa fa-circle-o"></i>Asset List</a></li>
          </ul>
        </li>
       <!--DEPRECIATION-->
       
       <!--EMPLOYEE-->
         <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Employee</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="add-employee.php"><i class="fa fa-circle-o"></i>Add Employee</a></li>
            <li><a href="employee-list.php"><i class="fa fa-circle-o"></i>Employee List</a></li>
            <li><a href="employee-award.php"><i class="fa fa-circle-o"></i>Employee Award</a></li>
            <li><a href="reimbursement-list.php"><i class="fa fa-circle-o"></i>Reimbursement</a></li>
          </ul>
        </li>
       <!--EMPLOYEE-->
       
       <!--PAYROLL-->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Payroll</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="make-payment.php"><i class="fa fa-circle-o"></i>Make Payment</a></li>
            <li><a href="generate-payslip.php"><i class="fa fa-circle-o"></i>Generate Payslip</a></li>
            <li><a href="employee-list-payment.php"><i class="fa fa-circle-o"></i>List Payment</a></li>
            
          </ul>
        </li>
       <!--PAYROLL-->
       
       <!--REPORTS-->
        <li>
          <a href="reports.php">
            <i class="fa fa-file"></i> <span>Reports</span>
            
          </a>
          
        </li>
       <!--REPORTS-->
       
       <!--NOTICE BOARD-->
         <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Add Notice</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href=""><i class="fa fa-circle-o"></i>Add Notice</a></li>
            <li><a href=""><i class="fa fa-circle-o"></i>Manage Notice</a></li> 
          </ul>
        </li>
       <!--NOTICE BOARD-->
    
       <!--ADMIN USER-->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Admin User</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href=""><i class="fa fa-circle-o"></i>Manage User</a></li>
            <li><a href=""><i class="fa fa-circle-o"></i>Create User</a></li> 
          </ul>
        </li> 
       <!--ADMIN USER-->
       
       <!--OFFICE SETTIGNS-->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Office Settings</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href=""><i class="fa fa-circle-o"></i>Department</a></li>
            <li><a href=""><i class="fa fa-circle-o"></i>Job Titles</a></li>
            <li><a href=""><i class="fa fa-circle-o"></i>Job Categories</a></li>
            <li><a href=""><i class="fa fa-circle-o"></i>Work Shifts</a></li>
            <li><a href=""><i class="fa fa-circle-o"></i>Working Days</a></li>
            <li><a href=""><i class="fa fa-circle-o"></i>Holiday List</a></li>
            <li><a href=""><i class="fa fa-circle-o"></i>Leave Type</a></li>
            <li><a href=""><i class="fa fa-circle-o"></i>Pay Grades</a></li>
            <li><a href=""><i class="fa fa-circle-o"></i>Salary Componenet</a></li>
            <li><a href=""><i class="fa fa-circle-o"></i>Employment Status</a></li>
            <li><a href=""><i class="fa fa-circle-o"></i>Tax</a></li>
            
          </ul>
        </li>
       <!--OFFICE SETTIGNS-->
       
       <!--SETTINGS-->
        <li>
          <a href="reports.php">
            <i class="fa fa-file"></i> <span>Settings</span>
            
          </a>
          
        </li>
       <!--SETTINGS-->
       
     
     

    </section>
    <!-- /.sidebar -->
  </aside>
