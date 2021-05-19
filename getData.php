<?php
/* header('Content-Type: text/txt; charset=utf-8'); */
include 'bbdd.php';



$sql = "select COD_PRO_CL, USUARIO, FECHA_MOV from sta14 where n_comp = ?";
/* $params=array($_GET['remito']); */
$params = array($_GET['remito']);
$stmt = sqlsrv_query($con, $sql, $params);

if ($row = sqlsrv_fetch_array($stmt)) {
    $fecha = json_decode(json_encode($row['FECHA_MOV']), true); //CONVERTIR EN ARRAY EL OBJETO DATETIME
    $datos = array('usuario' => $row['USUARIO'], 'cliente' => $row['COD_PRO_CL'], 'fecha' =>$fecha['date']); //GUARDAR EN UN ARRAY LOS DATOS DE LA CONSULTA + EL ARRAY DATE
    $d=json_encode($datos);
    echo $d;
} else {
    echo 'naranja';
}

