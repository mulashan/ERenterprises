
<?php

?>
<!doctype html>
<html lang="en" dir="ltr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="icon" href="<?php echo base_url('public/assets/favicon1.ico')?>" type="image/x-icon"/>
<script src="<?php echo base_url('public/assets/plugins/jquery/jquery-3.4.1.min.js')?>"></script>
<script src="<?php echo base_url('public/assets/plugins/charts-c3/c3.min.css')?>"></script>
<script src="<?php echo base_url('public/assets/plugins/charts-c3/c3.min.js')?>"></script>
<script src="<?php echo base_url('public/assets/plugins/chartjs/chart.min.js')?>"></script>
<script src="<?php echo base_url('public/assets/plugins/sweetalert/sweetalert.min.js')?>"></script>
<!-- <script src="<?php echo base_url('public/assets/plugins/toastr/toastr.css')?>"></script> -->

<title>:: E&R Enterprises ::</title>
<?php
   
             ?>


<!-- Bootstrap Core and vandor -->
<link rel="stylesheet" href="<?php echo base_url('public/assets/plugins/bootstrap/css/bootstrap.min.css')?>" />
<link rel="stylesheet" href="<?php echo base_url('public/assets/plugins/bootstrap-5.0.2-dist/css/bootstrap.min.css')?>" />

 <link rel="stylesheet" href="<?php echo base_url('public/assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css')?>">
<link rel="stylesheet" href="<?php echo base_url('public/assets/plugins/daterangepicker/daterangepicker.css')?>">
<link rel="stylesheet" href="<?php echo base_url('public/assets/plugins/bootstrap4_datepicker/css/bootstrap-datetimepicker.min.css')?>">
<link rel="stylesheet" href="<?php echo base_url('public/assets/plugins/DataTables/datatables.min.css')?>">
 <link rel="stylesheet" href="<?php //echo base_url('public/assets/plugins/fullcalendar/fullcalendar.min.css')?>">
 <link rel="stylesheet" href="<?php //echo base_url('public/assets/plugins/dropify/css/dropify.min.css')?>" />
<link rel="stylesheet" href="<?php echo base_url('public/assets/plugins/sweetalert/sweetalert.css')?>" />

<!-- Plugins css -->
<link rel="stylesheet" href="<?php // echo base_url('public/assets/plugins/summernote/dist/summernote.css')?>"/>


<!-- Core css -->
<link rel="stylesheet" href="<?php echo base_url('public/assets/css/style.min.css')?>"/> 
<link rel="stylesheet" href="<?php echo base_url('public/assets/plugins/print-js/print.min.css')?>"/>

<script src="<?php echo base_url('public/assets/plugins/sweetalert/sweetalert.min.js')?>"></script>

<script src="<?php echo base_url('public/assets/bundles/lib.vendor.bundle.js')?>"></script>

<style>
    .elink li{
        padding:5px;
    }
    .elink li a{
        padding:3px;
        color:#fff;
    }
    .elink li a:hover{
        color:#fff;
    }
    .elink li a i{
        padding:5px;
    }
    .elink li .collapse{
        padding-left:-15px;
        color:red;
    }
    div.dataTables_filter > label {
  color: black;
}
#loader {
  position: fixed;
  z-index: 9999;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: #fff;
  display: flex;
  justify-content: center;
  align-items: center;
}

.spinner {
  width: 50px;
  height: 50px;
  border-radius: 50%;
  border: 5px solid #333;
  border-top-color: #fff;
  animation: spin 1s ease-in-out infinite;
}

@keyframes spin {
  from { transform: rotate(0deg); }
  to { transform: rotate(360deg); }
}

 .notification-badge {
            background-color: red;
            color: white;
            border-radius: 50%;
            padding: 4px 8px;
            font-size: 12px;
            vertical-align: super;
            line-height: 1;
            right: 10px;
        }
        a{
            text-decoration: none;
        }

       .help-icon {
    display: inline-block;
    position: relative;
    font-size: 13px; /* Adjust the size as needed */
    vertical-align: super;
    line-height: 1;
}

