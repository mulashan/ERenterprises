<?php
use App\Models\ProductsModel;

function get_data($tbl,$condition){
    $pmodel = new ProductsModel();
    $res=$pmodel->gettable_data($tbl,$condition);
    return $res;

}