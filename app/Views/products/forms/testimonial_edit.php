<?php 
helper('Query');
?>

<div class="section-body mt-4">
    <div class="container-fluid">
        <div class="tab-content">
            
            <div id="updatFDBCK"></div>
               <form id="update_details" class="form-horizontal">

                 <div class="form-group row mb-3">
                     <label class="col-md-2 col-form-label"> Person Name</label>
                     <div class="col-md-5">
                         <input type="text" class="form-control" name="person_name" placeholder="enter full name" autocomplete="off" value="<?= $item[0]->person_name;?>">
                         <input type="hidden" class="form-control" name="id" value="<?= $item[0]->id;?>">
                     </div>
                   </div>

                   <div class="form-group row mb-3">
                     <label class="col-md-2 col-form-label"> Company Name</label>
                     <div class="col-md-5">
                         <input type="text" class="form-control" name="company_name" placeholder="enter Company name" autocomplete="off" value="<?= $item[0]->company_name;?>">
                        
                     </div>
                   </div>

                <div class="form-group row mb-3">
                     <label class="col-md-2 col-form-label"> message</label>
                     <div class="col-md-10">
                         <textarea name="message" class="form-control" rows="10"><?= $item[0]->message;?>
                         </textarea>
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
     

       $('#update_details').submit(function(e){
     
        var form_data = new FormData(this);
         //alert(form_data);
        $.ajax({
          url: "<?= base_url('update_testimonial'); ?>",
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