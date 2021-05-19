addEventListener("load", inicializarEscucha, false);

function inicializarEscucha() {
  let seleccion = document.getElementById("select_remitos");
  seleccion.addEventListener("change", nuevaSeleccion, false); //escucha del cambio de valor del select remito
  let guardar = document.getElementById("save");
  guardar.addEventListener("click", guardarInfo, false);
}

let conexion;
function nuevaSeleccion(e) {
  conexion = new XMLHttpRequest();
  conexion.onreadystatechange = procesarEvento;
  numRem = e.target.value;
  console.log(typeof numRem);
  conexion.open("GET", "getdata.php?remito=" + numRem, true);
  conexion.send();
}

function procesarEvento() {
  if (conexion.readyState == 4) {
    console.log(conexion.responseText);
    let datos = JSON.parse(conexion.responseText);
    document.getElementById("usuario").value = datos.usuario;
    document.getElementById("cliente").value = datos.cliente;
    document.getElementById("fecha").value = datos.fecha;
  } else {
    console.log("cargando..");
  }

 
}

function guardarInfo() {
    console.log("guardar la info");
  }
