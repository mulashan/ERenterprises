<?php

namespace App\Controllers;

class QueryController extends BaseController
{


    function update_database(){
        $dbs = [
            \Config\Database::connect(),
     ];

     $queries = [
        "ALTER TABLE `categories_tbl` CHANGE `type_name` `category_name` VARCHAR(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL",
      "ALTER TABLE `categories_tbl`  ADD `created_by` INT NOT NULL  AFTER `description`,  ADD `created_date` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP  AFTER `created_by`",
     "ALTER TABLE `products_tbl` CHANGE `type_id` `category_type` INT(11) NOT NULL",
     "ALTER TABLE `products_tbl` ADD `description` VARCHAR(250) NULL DEFAULT NULL AFTER `image`",
     "ALTER TABLE `products_tbl`  ADD `created_by` INT NOT NULL  AFTER `description`,  ADD `created_date` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP  AFTER `created_by`",
    
    ];

     foreach ($dbs as $db) {
        foreach ($queries as $query) {
            if (!$db->query($query)) {
                // Log the error if a query fails
                // echo "Error executing query on database: " . $db->database . " - " . $db->error();
                // return;
            }
        }
    }

    echo "updated successfully into all databases.";

    }


}