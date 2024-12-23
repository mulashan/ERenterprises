<?php

namespace App\Controllers;

class QueryController extends BaseController
{


    function update_database(){
        $dbs = [
            \Config\Database::connect(),
     ];

     $queries = [
     "",
    
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