<?php

namespace App\Controllers;

class QueryController extends BaseController
{


    function update_database(){
        $dbs = [
            \Config\Database::connect(),
     ];

     $queries = [
     "ALTER TABLE `company_tbl` ADD `about_us_sms` VARCHAR(2000) NOT NULL AFTER `logo`; ",
     "UPDATE `company_tbl` SET `about_us_sms` = '<p class='mb-4>'Based in Dar es Salaam, Tanzania, E&R Enterprise we are a trusted business with over six years of experience in sourcing furniture and electronics from China. We specialize in managing the entire process—receiving customer orders, purchasing, transporting, and distributing high-quality products across East Africa.</p>
                    <p>Our mission is to connect you with the world’s finest styles and innovations. The Chinese furniture market offers a rich array of designs, from classic to modern, crafted from materials like solid wood and metal, meeting the diverse preferences of global buyers. Meanwhile, China’s electronics market provides high-quality products ranging from home appliances and solar panels to audio equipment and smart devices.</p>
                    <p>We collaborate with leading manufacturers in China to ensure that our customers receive premium products at competitive prices. Let us simplify your shopping experience by handling every step of the process with professionalism and reliability.</p>' WHERE `company_tbl`.`id` = 1;",
                    "ALTER TABLE `company_tbl` ADD `company_start_year` INT NOT NULL AFTER `about_us_sms`; ",
                    "UPDATE `company_tbl` SET `company_start_year` = '2018' WHERE `company_tbl`.`id` = 1; ",
                    
    
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