.icon1 {
    display: inline-block;
    width: 20px;
    height: 20px;
    background-color: #00BFFF;
    color: white;
    border-radius: 50%;
    text-align: center;
    line-height: 20px;
    font-size: 14px;
    font-weight: bold;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

/* Hover effect */
.icon1:hover {
    background-color: #2980b9;
}

  .tooltip-container {
  position: absolute;
  display: inline-block;
}

.tooltip-container::after {
  content: attr(data-tooltip);
  position: absolute;
   top: 50%;
  left: 300%; /* Position tooltip to the right of the container */
  margin-left: 100px;
  transform: translateX(-50%);
  background-color: #333;
  color: #fff;
  padding: 5px;
  border-radius: 5px;
  white-space: nowrap;
  opacity: 0;
  visibility: hidden;
  transition: opacity 0.3s;
  z-index: 1000;
  pointer-events: none; /* Prevents tooltip from interfering with mouse events */
}

.tooltip-container:hover::after {
  opacity: 1;
  visibility: visible;
}

  .schoolname {
            font-size: 20px;
            font-family: Arial, sans-serif;
            color: #f39c12;
            position: relative;
            text-transform: uppercase;
            text-shadow: 
                1px 1px 0 #e74c3c, 
                2px 2px 0 #c0392b, 
                3px 3px 0 #8e44ad;
        }
</style>

</head>
<body class="font-muli theme-cyan gradient">
    <!-- Page Loader -->
<!-- <div class="page-loader-wrapper">
    <div class="loader">
    </div>
</div> -->
<div id="loader">
  <div class="spinner"></div>
</div>


<div id="main_content">
    <!-- Start Main top header -->
    <div id="header_top" class="header_top">
        <div class="container">
            <div class="hleft">
                <a class="nav-link header-brand d-flex justify-content-start" href="index.html"><i class="fa fa-graduation-cap brand-logo"></i></a>
                <div class="dropdown">
                    <a href="javascript:void(0)" class="nav-link icon menu_toggle"><i class="fa fa-bars"></i></a>
                </div>
            </div>
            <div class="hright">
               
            <a href="javascript:void(0)" class="nav-link icon settingbar"><i class="fa fa-gears"></i></a>                
            </div>
        </div>
    </div>
    <!-- Start Rightbar setting panel -->
    <div id="rightsidebar" class="right_sidebar">
        <a href="javascript:void(0)" class="p-3 settingbar float-right"><i class="fa fa-close"></i></a>
        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#Settings" aria-expanded="true">Settings</a></li>
        </ul>
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane vivify fadeIn active" id="Settings" aria-expanded="true">
                <div class="mb-4">
                    <h6 class="font-14 font-weight-bold text-muted">Theme Color</h6>
                    <ul class="choose-skin list-unstyled mb-0">
                        <li data-theme="azure"><div class="azure"></div></li>
                        <li data-theme="indigo"><div class="indigo"></div></li>
                        <li data-theme="purple"><div class="purple"></div></li>
                        <li data-theme="orange"><div class="orange"></div></li>
                        <li data-theme="green"><div class="green"></div></li>
                        <li data-theme="cyan" class="active"><div class="cyan"></div></li>
                        <li data-theme="blush"><div class="blush"></div></li>
                        <li data-theme="white"><div class="bg-white"></div></li>
                    </ul>
                </div>
                <div class="mb-4">
                    <h6 class="font-14 font-weight-bold text-muted">Font Style</h6>
                    <div class="custom-controls-stacked font_setting">
                        <label class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" name="font" value="font-muli" checked="">
                            <span class="custom-control-label">Muli Google Font</span>
                        </label>
                        <label class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" name="font" value="font-montserrat">
                            <span class="custom-control-label">Montserrat Google Font</span>
                        </label>
                        <label class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" name="font" value="font-poppins">
                            <span class="custom-control-label">Poppins Google Font</span>
                        </label>
                    </div>
                </div>
                <div>
                    <h6 class="font-14 font-weight-bold mt-4 text-muted">General Settings</h6>
                    <ul class="setting-list list-unstyled mt-1 setting_switch">
                        <li>
                            <label class="custom-switch">
                                <span class="custom-switch-description">Night Mode</span>
                                <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-darkmode">
                                <span class="custom-switch-indicator"></span>
                            </label>
                        </li>
                        <li>
                            <label class="custom-switch">
                                <span class="custom-switch-description">Fix Navbar top</span>
                                <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-fixnavbar">
                                <span class="custom-switch-indicator"></span>
                            </label>
                        </li>
                        <li>
                            <label class="custom-switch">
                                <span class="custom-switch-description">Header Dark</span>
                                <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-pageheader">
                                <span class="custom-switch-indicator"></span>
                            </label>
                        </li>
                        <li>
                            <label class="custom-switch">
                                <span class="custom-switch-description">Min Sidebar Dark</span>
                                <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-min_sidebar">
                                <span class="custom-switch-indicator"></span>
                            </label>
                        </li>
                        <li>
                            <label class="custom-switch">
                                <span class="custom-switch-description">Sidebar Dark</span>
                                <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-sidebar">
                                <span class="custom-switch-indicator"></span>
                            </label>
                        </li>
                        <li>
                            <label class="custom-switch">
                                <span class="custom-switch-description">Icon Color</span>
                                <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-iconcolor">
                                <span class="custom-switch-indicator"></span>
                            </label>
                        </li>
                        <li>
                            <label class="custom-switch">
                                <span class="custom-switch-description">Gradient Color</span>
                                <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-gradient" checked="">
                                <span class="custom-switch-indicator"></span>
                            </label>
                        </li>
                        <li>
                            <label class="custom-switch">
                                <span class="custom-switch-description">Box Shadow</span>
                                <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-boxshadow">
                                <span class="custom-switch-indicator"></span>
                            </label>
                        </li>
                        <li>
                            <label class="custom-switch">
                                <span class="custom-switch-description">RTL Support</span>
                                <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-rtl">
                                <span class="custom-switch-indicator"></span>
                            </label>
                        </li>
                        <li>
                            <label class="custom-switch">
                                <span class="custom-switch-description">Box Layout</span>
                                <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-boxlayout">
                                <span class="custom-switch-indicator"></span>
                            </label>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Start Theme panel do not add in project -->
    <div class="theme_div">
        <div class="card">
            <div class="card-body">
                <ul class="list-group list-unstyled">
                    <li class="list-group-item mb-2">
                        <p>Light Version</p>
                        <a href="../university/index.html"><img src="<?php echo base_url('public/assets/images/themes/default.png')?>" class="img-fluid" alt="" /></a>
                    </li>
                    <li class="list-group-item mb-2">
                        <p>Dark Version</p>
                        <a href="../university-dark/index.html"><img src="<?php echo base_url('public/assets/images/themes/dark.png')?>" class="img-fluid" alt="" /></a>
                    </li>
                    <li class="list-group-item mb-2">
                        <p>RTL Version</p>
                        <a href="../university-rtl/index.html"><img src="<?php echo base_url('public/assets/images/themes/rtl.png')?>" class="img-fluid" alt="" /></a>
                    </li>
                </ul>
            </div>
        </div>        
    </div>
     <!-- Start Main leftbar navigation -->
    <div id="left-sidebar" class="sidebar">
        <h5 class="brand-name schoolname">
           E&R Enterprises
           
            <a href="javascript:void(0)" class="menu_option float-right">
        </a></h5>
        <ul class="nav nav-tabs">
            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#menu-uni"> Enterprise</a></li>
            <!-- <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#menu-admin">Admin</a></li> -->
        </ul>
        <div class="tab-content mt-3">
            <div class="tab-pane fade show active" id="menu-uni" role="tabpanel">
                <nav class="sidebar-nav">
                
                    <ul class="nav flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start elink" id="nav_accordion">
                          <!-- <li class="has-submenu">
                            <a class="nav-link" href="#"  style="color:#fff"><i class="fa fa-dashboard"></i><span>Dashboard</span><i class="fa fa-chevron-circle-down"></i> </a>
                            <ul class="submenu collapse">
                          
                            <li class="nav-item"><a class="nav-link" href="<?php echo base_url().'dash';?>"><i class="fa fa-users"></i><span>dash</span></a>
                                 
                                </li>
                           
                            </ul>
                           
                        </li> -->
                        
                        
                        <li class="nav-item">
                         <div id="">  <a class="nav-link" href="<?php echo base_url().'dashboard';?>"><i class="fa fa-dashboard"></i><span>Dashboard</span></a>
                            </div>
                       </li>
                       <li class="nav-item">
                         <div id="">  <a class="nav-link" href="<?php echo base_url().'company';?>"><i class="fa fa-building"></i><span>Company</span></a>
                            </div>
                       </li>
                    
                       <li class="nav-item">
                         <div id="">  <a class="nav-link" href="<?php echo base_url().'categories';?>"><i class="fa fa-clone"></i><span>Categories</span></a>
                            </div>
                       </li>
                       <li class="nav-item">
                         <div id="">  <a class="nav-link" href="<?php echo base_url().'products';?>"><i class="fa fa-folder"></i><span>Products</span></a>
                            </div>
                       </li>
                       <li class="nav-item">
                         <div id="">  <a class="nav-link" href="<?php echo base_url().'testimonials';?>"><i class="fa fa-wrench"></i><span>Testmonials</span></a>
                            </div>
                       </li>
                       <li class="nav-item">
                         <div id="">  <a class="nav-link" href="<?php echo base_url().'faqs';?>"><i class="fa fa-scissors"></i><span>Faqs</span></a>
                            </div>
                       </li>
                       <li class="nav-item">
                         <div id="">  <a class="nav-link" href="<?php echo base_url().'partners';?>"><i class="fa fa-heart"></i><span>Partners</span></a>
                            </div>
                       </li>
                       <li class="nav-item">
                         <div id="">  <a class="nav-link" href="<?php echo base_url().'messages';?>"><i class="fa fa-envelope"></i><span>Messages</span></a>
                            </div>
                       </li>
                       <li class="nav-item">
                         <div id="">  <a class="nav-link" href="<?php echo base_url().'users';?>"><i class="fa fa-users"></i><span>Users</span></a>
                            </div>
                       </li>
                       
                       
                        <?php
                          ?>
                       
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <!-- Start project content area -->
    <div class="page">
        <!-- Start Page header -->
        <div class="section-body" id="page_top">
            <div class="container-fluid">
                <div class="page-header">
               
                  

                    <div class="left">                        
                        <div class="input-group">
                            <!-- <input type="text" class="form-control" placeholder="">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="button">Search</button>
                            </div> -->
                             <!-- <marquee  behavior="alternate" direction="left" style="white-space: nowrap;"> <h6 class="text-danger">Samahani subiri kwa nusu saa, tunafanya update ya mfumo</h6></marquee> -->
                        </div>
                    </div>

                    <div class="right">
                        <!-- <ul class="nav nav-pills">   
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><?php echo session()->get('first_name')." ". session()->get('last_name'); ?></a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item profile" href="<?= base_url('profile_edit'); ?>/<?= session()->get('id');?>" data-id="">Profile</a>
                                    <a class="dropdown-item username" href="<?= base_url('/Logout'); ?>">Sign Out</a>
                                    
                                </div>
                            </li>
                        </ul> -->
                         <form id="header_form">
                            <input type="hidden" value="<?= session()->get('user_id');?>" name="header_id">
                            <input type="hidden" value="<?= session()->get('db_id');?>" name="db_id">
                        </form>

                        <div class="notification d-flex">
                             <div id="google_translate_element"></div>
                        </div>

                                 
                        
                        <div class="notification d-flex">
                            <div class="dropdown d-flex">
                                <a href="javascript:void(0)" class="chip ml-3" data-toggle="dropdown">
                                   <?php 
                                        if($_SESSION['user_photo']!= ""){
                                   ?>
                                    <span class="avatar" style="background-image: url(<?php echo base_url('public/users_photos/'.$_SESSION['user_photo']);?>)"></span>
                                    <?php } else{?>
                                       <span class="avatar fa fa-user" style="background-color: whitesmoke;"></span>
 
                                    <?php }?>
                                     
                                    <?php print_r($_SESSION['full_name']); ?></a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                   <!--  <a class="dropdown-item profile" href="<?= base_url('profile_edit'); ?>/<?= session()->get('id');?>" data-id="">Profile</a>
                                    <div class="dropdown-divider"></div> -->
                                    <a class="dropdown-item" href="<?php echo base_url('/Logout');?>"><i class="dropdown-icon fe fe-log-out"></i> Sign out</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start Page title and tab -->
             <?php ?>
      <!-- Modal -->



<script>
     var idleTime = 0;
$(".profile").click(function () {
        var data =$(this).attr('data-id');
        // $("#idkl").val( ids );
        //alert (data);
       // $('#Modal').modal('show');

           $.ajax({
            method: 'GET',
            
            url: "<?= base_url('profile_edit'); ?>/"+data,
            data: data,
            
            success: function(res){
                $('#prof').html(res);
                 
            },
            error: function ()
            {

            }
        });
    });
    
    window.addEventListener("load", function(){
    const loader = document.getElementById("loader");
    loader.style.display = "none";
  });
    </script>