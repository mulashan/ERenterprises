
<?php 
helper('Query');
?>
<style type="text/css">
     table {
        table-layout: relative;
        width: 100%;
    }

    .answer {
        width: 300px;
        word-wrap: break-word;
        word-break: break-word;
        overflow-wrap: break-word;
        white-space: normal; /* Allows text to wrap onto the next line */
    }
</style>
<div class="section-body">
    <div class="container-fluid">
        <div class="d-flex justify-content-between align-items-center ">
            <div class="header-action">
                <h1 class="page-title"><?= $view;?></h1>
                <ol class="breadcrumb page-breadcrumb">
                    <li class="breadcrumb-item"><a class="nav-link" href="<?php echo base_url('dashboard')?>">
                        <?php echo NAME; ?>
                    </a></li>
                    <li class="breadcrumb-item active" aria-current="page"><?= $view;?></li>
                </ol>
            </div>
            
            <!---tabs here they go---------------------------->
            <div id="largeScreenTab">
          <ul class="nav nav-tabs page-header-tab">
                <li class="nav-item"><a class="nav-link active" id="cat-tab1" data-toggle="tab" href="#<?= $view;?>-all"><?= $view;?> List</a></li>
                <!-- <li class="nav-item"><a class="nav-link" id="cat-tab2" data-toggle="tab" href="#<?= $view;?>-add">Add <?= $view;?></a></li> -->
            </ul>
             </div>
            <div id="smallScreenTab">
            <ul class="nav nav-tabs page-header-tab">
                <li class="nav-item"><a class="nav-link active" id="cat-tab1" data-toggle="tab" href="#<?= $view;?>-all"><?= $view;?> List</a></li>
                <li></li><li></li>
                <!-- <li class="nav-item"><a class="nav-link" id="cat-tab2" data-toggle="tab" href="#<?= $view;?>-add">Add <?= $view;?></a></li> -->
            </ul>
              
             </div>
    <!---tabs here they end---------------------------->
        </div>
    </div>
</div>


<div class="section-body mt-4">
    <div class="container-fluid">
        <div class="tab-content">
            <div class="tab-pane active" id="<?= $view;?>-all">

                <div class="card">
                    <div class="table-responsive mt-3">
                        <table class="table table-hover table-vcenter mb-0 text-nowrap"  id="myTable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Full Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Country</th>
                                    <th>Message</th>
                                    <th>created Date</th>
                                    <th>Action</th>
                                 
                                </tr>
                            </thead>
                            <tbody style="padding:1px;">
                                <?php 
                                 $i=0;
                                foreach($result as $res){ 
                                    $i++;
                                  
                                   ?>
                                   <tr>
                                       <td><?=$i?>.</td>
                                      <td><?php echo $res->name;?></td>
                                       <td><?php echo $res->email ;?></td>
                                       <td><?php echo $res->phone ;?></td>
                                       <td><?php echo $res->country ;?></td>
                                       <td class="answer"><?php echo $res->message ;?></td>
                                        
                                        <td><?php echo $res->created_date;?></td>
                                        
                                        <td>
                                            <a href="javascript:void(0)" onclick="delete_item(<?php echo $res->id;?>)"  class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                            </table>
                                
            </div>
            </div>
            </div>
           

        </div>
    </div>
</div>


<script type="text/javascript">

   $('#AddTestmonial').submit(function(e){
    var form_data = new FormData(this);
    //alert(form_data);
       
        $.ajax({
          url: "<?= base_url('addTestimonial'); ?>",
            type: 'POST',
            data: form_data,
            contentType: false,
            processData: false,
         
            success:function(data){
               
                 $("#AddTestmonial")[0].reset();
                     $('#accfbk').html(data);
                    setTimeout(function(){
                        window.location.reload();
                    },1500)
                
            },
            error:function(){
                $('#accfbk').html('<div class="alert alert-danger alert-dismissible" role="alert"><strong>Sorry! Something went wrong!</strong> Couldnt Save Company.<button type="button" class="close" data-dismiss="alert" aria-label="Close"></button></div>');
            }
        });
        
        e.preventDefault();
    }); 

   function delete_item(id){
           var tbl="contactus_tbl";
            swal({
            title: "Are you sure?",
            text: "You will not be able to recover this item!",
            // type: "warning",
            customClass: 'swal-wide',
            showCancelButton: true,
            confirmButtonClass: "btn-danger",
            confirmButtonText: "Yes, delete!",
            cancelButtonText: "No, cancel!",
            closeOnConfirm: false,
            closeOnCancel: false,
            height:'200px'
          },

          function(isConfirm) {
            if (isConfirm) {
            var dt="id="+id+"&tbl="+tbl;
              $.ajax({
                url: "<?= base_url('deleteItem'); ?>",
            type: 'POST',
            data: dt,
                 error: function() {
                    alert('Something is wrong');
                 },
                 success: function(data) {
                     
                    swal("Deleted!", "Item deleted.", "success");
                    location.reload(true);
                      
                 }
              });

            } else {
               swal("Cancelled");
            }

          });
        }
</script>