<?php

    include('DatabaseClassConfig.php');


$tsql = "select top 1 email,customer_id,coalesce(admin,0) as admin from sales.customers where password = '".$_GET['password']."' COLLATE SQL_Latin1_General_CP1_CS_AS and email = '".$_GET['user']."'";
    //This code will check that the password is case sensitive but not the email address.            
        
    $conn = sqlsrv_connect($global_serverName, $global_connectionInfo);
    $stmt = sqlsrv_query( $conn, $tsql);     


    $resultmessage = "error";

    while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_NUMERIC))     
            {     
                  
                  $_SESSION["username"] = $_GET['user'];
                  $_SESSION["customer_id"] = $row[1];
                  if ($row[2] == "true")
                    $_SESSION["admin"] = "1";
                  else 
                   $_SESSION["admin"] = "0";


console.log("admin:".$row[2]);
                  if( $row[2] == 1)
                  {
                    $resultmessage = "admin";
                  }
                  else
                  {
                    $resultmessage = "customer";
                  }

            }     

    sqlsrv_free_stmt($stmt);  

    echo $resultmessage;