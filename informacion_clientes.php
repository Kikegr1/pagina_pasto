<?php 
session_start();

if (!isset($_SESSION["usuario"])) {
  header("location: sesion/admin.php");
}
 ?>




<?php 
require_once("prueba.php");
$cliente=new Cliente();
$registros=$cliente->mostrar();
 ?>

 



  <script src="jquery/jquery-3.5.1.js"></script>
  <script src="jquery/jquery.dataTables.min.js"></script>
  <script src="jquery/dataTables.bootstrap4.min.js"></script>
  <script src="sweetalert/sweetalert2@11.js"></script>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Clientes Información</title>
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
     

     
      <script type="text/javascript">
          function sesion(){  
          Swal.fire({
          title: 'SEGURO QUE QUIERES CERRAR SESIÓN?',
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: ' blue',
          cancelButtonColor: 'red',
          confirmButtonText: 'SI, CERRAR SESIÓN',
          cancelButtonText: 'CANCELAR'
          }).then((result) => {
         if (result.isConfirmed) {
            window.location='cerrar_sesion.php';
         }else{Swal.fire('NO CERRASTE SESIÓN', '', 'info')}
})  
  }
</script>

           
          
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
                  <a  onclick="sesion()" style="color:#fff;">CERRAR SESIÓN</a>  

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
                     <h2>CLIENTES REGISTRADOS</h2>  



<div id="busca">

<script type="text/javascript">
    $(document).ready(function() {
    $('#example').DataTable();
} );
  </script>

</div>  



<div style="width:98%"   id="tabla">

<table id="example" class="table table-striped table-bordered" >
        <thead>

            <tr>
        <th>Nombre</th>
        <th>Apellido Paterno</th>
        <th>Apellido Materno</th>
        <th>Correo</th>
        
            </tr>


        </thead>

        <tbody>
          <?php 

          while($fila=mysqli_fetch_array($registros))
           {
        ?>
          <tr>
            <td><?=$fila["nombre_cliente"]?>
            </td>
            <td><?=$fila["apellidos"]?>
            </td>
            <td><?=$fila["num_telefono"]?>      
            </td>
            <td><?=$fila["comentarios"]?>    
            </td>
           
        
        
           

          

          </tr>
        <?php     
          }
         ?>
        </tbody>
       
    </table>

</div>



                    </div>






                </div>              

                






              
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
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
