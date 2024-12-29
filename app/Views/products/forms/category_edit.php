<?php 
helper('Query');
?>

<div class="section-body mt-4">
    <div class="container-fluid">
        <div class="tab-content">
            
            <div id="updatFDBCK"></div>
               <form id="update_details" class="form-horizontal">

                 <div class="form-group row mb-3">
                     <label class="col-md-2 col-form-label"> Category Type</label>
                     <div class="col-md-5">
                         <input type="text" class="form-control" name="category_name" placeholder="Category Name" autocomplete="off" value="<?= $item[0]->category_name;?>">
                         <input type="hidden" class="form-control" name="id" value="<?= $item[0]->id;?>">
                     </div>
                   </div>

                   <?php
                 $menus=get_data('web_menu_tbl',$where=array('menu_nature'=>2));
                ?>
                 <div class="form-group row">
                    <label class="col-md-2 col-form-label">Menu<span class="text-danger">*</span></label>
                    <div class="col-md-5">
                        <select name='menu' class='form-control form-select'>
                       <option value="">-choose-</option>
                       <?php
                       if(count($menus)>0){
                      foreach($menus as $menu){
                       ?>
                     <option value='<?= $menu->id;?>'
                        <?php if($item[0]->menu_id==$menu->id){ echo "selected";} ?> ><?= $menu->menu_name;?></option>
                       <?php
                        }
                       }
                       ?>
                      </select>
                    </div>
                </div>

                 <div class="form-group row mb-3">
                     <label class="col-md-2 col-form-label"> Route Name</label>
                     <div class="col-md-5">
                         <input type="text" class="form-control" name="route" placeholder="Enter route name" autocomplete="off" value="<?= $item[0]->route;?>">
                        
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
          url: "<?= base_url('update_category'); ?>",
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