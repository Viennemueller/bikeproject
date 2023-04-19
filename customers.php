
<?php



include('DatabaseClassConfig.php');

//Place Code here

include('DatabaseClass.php');

$customers = "";

//change table name example: "sales.customers"

$db = new DatabaseClass("sales.customers",false,$global_serverName,$global_connectionInfo);
//change the sql

$tsql = "Select customer_id,first_name,last_name,phone,email,street,city,state,zip_code from sales.customers order by last_name,first_name";


//echo "<Br><Br><br>.................." . $tsql;

//change to primary key of table example: customer_id
$db->Select($tsql, "customer_id");

//add array of field names example: "first_name, last_name"                                                                //change this to the screen u wanna edit
$customers = $db->getGrid(['customer_id', 'first_name', 'last_name', 'phone', 'email','street','city','state','zip_code'], "customeredit.php");

$db->closeConnection();

$smarty->assign('customers', $customers);




//End Code Here



include('footerbase.php');

$smarty->display('customers.tpl');


?>