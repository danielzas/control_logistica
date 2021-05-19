<?php
include 'bbdd.php';

$sql="select * from sta14 where FECHA_MOV between GETDATE()-1 and GETDATE() and COD_PRO_CL like '[GFM]%'  and T_COMP='REM' order by N_COMP asc";
$stmt=sqlsrv_query($con,$sql); 
echo  '<option value="" selected disabled hidden>seleccionar REM</option>';
while($row=sqlsrv_fetch_array($stmt))
{
    echo '<option>'.$row['N_COMP'].'</option>';
} 
?>