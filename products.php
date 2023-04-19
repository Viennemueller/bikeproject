
<?php



include('DatabaseClassConfig.php');

//Place Code here

include('DatabaseClass.php');

$products = "";

//change table name example: "sales.customers"

$db = new DatabaseClass("production.products",false,$global_serverName,$global_connectionInfo);
//change the sql

$tsql = "select p.product_id, p.product_name, b.brand_name, c.category_name,p.model_year, p.list_price, p.image, p.sku, p.category, p.tags, p.description
from production.products p
inner join production.categories c on c.category_id = p.category_id 
inner join production.brands b on b.brand_id = p.brand_id order by product_name";


//echo "<Br><Br><br>.................." . $tsql;

//change to primary key of table example: customer_id
$db->Select($tsql, "product_id");

//add array of field names example: "first_name, last_name"                                                                //change this to the screen u wanna edit
$products = $db->getGrid(['product_id', 'product_name', 'brand_name', 'category_name', 'model_year', 'list_price', 'image', 'sku', 'category', 'tags', 'description'], "productsedit.php");

$db->closeConnection();

$smarty->assign('products', $products);




//End Code Here



include('footerbase.php');

$smarty->display('products.tpl');


?>