
<style type="text/css">
   /* styles.css */
#blinking-background {
    padding: 8px;
    font-size: 15px;
    text-align: center;
    background-color: yellow;
    animation: blink-bg 1s infinite;
    position: relative;
    border: 10px solid transparent; /* Space for the zigzag border */
    background-clip: padding-box; /* Ensures background color is not affected by the border */

}

@keyframes blink-bg {
    0% {
        background-color: yellow;
    }
    50% {
        background-color: red;
    }
    100% {
        background-color: yellow;
    }
}

/* Zigzag border using SVG */
#blinking-background::before {
     content: '';
    position: absolute;
    top: -10px; /* Adjust based on border width */
    left: -10px; /* Adjust based on border width */
    right: -10px; /* Adjust based on border width */
    bottom: -10px; /* Adjust based on border width */
    background: repeating-linear-gradient(
        45deg,
        #007BFF,
        #007BFF 10px,
        transparent 10px,
        transparent 20px
    );
    z-index: -1;
}
</style>
<style>
    /* Ensure the dropdown aligns to the left */
    .yearpicker-container {
        right: 0 !important; /* Adjust as needed */
    }
</style>

<div class="section-body">
<div class="container-fluid">
<div class="d-flex justify-content-between align-items-center">
    <div class="header-action">
        <h1 class="page-title">Dashboard</h1>
        <ol class="breadcrumb page-breadcrumb">
            <li class="breadcrumb-item"><a class="nav-link" href="<?php echo base_url('dashboard')?>"><?php 
               // $login = new App\Models\LoginModel();
                echo "E&R Enterprises";
                    ?></a></li>
            <li class="breadcrumb-item"><a class="nav-link" href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
        </ol>
    </div>
    <ul class="nav nav-tabs page-header-tab">
        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#admin-Dashboard">Dashboard</a></li>
    </ul>
</div>
</div>
</div>
<div class="section-body mt-4">
<div class="container-fluid">
    
<div class="row clearfix row-deck">
        <?php
        $app=0;
        helper('Query');
        ?>
<div class="row clearfix row-deck col-md-12">
  <div class="col-6 col-md-4 col-xl-3">
       <div class="card h-80 d-flex flex-column">
            <div class="card-body ribbon">
                <div class="ribbon-box orange" data-toggle="tooltip" title="Products"><?php
                $products=get_data('products_tbl',$where=array('id >'=>0));
                 echo count($products);
                 ?></div>
                <a href="<?php
                
                  if(count($products) >0){
                 // echo base_url('products');
                     echo "#";
         }else{
            echo "#";
         }
         ?>" class="nav-link my_sort_cut text-muted">
                    <i class="fa fa-folder"></i>
                    <span>Total Products</span>
                </a>
            </div>
        </div>
    </div>

    <div class="col-6 col-md-4 col-xl-3">
       <div class="card h-80 d-flex flex-column">
            <div class="card-body ribbon">
                <div class="ribbon-box orange" data-toggle="tooltip" title="Messages"><?php
                 $msg=get_data('contactus_tbl',$where=array('id >'=>0));
                 echo count($msg);
                 ?></div>
                <a href="<?php
                  if(count($msg) >0){
                 echo '#';
         }else{
            echo "#";
         }
         ?>" class="nav-link my_sort_cut text-muted">
                    <i class="fa fa-envelope"></i>
                    <span>Total Messages</span>
                </a>
            </div>
        </div>
    </div>

    <div class="col-6 col-md-4 col-xl-3">
       <div class="card h-80 d-flex flex-column">
            <div class="card-body ribbon">
                <div class="ribbon-box orange" data-toggle="tooltip" title="Categories"><?php
                 $cat=get_data('categories_tbl',$where=array('id >'=>0));
                 echo count($cat);
                 ?></div>
                <a href="<?php
                  if(count($cat) >0){
                 echo "#";
         }else{
            echo "#";
         }
         ?>" class="nav-link my_sort_cut text-muted">
                    <i class="fa fa-suitcase"></i>
                    <span>Total Categories</span>
                </a>
            </div>
        </div>
    </div>

    <div class="col-6 col-md-4 col-xl-3">
       <div class="card h-80 d-flex flex-column">
            <div class="card-body ribbon">
                <div class="ribbon-box orange" data-toggle="tooltip" title="Partners"><?php
                 $pat=get_data('partners_tbl',$where=array('id >'=>0));
                 echo count($pat);
                 ?></div>
                <a href="<?php
                  if(count($pat) >0){
                 echo "#";
         }else{
            echo "#";
         }
         ?>" class="nav-link my_sort_cut text-muted">
                    <i class="fa fa-users"></i>
                    <span>Total Partners</span>
                </a>
            </div>
        </div>
    </div>
 
    
  </div> 
</div>



        
          <script type="text/javascript">
       
          </script>