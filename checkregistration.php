<?php

    include('DatabaseClassConfig.php');

    $conn = sqlsrv_connect($global_serverName, $global_connectionInfo);

    $resultmessage = "error";



   

        //echo "1";

            if( $_GET['email'] != "" && $_GET['password'] != "" )
            {

                    $tsql = "select count(*) FROM sales.customers where email = '".$_GET['email']."'";

                    //echo $tsql;

                    $stmt = sqlsrv_query( $conn, $tsql);     

                    $resultmessage = "saved";

                    while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_NUMERIC))     
                    {     
                        if( $row[0] > 0)
                        {
                            $resultmessage = "error";
                        }
                    }     

                    sqlsrv_free_stmt($stmt);   
                    
                    if( $resultmessage == "saved")
                    {
                        echo "2";

                        $tsqluser = "insert into sales.customers (email,[password],first_name,last_name) values ('".$_GET['email']."','".$_GET['password']."','FIRST','LAST')";
                        $stmt = sqlsrv_query( $conn, $tsqluser);  
                        sqlsrv_free_stmt($stmt); 

                        //echo $tsqluser;


                    }
            
            }
            else
            {
                    $resultmessage = "error";

            }


       

        echo $resultmessage;
    
