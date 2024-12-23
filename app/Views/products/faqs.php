
<?php 
helper('Query');
?>
<style type="text/css">
     table {
        table-layout: relative;
        width: 100%;
    }

    .answer {
        width: 350px;
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
                <li class="nav-item"><a class="nav-link" id="cat-tab2" data-toggle="tab" href="#<?= $view;?>-add">Add <?= $view;?></a></li>
            </ul>
             </div>
            <div id="smallScreenTab">
            <ul class="nav nav-tabs page-header-tab">
                <li class="nav-item"><a class="nav-link active" id="cat-tab1" data-toggle="tab" href="#<?= $view;?>-all"><?= $view;?> List</a></li>
                <li></li><li></li>
                <li class="nav-item"><a class="nav-link" id="cat-tab2" data-toggle="tab" href="#<?= $view;?>-add">Add <?= $view;?></a></li>
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
                                    <th>Question</th>
                                    <th>Answers</th>
                                     <th>Created By</th>
                                    <th>created Date</th>
                                  <th>Action</th>
                                </tr>
                            </thead>
                            <tbody style="padding:1px;">
                                <?php 
                                 $i=0;
                                foreach($result as $res){ 
                                    $i++;
                                   $results=get_data('users',$where=array('id'=>$res->created_by));
                                  
                                       ?>
                                   <tr>
                                       <td><?=$i?>.</td>
                                      <td class="answer"><?php echo $res->question;?></td>
                                       <td class="answer"><?php echo $res->answer ;?></td>
                                         <td><?php echo $results[0]->full_name;?></td>
                                        <td><?php echo $res->created_date;?></td>
                                        <td><a href="javascript:void(0)" onclick="edit_item(<?php echo $res->id;?>)"  class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Edit</a>

                                            <a href="javascript:void(0)" onclick="delete_item(<?php echo $res->id;?>)"  class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</a>
                                         
                                        </td>
                                        
                                    </tr>
                                <?php } ?>
                            </tbody>
                            </table>
                                
            </div>
            </div>
            </div>
            <div class="tab-pane" id="<?= $view;?>-add">
        <div class="card">
            <div class="card-header" style="height:5px">
                <h3 class="card-title">New <?= $view;?></h3>
                <div class="card-options ">
                    <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                </div>
            </div>
            <hr>
            <form class="card-body form-horizontal"  id="AddFaqs" method="post" enctype="multipart/form-data">
            <div id="accfbk" class="text-success"></div>
               
                <div class="form-group row">
                    <label class="col-md-3 col-form-label">Question<span class="text-danger">*</span></label>
                    <div class="col-md-8">
                        
                        <textarea name='ques' id='ques' class='form-control' placeholder="Enter question" rows="5"></textarea>
                    <span id="ques" class="text-danger"></span>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 col-form-label">Answer<span class="text-danger">*</span></label>
                    <div class="col-md-8">
                        
                        <textarea name='answ' id='answ' class='form-control' placeholder="Enter answer" rows="10"></textarea>
                    <span id="answ" class="text-danger"></span>
                    </div>
                </div>
                
              
                        
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label"></label>
                            <div class="col-md-5">
                               
                                <button type="submit" id="savebtn" class="btn btn-primary float-right">Save</button>
                            </div>
                        </div>
                    </form>
                   
                </div>

            </div>

        </div>
    </div>
</div>
<div class="modal fade" id="EditItem" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content" style="width:900px;margin-left: 100px;">
      <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel"><center>Edit Faqs Details</center></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" id="EditItem_content">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">

   $('#AddFaqs').submit(function(e){
    var form_data = new FormData(this);
    //alert(form_data);
       
        $.ajax({
          url: "<?= base_url('addFaqs'); ?>",
            type: 'POST',
            data: form_data,
            contentType: false,
            processData: false,
         
            success:function(data){
               
                 $("#AddFaqs")[0].reset();
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
    function edit_item(id){
        
        $('#EditItem').modal('show'); 
        $('#EditItem_content').load('edit_faq/'+id);
       
    } 
    
  function delete_item(id){
           var tbl="faqs_tbl";
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