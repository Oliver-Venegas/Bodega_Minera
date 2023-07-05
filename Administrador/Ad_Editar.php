<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Edicion de Bodega</title>
    <link rel="stylesheet" href="../Estilos.css">
</head>
<body style="margin: 0px;">
    <header id="superior_line">
        <a id="fle_menAd" href="Ad_SelEdi.html"> <img class="rounded float-start" id="arrow_image" src="../imagenes/Vector.png" alt="flecha"></a>
        <img class="rounded float-end" id="Sol_ON" src="../imagenes/solicitud_OFF.png" alt="No solicitud">
        <div class="container">   
        <h1 id="line_ADtitule" class="text-center" >Editar Listado</h1>
        </div>

    </header>  
<br>

<div class="row">
<?php 
include ('../php/conect_be.php')
?>

    <div class="table-responsive prodedi_envuelto">
      <table class="table table-hover tabla_responsi">

      <thead class="text-muted text-center hea">
        <tr>
        <th>Codigo Producto</th>
        <th>Tipo</th>
        <th>Descripcion</th>
        <th>Fecha</th>
        <th>Total Unidades</th>

        </tr>
        
      </thead>

     <tbody class="text-center boy" id="data_general">

 
      
    <?php 
//Tabla de base de datos
  $sql = "SELECT * FROM producto_general";
  $pro_query = mysqli_query($conexion,$sql);

    while($prod_row = mysqli_fetch_assoc($pro_query)){ ?>

      <tr>
        <td><?php echo $prod_row['codigo_producto']; ?></td>

        <td><?php echo $prod_row['tipo_producto']; ?></td>

        <td><?php echo $prod_row['descripcion_producto']; ?></td>

        <td><?php echo $prod_row['fecha_producto']; ?></td>

        <td><?php echo $prod_row['unidades_producto']; ?></td>

      </tr>

      <?php } ?>
     </tbody>
      
        <caption>Bodega General</caption>
      </table>
    </div>

 <div class="col-4">

  <!-- INGRESAR NUEVO PRODUCTO -->

