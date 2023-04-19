
<?php



include('DatabaseClassConfig.php');

//Place Code here

include('DatabaseClass.php');

$orders = "";

//change table name example: "sales.customers"

$db = new DatabaseClass("sales.orders",false,$global_serverName,$global_connectionInfo);
//change the sql

$tsql = "select o.order_id,c.first_name+' '+c.last_name as name, o.order_status,
cast(o.order_date as varchar) AS order_date, 
cast(o.required_date as varchar) AS required_date, 
cast(o.shipped_date as varchar) AS shipped_date,s.store_name
from sales.orders o inner join sales.customers c on c.customer_id = o.customer_id 
inner join sales.stores s on s.store_id = o.store_id 
order by order_date";


//echo "<Br><Br><br>.................." . $tsql;

//change to primary key of table example: customer_id
$db->Select($tsql, "order_id");

//add array of field names example: "first_name, last_name"                                                                //change this to the screen u wanna edit
$orders = $db->getGrid(['order_id', 'name', 'order_status', 'order_date', 'required_date', 'shipped_date', 'store_name'], "ordersedit.php");

$db->closeConnection();

$smarty->assign('orders', $orders);




//End Code Here



include('footerbase.php');

$smarty->display('orders.tpl');


?>