
<?php



include('DatabaseClassConfig.php');

//Place Code here

include('DatabaseClass.php');

$categories = "";

//change table name example: "sales.customers"

$db = new DatabaseClass("production.categories",false,$global_serverName,$global_connectionInfo);
//change the sql

$tsql = "select category_id, category_name from production.categories order by category_name";


//echo "<Br><Br><br>.................." . $tsql;

//change to primary key of table example: customer_id
$db->Select($tsql, "category_id");

//add array of field names example: "first_name, last_name"                                                                //change this to the screen u wanna edit
$categories = $db->getGrid(['category_id', 'category_name'], "categoriesedit.php");

$db->closeConnection();

$smarty->assign('categories', $categories);




//End Code Here



include('footerbase.php');

$smarty->display('categories.tpl');


?>