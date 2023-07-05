<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.0/dist/jquery.min.js"></script>
    <title>Listado de Bodega</title>
    <link rel="stylesheet" href="../Estilos.css">
</head>
<body style="margin: 0px;">
    <header id="superior_line">
        <a id="fle_menAd" href="Ad_SelLista.html"> <img class="rounded float-start" id="arrow_image" src="../imagenes/Vector.png" alt="flecha"></a>
        <img class="rounded float-end" id="Sol_ON" src="../imagenes/solicitud_OFF.png" alt="No solicitud">
        <div class="container">   
        <h1 id="line_ADtitule" class="text-center">Listado de Bodega</h1>
        </div>
        
    </header>
<?php 
include ('../php/conect_be.php')
?>

    <div class="table-responsive prod_envuelto">
      <table class="table table-hover tabla_responsiva">

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
    

     <form class="row g-4">
        <div class="col-auto ">
          
          <input type="text" readonly class="form-control-plaintext" id="txt_listadoAd" value="Nombre del Producto:">
        </div>
        <div class="col-auto">
          <input type="text" class="form-control" id="busca_listadoAd" placeholder="Ingresar el Producto">
        </div>
        
        <div class="col-auto">
            <button id="Adlista_Exc" class="btn btn-primary mb-3" type="submit">Extraer en Excel</button>
        </div>
      </form>    
    
   <script>
    $(document).ready(function(){
      //Elemento a buscar
      $('#busca_listadoAd').on("keyup", function(){
        var busca_listadoAd = $(this).val();
        $.ajax({
          method:'POST',
          url:'../php/busca_ajax.php',
          //Columa de base de datos y input de la pagina web
          data:{descripcion_producto:busca_listadoAd},
          success:function(response){
            $("#data_general").html(response)

          }

        });

      });

    });

   </script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script> 
</body>
</html>