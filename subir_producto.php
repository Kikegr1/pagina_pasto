<?php 
session_start();

if (!isset($_SESSION["usuario"])) {
  header("location: sesion/admin.php");
}
 ?>

  <link rel="stylesheet" type="text/css" href="bootstrap/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="bootstrap/dataTables.bootstrap4.min.css">
  <script src="jquery/jquery-3.5.1.js"></script>
  <script src="jquery/jquery.dataTables.min.js"></script>
  <script src="jquery/dataTables.bootstrap4.min.js"></script>
  <script src="sweetalert/sweetalert2@11.js"></script>








<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Subir Producto</title>
  <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>

  

           
          
    <div id="wrapper">
         <div class="navbar navbar-inverse navbar-fixed-top" style="background-color: #01A5CB">
            <div class="adjust-nav">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
              
                 <span class="logout-spn" >
                  <a onclick="sesion()" style="color:#fff;">CERRAR SESIÓN</a>  

                </span>

                  <span  >
                    <div align="left"> 
                  <a  ><img src=" imagenes/logo.jpeg"> </a>  
                    </div>
                </span>

                
            </div>
        </div>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                 

 <li >
                        <a href="panel_admi.php" ><i class="fa fa-desktop "></i>Bienvenido<span class="badge"></span></a>
                    </li>
                   

                    <li>
                        <a href="informacion_clientes.php"><i class="fa fa-table "></i>Informacion de Clientes<span class="badge"></span></a>
                    </li>
                    <li class="active-link">
                        <a href="subir_producto_admin.php"><i class="fa fa-edit "></i>Subir Producto<span class="badge"></span></a>
                    </li>



                </ul>
                            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>SUBE TU PRODUCTO AQUI </h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
              <body>
                  <center >
<h1 class="centrar">Datos del Producto</h1></center>
<div class="centrado">
<div class="container px-4">
  <div class="row gx-5">

    <div class="col">
     <label for="exampleFormControlInput1" class="centrar">Nombre del producto:</label>
  <input type="text" class="form-control" id="nombre_producto" required="">
    </div>
    <div class="col">
     <label for="exampleFormControlInput1" class="centrar">Precio:</label>
  <input type="number" class="form-control" id="precio" required="" >
    </div>
  </div>
</div>
<div class="container px-4">
  <div class="row gx-5">
    <div class="col">
     <label for="exampleFormControlInput1" class="centrar">Descripcion:</label>
  <input type="text" class="form-control" id="descripcion" required="">
    </div>
    <div class="col">
     <label for="exampleFormControlInput1" class="centrar"> Imagen:</label>
  <input type="file" class="form-control-file" id="imagen">
    </div>
    <br><br>
  <div class="boton_center">
  <button type="submit" class="btn btn-light" onclick="guardar()">Subir</button>
  </div>
</div>
</div>


 <script>
    
    function guardar(){

      var formData= new FormData();

      var files= $('#imagen')[0].files[0];

      formData.append('file',files);


      nombre_producto= $('#nombre_producto').val()
      formData.append('nombre_producto',nombre_producto);
      precio= $('#precio').val()
      formData.append('precio',precio);
      descripcion= $('#descripcion').val()
      formData.append('descripcion',descripcion);
      


      if (nombre_producto== "" || files == "" || precio == "" ||  descripcion== "" ) {

   Swal.fire({
    title: 'Algo anda mal',
    text:   'Necesitas llenar todos los campos ',
    icon:   'error',
    button:false,
  });
 }else{
  
  $.ajax({
    url:'inserciones/insercion_producto.php',
    type: 'POST',
    data: formData,
    cache:false,
    contentType: false,
    processData: false,
    
    success:function(respuestaprod){
      console.log("Esto llegó del php = "+respuestaprod)
      if (respuestaprod==1) {
        Swal.fire({
    title: 'genial',
    text:   'registrada con exito',
    icon:   'success',
    button:false,
            });
      }else if (respuestaprod==2) {
        Swal.fire({
    title: 'Algo anda mal',
    text:   'error al cargar el producto ',
    icon:   'error',
            });
      }

    }
  })
    }
 }
  </script>
              </body>
                 <!-- /. ROW  -->           
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
    <div class="footer" style="background-color: #01A5CB">
      
    
             <div class="row" >
                <div class="col-lg-12" >
                    &copy;  2014 yourdomain.com | Design by: <a href="http://binarytheme.com" style="color:#fff;"  target="_blank">www.binarytheme.com</a>
                </div>
        </div>
        </div>
          

     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>