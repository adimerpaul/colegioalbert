<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <title>Colegio_Albert_Einstein</title>
  
</head>

<body  style="background-color: #011f4b;">

<div class="form-group container">
  <br>
  <br>
  <div class="col-sm-4 col-md-4"></div>
  <div class="col-md-4 col-sm-4">
    <table style="border-width: '2'; border-color: red;">
    <tr>
    <td>
      <div class="panel panel-primary" style="background-color: white">
                
        <div class="panel-body">
          
           <center><p><img src="imagenes/image.jpg" width="246" height="277" style="border-radius:50px"></p></center>
          
            <form id="form1" name="form1" method="post" action="pro_acceso.php" class="form-horizontal">
                  <font face="calibri" style="color: #0e2f44;">
                  <div class="form-group">
                   <label class="control-label col-md-3 col-sm-3" for="user">Usuario:</label>
                    <div class="col-md-8 col-sm-8 ">
                   
                      <input class="form-control" type="text" name="user" id="user" style="background-color: #efefc8;" placeholder="Ingresar Usuario" required/>
                      
          
                    </div>
                    <div class="col-md-1 col-sm-1"></div>
                  </div>
                  
                  <div class="form-group">
                    <label for="pass" class="control-label col-md-3 col-sm-3">Contraseña:</label>
                      <div class="col-md-8 col-sm-8">
                        <input class="form-control" type="password" name="pass" id="pass" style="background-color: #efefc8
;" placeholder="Ingresar Contraseña" required/>
                      </div>
                      <div class="col-md-1 col-sm-1"></div>
                  </div> 
                  
                  <div class="form-group">
                    <label for="cat" class="control-label col-md-3 col-sm-3">Categoria:</label>
                      <div class="col-md-7 col-sm-7">
                        <select class="form-control" name="cat" id="cat" style="background-color: #f5f5dc;">
                        <option selected="selected">Seleccionar</option>
                        <option>Administrador</option>
                        <option>Auxiliar</option>
                        <!--<option>Cajero</option>
                        <option>Docente</option>-->
                        </select>
                      </div>
                    <div class="col-md-3 col-sm-3"></div>
                  </div>
                  
                  <div class="form-group">
                   <center>
                       <button type="submit" class="btn btn-primary" name="ingreso" size="20" style="width: 220px;">
                       <b>Iniciar Sesión</b>
                       </button>
                   </center>
          
                   
                  </div>
              
            </form>
        </div>
        
         
        
      </div>
      </td>
      </tr>
    </table>
  </div>
  <div clas="col-sm-4 col-md-4"></div>
  </div>
  <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
      <font color="WHITE" face="calibri" size="2">
              <p class="navbar-text pull-left">
              &copy
              <?php echo date('Y');?> - <U>Algoritmia S.R.L</U>.
                 <i></i>
          </p>
      </font>
    </div>
    <div class="col-md-4"></div>
  </div>


<script src="js/query.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