<div class="container" id="conta_newproAd" >
    <h3 id="titul_edit_testAd" class="text-center">INGRESAR NUEVO PRODUCTO</h3>
    <form class="row" action="../php/Ad_procEdit.php" method="POST" style="margin-top: 30px;">

        <div class="row">             
          <div class="col-auto">
            <div >
                <input type="text" id="txt_name_newproAd"  readonly class="form-control-plaintext" value="Nombre">
                <div class="col-auto">
                    <input type="text" id="Adnewpro_name_txt" name="Ad_newpro_name" class="form-control">
                    <span></span> 
                  </div>
            </div>
          </div>
        </div>   

        <div class="row">
          <div class="col-auto">
            <div><input type="text" id="txt_tipe_newproAd" readonly class="form-control-plaintext"  value="Tipo">
             <input type="text" id="Adnewpro_tipe_txt" name="Ad_newpro_tipe" class="form-control" >
             <span></span> 
            </div>      
          </div>
        </div>   
          
        <div class="row">
          <div class="col-auto">
            <div><input type="text" id="txt_cant_newproAd" readonly class="form-control-plaintext" value="Cantidad">
            <input type="text" id="Adnewpro_cant_txt" name="Ad_newpro_cant" class="form-control" >
            <span></span> 
            </div>
          </div>
        </div>


      <div class="row">
        <div class="col-3">
            <button id="conf_newproAd" class="btn btn-primary btn-lg " name="Ad_newpro_conf" type="submit">Confirmar</button>
          </div>
        </div>
     

      </form>

       </div>


      <!-- EXTRAER PRODUCTO -->

      <div class="container" id="conta_ExtrAd" >
    <h3 id="titul_edit_ExtrAd" class="text-center">EXTRAER PRODUCTO</h3>
    <form class="row" style="margin-top: 30px;">

        <div class="row">             
          <div class="col-auto">
            <div >
                <input type="text" id="txt_name_ExtrAd"  readonly class="form-control-plaintext" value="Nombre">
                <div class="col-auto">
                    <input type="text" id="AdExtr_name_txt" class="form-control">
                  </div>
            </div>
          </div>
        </div>   

        <div class="row">
          <div class="col-auto">
            <div><input type="text" id="txt_codi_ExtrAd" readonly class="form-control-plaintext"  value="Codigo">
             <input type="text" id="AdExtr_codi_txt" class="form-control" >
            </div>      
          </div>
        </div>   
          
        <div class="row">
          <div class="col-auto">
            <div><input type="text" id="txt_cant_ExtrAd" readonly class="form-control-plaintext" value="Cantidad">
            <input type="text" id="AdExtr_cant_txt" class="form-control" >
            </div>
          </div>
        </div>

        <div class="row">
        <div class="col-3">
            <button id="conf_ExtrAd" class="btn btn-primary btn-lg " type="submit">Confirmar</button>
          </div>
        </div>

      </form>

      
      </div>


      <!-- INGRESO PRODUCTO EXISTENTE-->

      <div class="container" id="conta_ProexAd" >
    <h3 id="titul_edit_ProexAd" class="text-center">INGRESAR PRODUCTO EXISTENTE</h3>
    <form class="row" style="margin-top: 30px;">

        <div class="row">             
          <div class="col-auto">
            <div >
                <input type="text" id="txt_name_ProexAd"  readonly class="form-control-plaintext" value="Nombre">
                <div class="col-auto">
                    <input type="text" id="AdProex_name_txt" class="form-control">
                  </div>
            </div>
          </div>
        </div>   

        <div class="row">
          <div class="col-auto">
            <div><input type="text" id="txt_codi_ProexAd" readonly class="form-control-plaintext"  value="Codigo">
             <input type="text" id="AdProex_codi_txt" class="form-control" >
            </div>      
          </div>
        </div>   
          
        <div class="row">
          <div class="col-auto">
            <div><input type="text" id="txt_cant_ProexAd" readonly class="form-control-plaintext" value="Cantidad">
            <input type="text" id="AdProex_cant_txt" class="form-control" >
            </div>
          </div>
        </div>

      </form>

      <div class="row">
        <div class="col-3">
            <button id="conf_ProexAd" class="btn btn-primary btn-lg " type="submit">Confirmar</button>
          </div>
        </div>
      </div>


      <!-- ELIMINAR PRODUCTO -->

      <div class="container" id="conta_ElimAd" >
    <h3 id="titul_edit_ElimAd" class="text-center">ELIMINAR PRODUCTO</h3>
    <form class="row" action="../php/Ad_procEdit.php" method="POST" style="margin-top: 30px;">

        <div class="row">             
          <div class="col-auto">
            <div >
                <input type="text" id="txt_name_ElimAd"  readonly class="form-control-plaintext" value="Nombre">
                <div class="col-auto">
                    <input type="text" id="AdElim_name_txt" name="Ad_Elipro_name" class="form-control">
                    <span></span> 
                  </div>
            </div>
          </div>
        </div>   

        <div class="row">
          <div class="col-auto">
            <div><input type="text" id="txt_codi_ElimAd" readonly class="form-control-plaintext"  value="Codigo">
             <input type="text" id="AdElim_codi_txt" name="Ad_Elipro_codi" class="form-control" >
             <span></span> 
            </div>      
          </div>
        </div>   


        <div class="row">
        <div class="col-3">
            <button id="conf_ElimAd" class="btn btn-primary btn-lg " name="Ad_Elipro_conf" type="submit">Confirmar</button>
          </div>
        </div>

      </form>

      
      </div>

    </div>

</div>
    
      <div class="container" style="margin-top: 3%;">
        <div class="row g-4">
          <div class="col-4">
            <div ><button id="Newpro_Ad" class="btn btn-primary btn-lg " onclick="mostra_Newpro_Ad();" type="submit">Ingresar Nuevo Producto</button></div>
          </div>
          <div class="col-7">
            <div ><button id="Extra_Ad" class="btn btn-primary btn-lg " onclick="mostra_Extra_Ad();" type="submit">Extraer Producto</button></div>
          </div>
          <div class="col-4">
            <div ><button id="Exist_Ad" class="btn btn-primary btn-lg " onclick="mostra_Exist_Ad();" type="submit">Ingresar a Producto Existente</button></div>
          </div>
          <div class="col-4">
            <button id="Delet_Ad" class="btn btn-primary btn-lg " onclick="mostra_Delet_Ad();" type="submit">Eliminar Producto</button>
          </div>
        </div>
      </div>

    
      <script src="../js/valida_AdEdi.js"></script>
      <script src="../js/visible_edit.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>