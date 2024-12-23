<?php
   
?>

<div class="section-body mt-4">
    <div class="container-fluid">
        <div class="tab-content">
            
            <div id="updatFDBCK"></div>
               <form id="update_details" class="form-horizontal">

                 <div class="form-group row mb-3">
                     <label class="col-md-2 col-form-label"> Company Name</label>
                     <div class="col-md-3">
                         <input type="text" class="form-control" name="name" placeholder="Company Name" autocomplete="off" value="<?= $item[0]->name;?>">
                         <input type="hidden" class="form-control" name="id" value="<?= $item[0]->id;?>">
                     </div>
                   </div>

                    <div class="form-group row mb-3">
                     <label class="col-md-2 col-form-label"> Phone 1</label>
                     <div class="col-md-3">
                         <input type="text" class="form-control" name="phone1" placeholder="Phone 1" autocomplete="off" value="<?= $item[0]->phone1;?>">
                        
                     </div>
                   </div>
                 
                 <div class="form-group row mb-3">
                     <label class="col-md-2 col-form-label"> Phone 2</label>
                     <div class="col-md-3">
                         <input type="text" class="form-control" name="phone2" placeholder="Phone 2" autocomplete="off" value="<?= $item[0]->phone2;?>">
                        
                     </div>
                   </div>

                   <div class="form-group row mb-3">
                     <label class="col-md-2 col-form-label"> Email</label>
                     <div class="col-md-3">
                         <input type="text" class="form-control" name="email" placeholder="Email" autocomplete="off" value="<?= $item[0]->email;?>">
                        
                     </div>
                   </div>

                   <div class="form-group row mb-3">
                     <label class="col-md-2 col-form-label"> Logo</label>
                     <div class="col-md-3">
                        <img src= "<?php echo base_url('public/web/img/'.$item[0]->logo);?> " id="showImage" style="width:120px;" alt="select logo">
                          <input type="file" accept="image/*" name="logo" onchange="loadedFile(event)" class="mt-3">
                          
                         <input type="hidden" class="form-control" name="logo1" value="<?=$item[0]->logo;?>" required=""> 
                     </div>
                   </div>
              
                <div class="form-group row mb-3">
                  
                  <div class="col-md-4 offset-md-4">
                    <button type="submit" class="btn btn-primary float-right" id="updtappbtn" >Update</button> 
                </div>
                </div>      
             </form>
            

        </div>
    </div>
</div>
<script>
     var loadedFile = function(event) {
    var output = document.getElementById('showImage');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
      URL.revokeObjectURL(output1.src) // free memory
    }
  }; 

       $('#update_details').submit(function(e){
     
        var form_data = new FormData(this);
         //alert(form_data);
        $.ajax({
          url: "<?= base_url('update_company'); ?>",
            type: 'POST',
            data: form_data,
            contentType: false,
            processData: false,
            // dataType: 'json',
            success:function(res){
                
                  $('#updatFDBCK').html(res);
                    setTimeout(function(){
                        window.location.reload();
                    },1500)
                
            },
            error:function(){
                $('#updatFDBCK').html('<div class="alert alert-danger alert-dismissible" role="alert"><strong>Sorry! Something went wrong!</strong> Couldnt Update Company.<button type="button" class="close" data-dismiss="alert" aria-label="Close"></button></div>');
            }
        });
        
        e.preventDefault();
    }); 
     
   
</script>    