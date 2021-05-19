<?php
    $servidor = 'servidor';
    $info_server = array( "Database"=>"laker_sa", "UID"=>"sa", "PWD"=>"Axoft1988");
    $con = sqlsrv_connect($servidor,$info_server);
    if( $con === false) {
        die( print_r( sqlsrv_errors(), true));
    }

/* $sql="select top 1 * from sta14 where fecha_mov between '20210418' and '20210421'";
$stmt=sqlsrv_query($con,$sql); */

/* $results=sqlsrv_fetch_array($stmt); */



/* while($row=sqlsrv_fetch_array($stmt))
{
    echo 'Remito:'.$row['N_COMP'].PHP_EOL;
} */
?>