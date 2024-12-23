<?php 
helper('Query');
?>

<div class="section-body mt-4">
    <div class="container-fluid">
        <div class="tab-content">
            
            <div id="updatFDBCK"></div>
               <form id="update_details" class="form-horizontal">

                 <div class="form-group row mb-3">
                     <label class="col-md-2 col-form-label"> Product Name</label>
                     <div class="col-md-5">
                         <input type="text" class="form-control" name="product_name" placeholder="product Name" autocomplete="off" value="<?= $item[0]->product_name;?>">
                         <input type="hidden" class="form-control" name="id" value="<?= $item[0]->id;?>">
                     </div>
                   </div>

                    <div class="form-group row mb-3">
                     <label class="col-md-2 col-form-label"> Category Type</label>
                     <div class="col-md-5">
                        <?php
                 $type=get_data('categories_tbl',$where=array('id >'=>0));
                ?>
                          <select name='category_type' class='form-control form-select'>
                       <option value="">-choose-</option>
                       <?php
                       if(count($type)>0){
                      foreach($type as $tp){
                       ?>
                     <option value='<?= $tp->id;?>' <?php if($item[0]->category_type==$tp->id){ echo "selected";} ?>><?= $tp->category_name;?></option>
                       <?php
                        }
                       }
                       ?>
                      </select>
                        
                     </div>
                   </div>

                   <div class="form-group row mb-3">
                     <label class="col-md-2 col-form-label"> Description</label>
                     <div class="col-md-10">
                         <textarea name="description" class="form-control" rows="10"><?= $item[0]->description;?>
                         </textarea>
                     </div>
                   </div>
                 
                   <div class="form-group row mb-3">
                     <label class="col-md-2 col-form-label"> Image</label>
                     <div class="col-md-5">
                        <img src= "<?php echo base_url('public/web/img/'.$item[0]->image);?> " id="showImage" style="width:120px;" alt="select image">
                          <input type="file" accept="image/*" name="image" onchange="loadedFile(event)" class="mt-3">
                          
                         <input type="hidden" class="form-control" name="image1" value="<?=$item[0]->image;?>" required=""> 
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
          url: "<?= base_url('update_product'); ?>",
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