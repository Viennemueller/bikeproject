<?php

echo "I am Loading Server v1.3<br>";

//Database Connection
$serverName = "10.114.24.23";    
$uid = "csdadmin";      
$pwd = "donoevil!";     
$databaseName = "csdam";    
    
$connectionInfo = array( "UID"=>$uid,                               
                         "PWD"=>$pwd,                               
                         "Database"=>$databaseName);   

echo "Connection info Set<br>";
echo $serverName."<br>";

$conn = sqlsrv_connect( $serverName, $connectionInfo); 

if( $conn === false ) {
    echo "The connection Failed<br>";
}
else
{
     echo "The connect worked<br>";
}



$tsql = "select count(*) from testtable";

echo $tsql."<br>";


//$stmt = sqlsrv_query( $conn, $tsql , $params, $options );    
$stmt = sqlsrv_query( $conn, $tsql );       

while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_NUMERIC))     
{     
     
 echo "The Database is alive and found ".$row[0]." rows in the testtable";  
 
}     
sqlsrv_free_stmt( $stmt);



//end of dashboard
sqlsrv_close( $conn); 

?>