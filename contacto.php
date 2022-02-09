<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.css'>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<link href="css/carrusel.css" rel="stylesheet" type="text/css">

    <link href="css/centrado.css" rel="stylesheet" type="text/css">

<HTML>
<HEAD>


</HEAD>
<BODY class="fondo">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php"><img class="quitar-fondo" src="imagenes/logo.jpeg" alt=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
   <div class="collapse navbar-collapse" id="navbarSupportedContent">

      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

       <li class="nav-item">
          <a class="nav-link" href="index.php">Inicio</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="servicios.php">Servicios</a>
        </li>

        <li class="nav-item">
          <a style="background-color: #01A5CB" class="nav-link active" aria-current="page"  href="contacto.php">Contacto</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="https://wa.me/message/NQMSVUOPCF3XD1"><img src="imagenes/redes/whatsapp.png" alt=""></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://www.facebook.com/Innovasin.cln/"><img src="imagenes/redes/facebook.png" alt=""></a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="https://www.instagram.com/novasinpersianascln/?hl=es"><img src="imagenes/redes/insta2.jpeg" alt=""></a>
        </li>
         <li class="nav-item">
          <a class="nav-link disabled">Telefono: 6959530021</a>
        </li>

      </ul>
      
    </div>
  </div>
</nav>
<br>
<br>
<br>
<center >
<h1 class="centrar" >Datos de Contacto</h1></center>
<div class="centrado">
<div class="container px-4">
  <div class="row gx-5">
    <div class="col">
     <label for="exampleFormControlInput1" class="centrar">Nombres:</label>
  <input type="text" class="form-control" id="nombres" >
    </div>
    <div class="col">
     <label for="exampleFormControlInput1" class="centrar">Apellidos:</label>
  <input type="text" class="form-control" id="apellidos" >
    </div>
  </div>
</div>
<div class="container px-4">
  <div class="row gx-5">
    <div class="col">
     <label for="exampleFormControlInput1" class="centrar">N.de Telefono:</label>
  <input type="number" class="form-control" id="telefono">
    </div>
    <div class="col">
     <label for="exampleFormControlInput1" class="centrar">Calle Principal:</label>
  <input type="text" class="form-control" id="calle_p" >
    </div>
  </div>
</div>
<div class="container px-4">
  <div class="row gx-5">
    <div class="col">
     <label for="exampleFormControlInput1" class="centrar">Segunda Calle:</label>
  <input type="text" class="form-control" id="calle_s" >
    </div>
    <div class="col">
     <label for="exampleFormControlInput1" class="centrar">Colonia:</label>
  <input type="text" class="form-control" id="colonia" >
    </div>
  </div>
</div>
<div class="container px-4">
  <div class="row gx-5">
    <div class="col">
     <label for="exampleFormControlInput1" class="centrar">Codigo Postal:</label>
  <input type="number" class="form-control" id="postal_c" >
    </div>
    <div class="col">
     <label for="exampleFormControlInput1" class="centrar">N. de Casa:</label>
  <input type="number" class="form-control" id="numero_casa" >
    </div>
    <div class="col">
     <label for="exampleFormControlInput1" class="centrar">Ciudad:</label>
  <input type="text" class="form-control" id="ciudad" >
    </div>
  </div>
</div>
</div>
<div class="centrar1">
  <label for="exampleFormControlTextarea1" class="centrar">Comentarios:</label>
  <textarea class="form-control" id="comentarios" rows="3"></textarea>
  <br>
  <div class="boton_center">
  <button type="button" class="btn btn-light" onclick="guardar()">Enviar Datos</button>
  </div>
</div>

<br>
<br>

 <footer class="text-center text-white" style="background-color: #01A5CB">
    
   <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2021 Copyright:
    <a class="text-white" href="#">NOVASSIN.com</a>

    <div class="text-center p-3" style="background-color:#1AA606;" width="200">
      Brindamos apoyo a escuelas, unidades depotivas, etc.
     </div>

  </div>
 
</footer>






  
  

</BODY>
</HTML>






<script>
  function guardar(){
  nombres =   $("#nombres").val()
  apellidos = $("#apellidos").val()
  telefono = $("#telefono").val()
  calle_p= $("#calle_p").val()
  calle_s= $("#calle_s").val()
  colonia= $("#colonia").val()
  postal_c =   $("#postal_c").val()
  numero_casa = $("#numero_casa").val()
  ciudad = $("#ciudad").val()
  comentarios = $("#comentarios").val()

  

  if (nombres == "" || apellidos == "" || telefono == "" || calle_p == "" || calle_s == "" || colonia == "" || postal_c == "" || numero_casa == "" || ciudad == "" || comentarios == "" ) {

   swal({
    title: 'Algo anda mal',
    text:   'Necesitas llenar todos los campos ',
    icon:   'error',
     button:false,
  });
 } else {


  datos = "nombres=" + nombres +
  "&apellidos=" + apellidos +
  "&telefono=" + telefono +
  "&calle_p=" + calle_p +
  "&calle_s=" + calle_s +
  "&colonia=" + colonia +
  "&postal_c=" + postal_c +
  "&numero_casa=" + numero_casa +
  "&ciudad=" + ciudad +
  "&comentarios=" + comentarios;
  console.log(datos)



  $

  .ajax({
    method:"POST",
    data:datos,
    url:"inserciones/insercion_contacto.php",
    success:function(respueta){
      console.log("Esto llegó del php = "+respueta)
      if (respueta==1) {
      swal({
        title: 'Bien hecho',
        text:   'Registro exitoso',
        icon:   'success',
        button:false,

      });
    }else if(respueta==2){
   
      swal({
        title: 'error',
        text:   'Algo salio mal',
        icon:   'error',
        button:false,
      });
    }
  }
})


}
}

</script>