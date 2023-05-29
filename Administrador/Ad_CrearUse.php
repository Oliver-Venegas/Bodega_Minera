<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Crear Usuario</title>
    <link rel="stylesheet" href="../Estilos.css">
</head>
<body style="margin: 0px;">
    <header id="superior_line">
        <a id="fle_menAd" href="Menu_Ad.html"> <img class="rounded float-start" id="arrow_image" src="../imagenes/Vector.png" alt="flecha"> </a>
        <img class="rounded float-end" id="Sol_ON" src="../imagenes/solicitud_OFF.png" alt="No solicitud">
        <div class="container">   
        <h1 id="line_ADtitule" class="text-center">Crear Usuario</h1>
        </div>
    </header>

    <div class="container text-center" style="margin-top: 10px;" >
        <form name="fomulo" action="../php/regis_user.php" method="POST" id="creacion_user" class="row text-center" > 
            <label  class="row" style="margin-top: 50px;">
                <div class="col-4" >
                <input type="text" id="txt_tipeBodAd" readonly class="form-control-plaintext text-end " value="Tipo de Usuario:">
                </div>     
                <div class="col-6">
                  <select class="form-select" id="AdUsertipe_txt" name="user_tipo">
                    <option selected></option>
                    <option value="Jefe de Bodega">Jefe de Bodega</option>
                    <option value="Minero">Minero</option>
                  </select>
                 <span></span>
                </div>
               
            </label>  
                                     
              
              
            <label class="row" style="margin-top: 50px;">
              <div class="col-4">
                <input type="text" readonly class="form-control-plaintext text-end"  value="Nombre de Usuario:">
                </div>
                <div class="col-6">
                 <input type="text" id="AdUsername_txt" name="user_nombre" class="form-control" >
                <span></span>  
                </div>  
                            
            </label>  
            
            <div class="row" style="margin-top: 50px;">
                <div class="col-4">
                  <input type="text"  readonly class="form-control-plaintext text-end"  value="Contraseña:">
                  </div>
                  <div class="col-6">
                   <input type="text" id="AdUserpass_txt" name="user_contra" class="form-control" >
                  <span></span> 
                  </div>  
                                   
              </div>

              <div class="row" style="margin-top: 50px;">
                <div class="col-4">
                  <input type="text"readonly class="form-control-plaintext text-end"  value="Vuelva a escribir la Contraseña:">
                  </div>
                  <div class="col-6">
                   <input type="text" id="AdUseragain_txt" name="user_again" class="form-control" >
                   <span></span>
                  </div>                    
              </div>

              <div class="container text-center" style="margin-top: 60px;">
            <div class="row"  >
            <div class="col-5">
                <a id="canc_AdUser" class="btn btn-primary btn-lg " href="Menu_Ad.html">Cancelar</a>
            </div>

            <div class="col-7">
                <button id="conf_AdUser" class="btn btn-primary btn-lg "  type="submit">Confirmar</button>
            </div>
            
            </div>
          </div>
        </form>
    
          

          </div>


        <script src="../js/valida_CreaUser.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>