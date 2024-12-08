
<?php

//echo session()->get('db_name');
?>
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
        ?>
<div class="row clearfix row-deck col-md-12">
  <div class="col-6 col-md-4 col-xl-3">
       <div class="card h-80 d-flex flex-column">
            <div class="card-body ribbon">
                <div class="ribbon-box orange" data-toggle="tooltip" title="Products">20</div>
                <a href="<?php
                  if($app >0){
                 echo base_url('products');
         }else{
            echo "#";
         }
         ?>" class="nav-link my_sort_cut text-muted">
                    <i class="fa fa-users"></i>
                    <span>Total Products</span>
                </a>
            </div>
        </div>
    </div>

    <div class="col-6 col-md-4 col-xl-3">
       <div class="card h-80 d-flex flex-column">
            <div class="card-body ribbon">
                <div class="ribbon-box orange" data-toggle="tooltip" title="Products">20</div>
                <a href="<?php
                  if($app >0){
                 echo base_url('products');
         }else{
            echo "#";
         }
         ?>" class="nav-link my_sort_cut text-muted">
                    <i class="fa fa-users"></i>
                    <span>Total Products</span>
                </a>
            </div>
        </div>
    </div>

    <div class="col-6 col-md-4 col-xl-3">
       <div class="card h-80 d-flex flex-column">
            <div class="card-body ribbon">
                <div class="ribbon-box orange" data-toggle="tooltip" title="Products">20</div>
                <a href="<?php
                  if($app >0){
                 echo base_url('products');
         }else{
            echo "#";
         }
         ?>" class="nav-link my_sort_cut text-muted">
                    <i class="fa fa-users"></i>
                    <span>Total Products</span>
                </a>
            </div>
        </div>
    </div>

    <div class="col-6 col-md-4 col-xl-3">
       <div class="card h-80 d-flex flex-column">
            <div class="card-body ribbon">
                <div class="ribbon-box orange" data-toggle="tooltip" title="Products">20</div>
                <a href="<?php
                  if($app >0){
                 echo base_url('products');
         }else{
            echo "#";
         }
         ?>" class="nav-link my_sort_cut text-muted">
                    <i class="fa fa-users"></i>
                    <span>Total Products</span>
                </a>
            </div>
        </div>
    </div>
 
    
  </div> 
</div>



        
          <script type="text/javascript">
       
          </script>