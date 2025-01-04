<?php

namespace App\Controllers;

class QueryController extends BaseController
{


    function update_database(){
        $dbs = [
            \Config\Database::connect(),
     ];
     return;
     $queries = [
        "INSERT INTO `categories_tbl` (`id`, `category_name`, `menu_id`, `route`, `image`, `description`, `created_by`, `created_date`) VALUES
(9, 'Street Light', 3, 'category_products', 'street_light1.png', 'Environmentally friendly and cost-effective, solar-powered street lights harness the power of the sun to provide reliable nighttime illumination. Ideal for streets, parks, and pathways, these lights a', 1, '2025-01-01 17:47:40'),
(10, 'Garden Light', 3, 'category_products', 'garden_light.png', 'Transform your outdoor space with our premium garden lights, designed to provide both functionality and style. Perfect for pathways, flower beds, patios, and more, these lights offer Warm Ambiance, En', 1, '2025-01-02 09:06:32'),
(11, 'Solar energy System', 3, 'category_products', 'solar_energy_system.png', 'Experience the future of energy with our advanced Solar Energy Systems. Designed for efficiency and sustainability, these systems are perfect for homes, businesses, and off-grid solutions. Key feature', 1, '2025-01-02 09:12:30'),
(12, 'Food Light', 3, 'category_products', 'food_light.png', 'Our high-performance Flood Lights are perfect for enhancing visibility and security in outdoor and large indoor areas. Designed for durability and efficiency, these lights deliver Bright and Wide Cove', 1, '2025-01-02 09:17:40'),
(13, 'High Bay Light', 3, 'category_products', 'high_bay_light.png', 'Illuminate your large spaces with efficiency and precision using our High Bay Lights. Perfect for warehouses, factories, gymnasiums, and retail stores, these lights are designed to provide optimal bri', 1, '2025-01-02 09:30:59'),
(14, 'Wall Light', 3, 'category_products', 'wall_light.png', 'Enhance your indoor or outdoor spaces with our stylish and versatile Wall Lights. Perfect for creating ambiance, improving safety, and complementing your décor, these lights offer Sophisticated Design', 1, '2025-01-02 09:37:57'),
(15, 'Wall Washer', 3, 'category_products', 'wall_washer.png', 'Transform your spaces with our premium Wall Washers, designed to create striking lighting effects on walls and architectural features. Ideal for commercial, residential, and artistic applications, the', 1, '2025-01-02 09:49:34')",

"INSERT INTO `products_tbl` (`id`, `product_name`, `category_type`, `image`, `description`, `created_by`, `created_date`) VALUES
(1, 'LED Solar Smart Light V380 Control Camera', 9, 'street_light1.png', 'Solar powered Camera and lamp\r\n\r\n3 mega pixel camera\r\n\r\nRotatable 360° view\r\n\r\n4G connect, compatitble with major bands\r\n\r\nHuman movement detect\r\n\r\nApp control', 1, '2025-01-02 09:59:45'),
(2, 'Ac Street Light', 9, 'street.png', '30w 50w High Quality Separated IP65 Waterproof Street light with 6M 8M light pole Live Power AC Street Light The lamp is designed for high way, avenue, community streets, country road, etc. The light pole has 2 different height, 6m and 8m. POWER Ligh', 1, '2025-01-02 10:06:15'),
(3, 'Solar Light', 9, 'solar_light.png', '35W 75W100W 150W 250W LED Solar Lights Outdoor Projector Solar Flood Garden Lights Led Solar Street LightP', 1, '2025-01-02 10:15:18'),
(4, 'Facory Customized Garden Solar Light', 10, 'facory-customized-garden-solar-light.png', '', 1, '2025-01-02 10:24:52'),
(5, '400W 400 Watts 500W LED Solar Lights For Garden', 10, '400w-400-watts-500w-led-solar-lights.png', 'Model Number: ZX-TYD-1212 IP Rating: IP65 Application: Garden Lamp Body Material: ABS power: 400W/500W LED QTY: 2835 LED ', 1, '2025-01-02 10:26:53'),
(6, 'Camping Lamp Rechargeable Bright Led Light', 10, 'garden_light.png', 'Product number?ZX-YYD-1005 Football-solar camping lamp product advantages? 80W power SMD2835 chip Case pack:66*53*44.5cm/60pcs CCT: white light Discharge time: max lumen 3H,ordinary lumen 6H,low lumen 8H Function:5 light modes,max,ordinary,low,flash,', 1, '2025-01-02 10:28:24'),
(7, '3.5M SOLAR GARDEN LANDSCAPE LIGHT', 10, '3-5m-solar-garden-landscape-light46129885252.png', 'Flying Lighting completed thousands of projects and obtained a very good reputation from our clients from domestic and overseas. Our mission is to stand ahead of lighting manufacturing industry by bring convinience to our clients.', 1, '2025-01-02 10:31:38'),
(8, '5KW 5000W 6000W Portable Solar Power Generator With Panel', 11, '5kw-5000w-6000w-portable-solar-power.png', 'Solar Panel Type: Monocrystalline Silicon Controller Type: MPPT Load Power (W): 8KW, 6KW, 5kW Output Frequency: 50HZ 60HZ Battery Type: Lithium Ion Mounting Type: Ground Mounting ', 1, '2025-01-02 10:34:36'),
(9, 'Solar Home System Pure SINE Wave 2000W 3000W LiFEPO4 1200Wh Winter Power Supply Factory Price', 11, 'solar_energy_system.png', '', 1, '2025-01-02 10:37:17'),
(10, 'Outdoor 220V 600W UPS Generator Solar Lifepo4 Lithium Battery Portable Power Station', 11, 'outdoor-220v-600w-ups-generator-solar.png', '', 1, '2025-01-02 10:40:54'),
(11, 'Outdoor 300W 220V UPS Generator Solar Lifepo4 Lithium Battery Portable Power Station With Solar Pane', 11, 'outdoor-300w-220v-ups-generator-solar-lifepo.png', '', 1, '2025-01-02 10:43:11'),
(12, 'Solar Home System MPPT Micro 2KW 3KW 3000W 24V 48V Hybrid Solar Inverter With Lithium Ion LiFePO4 Ba', 11, 'solar-home-system-mppt-micro-2kw-3kw-3000.png', '', 1, '2025-01-02 10:46:19')"
     
    
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

//adding image and route and selecting menu
//-------thanks my lord for my life--------
}