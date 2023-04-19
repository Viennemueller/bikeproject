<?php

include('DatabaseClassConfig.php');

//Place Code here
include('DatabaseClass.php');


$db = new DatabaseClass("SALES.CUSTOMERS",false,$global_serverName,$global_connectionInfo);

$db->mode = "edit";

$customer_id = $_GET["customer_id"];

$tsql = "select customer_id,first_name,last_name,email,street,state,city,phone,company_name,country,shipping_country,street2,alternate_first_name,alternate_last_name,alternate_email,alternate_street,alternate_state,alternate_city,alternate_phone,alternate_company_name,alternate_street2,alternate_country,alternate_shipping_country from sales.customers where customer_id = '" . $customer_id . "'";

//echo 'Sql:'.$tsql;

if ($db->Select($tsql, "customer_id") === false) {
    $db->closeConnection();
    //header("Location: index.php");
}

//This will delete
if ( isset($_GET['remove']) && $_GET['remove'] == "true"  ) {

//echo "Type: Delete";
$db->deleteRow($_GET['customer_id']);
$_SESSION["username"] = "";
header("Location: index.php");

}

//    #Save Code
if ( $_POST['save'] == "Save" ) {

//echo "Type: Save";

$db->updateRow(['first_name','last_name','street','state','city','phone','company_name','street2','country','shipping_country','alternate_first_name','alternate_last_name','alternate_street','alternate_state','alternate_city','alternate_phone','alternate_company_name','alternate_street2','alternate_country','alternate_shipping_country']);
$strmessage = "Changes Saved";
$smarty->assign("message", $strmessage);

}
$smarty->assign('customer_id',  $db->getFieldByColumnName("customer_id"));

$smarty->assign('first_name',  $db->getFormFieldByColumnName("first_name",true));
$smarty->assign('last_name',  $db->getFormFieldByColumnName("last_name",true));
$smarty->assign('email',  $db->getFormFieldByColumnName("email",true,"",false));
$smarty->assign('street',  $db->getFormFieldByColumnName("street",true));
$smarty->assign('state',  $db->getFormFieldByColumnName("state",true));
$smarty->assign('city',  $db->getFormFieldByColumnName("city",true));
$smarty->assign('phone',  $db->getFormFieldByColumnName("phone",true));
$smarty->assign('company_name',  $db->getFormFieldByColumnName("company_name",false));
$smarty->assign('street2',  $db->getFormFieldByColumnName("street2",true));

$smarty->assign('alternate_first_name',  $db->getFormFieldByColumnName("alternate_first_name",true));
$smarty->assign('alternate_last_name',  $db->getFormFieldByColumnName("alternate_last_name",true));
$smarty->assign('alternate_email',  $db->getFormFieldByColumnName("alternate_email",true));
$smarty->assign('alternate_street',  $db->getFormFieldByColumnName("alternate_street",true));
$smarty->assign('alternate_state',  $db->getFormFieldByColumnName("alternate_state",true));
$smarty->assign('alternate_city',  $db->getFormFieldByColumnName("alternate_city",true));
$smarty->assign('alternate_phone',  $db->getFormFieldByColumnName("alternate_phone",true));
$smarty->assign('alternate_company_name',  $db->getFormFieldByColumnName("alternate_company_name",false));
$smarty->assign('alternate_street2',  $db->getFormFieldByColumnName("alternate_street2",true));

$smarty->assign('country',  $db->getFormOptionFieldByColumnName("country", $db->getFieldByColumnName("country"), "SELECT id,countryname FROM countries order by countryname "));
$smarty->assign('shipping_country',  $db->getFormOptionFieldByColumnName("shipping_country", $db->getFieldByColumnName("shipping_country"), "SELECT id,countryname FROM countries order by countryname"));

$smarty->assign('alternate_country',  $db->getFormOptionFieldByColumnName("country", $db->getFieldByColumnName("alternate_country"), "SELECT id,countryname FROM countries order by countryname "));
$smarty->assign('alternate_shipping_country',  $db->getFormOptionFieldByColumnName("shipping_country", $db->getFieldByColumnName("alternate_shipping_country"), "SELECT id,countryname FROM countries order by countryname"));

$db->closeConnection();








//End Code Here

include('footerbase.php');

    $smarty->display('customeredit.tpl');


?>