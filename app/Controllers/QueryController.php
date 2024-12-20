<?php

namespace App\Controllers;

class QueryController extends BaseController
{


    function update_database(){
        $dbs = [
            \Config\Database::connect(),
     ];

     $queries = [
      "ALTER TABLE `faqs_tbl`  ADD `created_by` INT NOT NULL  AFTER `answer`,  ADD `created_date` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP  AFTER `created_by`",
         "ALTER TABLE `testmonials` CHANGE `email` `company_name` VARCHAR(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL",
    "ALTER TABLE `testmonials` ADD `created_by` INT NOT NULL  AFTER `company_name`,  ADD `created_date` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP  AFTER `created_by`",
    "ALTER TABLE `contactus_tbl` ADD `created_date` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP AFTER `message`;"
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