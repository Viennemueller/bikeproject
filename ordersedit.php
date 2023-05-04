<?php
    include('DatabaseClassConfig.php');

    //Place Code here
    include('DatabaseClass.php');
    
    
    $db = new DatabaseClass("sales.orders",false,$global_serverName,$global_connectionInfo);
    
    $db->mode = "edit";
    
    $order_id = $_GET["order_id"];
    
    $tsql = "select order_id,customer_id,order_status,
    FORMAT(order_date, 'yyyy-MM-dd' ) AS order_date, 
    FORMAT(required_date, 'yyyy-MM-dd'  ) AS required_date, 
    FORMAT(shipped_date, 'yyyy-MM-dd') AS shipped_date,store_id,staff_id from sales.orders where order_id = '" . $order_id . "'";
    
    //echo 'Sql:'.$tsql;
    
    if ($db->Select($tsql, "order_id") === false) {
        $db->closeConnection();
        //header("Location: index.php");
    }
    
    //This will delete
    if ( isset($_POST['remove']) && $_POST['remove'] == "true"  ) {
    
    //echo "Type: Delete";
    $db->deleteRow($_POST['order_id']);
    $_SESSION["username"] = "";
    header("Location: index.php");
    
    }
    
    //    #Save Code
    if ( $_POST['save'] == "Save" ) {
    
    //echo "Type: Save";
    
    $db->updateRow(['customer_id','order_status','order_date','required_date','shipped_date','store_id','staff_id']);
    $strmessage = "Changes Saved";
    $smarty->assign("message", $strmessage);
    
    }
    $smarty->assign('order_id',  $db->getFieldByColumnName("order_id"));

    $smarty->assign('customer_id',  $db->getFormOptionFieldByColumnName("customer_id", $db->getFieldByColumnName("customer_id"),
     "SELECT customer_id,last_name+' '+first_name as name FROM sales.customers order by first_name,last_name"));
    
    $smarty->assign('order_status',  $db->getFormFieldByColumnName("order_status",true));

    $smarty->assign('order_date',  $db->getFormDateFieldByColumnName("order_date",false));

    $smarty->assign('required_date',  $db->getFormDateFieldByColumnName("required_date",false));

    $smarty->assign('shipped_date',  $db->getFormDateFieldByColumnName("shipped_date",false));

    $smarty->assign('store_id',  $db->getFormOptionFieldByColumnName("store_id", $db->getFieldByColumnName("store_id"), "SELECT store_id, store_name from sales.stores order by store_name "));
    $smarty->assign('staff_id',  $db->getFormFieldByColumnName("staff_id",true));

    

    $db = new DatabaseClass("sales.stores",false,$global_serverName,$global_connectionInfo);
    
    $db->mode = "edit";
    
    $order_id = $_GET["order_id"];
    
    $tsql = "select order_id, product_id, quantity, list_price, discount from sales.order_items ='" . $order_id . "' order by order_id";
    
    //echo 'Sql:'.$tsql;
    
    $db->Select($tsql, "order_id");
    
    $orders = $db->getGrid(['order_id', 'product_id','quantity','list_price','discount'], "orders.php");
    

    $smarty->assign('orders', $orders);
    
    
    
    $db->closeConnection();





    $db->closeConnection();
    
    
    
    
    
    
    
    
    //End Code Here
    
    include('footerbase.php');
    
        $smarty->display('ordersedit.tpl');
    
    
    ?>