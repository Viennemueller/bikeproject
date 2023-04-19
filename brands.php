
<?php



include('DatabaseClassConfig.php');

//Place Code here

include('DatabaseClass.php');

$brands = "";

//change table name example: "sales.customers"

$db = new DatabaseClass("production.brands",false,$global_serverName,$global_connectionInfo);
//change the sql

$tsql = "select brand_id, brand_name from production.brands order by brand_name";


//echo "<Br><Br><br>.................." . $tsql;

//change to primary key of table example: customer_id
$db->Select($tsql, "category_id");

//add array of field names example: "first_name, last_name"                                                                //change this to the screen u wanna edit
$brands = $db->getGrid(['brand_id', 'brand_name'], "brandsedit.php");

$db->closeConnection();

$smarty->assign('brands', $brands);




//End Code Here



include('footerbase.php');

$smarty->display('brands.tpl');


?>