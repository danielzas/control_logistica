<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <input type="text" placeholder="Operador" id='usuario'>
   <select id='select_remitos'>
       <?php
       include 'remitos_list.php';
       ?>
</select>
<input type="text" placeholder="Cod_cliente" id='cliente'>
<input type="text" placeholder="Fecha" id='fecha'>
<input type="text" placeholder="#Cajas" id='cajas'>
<button id="save">Guardar</button>

<script src="functions.js"></script>
</body>
</html>