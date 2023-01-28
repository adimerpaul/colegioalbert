 
<div class="modal fade" id="ver_estudiante" > 
    <div class="modal-dialog">
      <div class="modal-content">
      
        <div class="modal-header" style="background-color: #c6e2ff;" >
          <img src="../../../imagenes/logo.jpg" width="40" height="30">
          <!--<font color="white"><b><?php //echo $i[0]. " ".$i[1]." ".$i[2]; ?></b>-->
          <font color="green"><b>DESCRIPCION DEL ESTUDIANTE</b></font>
          <button class="close" data-dismiss="modal" aria-label="Close">
            &times;
          </button>
          </font>
        </div>
        <div class="modal-body">
        
          <form id="form1" name="form1" method="post" action="" class="form-horizontal">
           
           <div class="row">
             
             <div class="col-md-6">
               <div class="form-group">
                <label for="paso_nombre" class="control-label col-md-4">Nombre(s):</label>
                <div class="col-md-8">                   
                  <input class="form-control" type="text" name="paso_nombre" id="paso_nombre" style="text-transform: uppercase;" disabled>
               </div>
               </div>
               
               <div class="form-group" >
                <label  for="paso_paterno" class="control-label col-md-4">Apellido paterno: </label>
                <div class="col-md-8">
                  <input class="form-control" type="text" name="paso_paterno" id="paso_paterno" style="text-transform: uppercase;" disabled>
                </div>
               </div>
               
               <div class="form-group" >
                  <label for="paso_materno" class="control-label col-md-4">Apellido materno: </label>
                  <div class="col-md-8">
                    <input class="form-control" type="text" name="paso_materno" id="paso_materno" style="text-transform: uppercase;" disabled>
                  </div>
                </div>
               
               
              </div>
              <div class="col-md-6" align="center">
                
              </div>
           </div>
           <div class="row">

              <div class="col-md-6">

                <div class="form-group" >
                  <label for="paso_ci" class="control-label col-md-4">C.I. :</label>
                  <div class="col-md-8">
                    <input class="form-control" type="number" name="paso_ci" id="paso_ci" disabled>
                  </div>
                </div>
                <div class="form-group">
                  <label for="paso_fecha" class="control-label col-md-4">Fecha de nacimiento: </label>
                  <div class="col-md-8">
                    <input class="form-control" type="text" name="paso_fecha" id="paso_fecha" style="text-transform: uppercase;" disabled>
                  </div>
                </div>
                <div class="form-group">
                <label for="paso_sexo" class="control-label col-md-4">Sexo: </label>
                <div class="col-md-8">
                  <input type="text" class="form-control" id="paso_sexo"  disabled>
                </div>
               </div>
                
                             
                <div class="form-group">
                  <label for="paso_telefono" class="control-label col-md-4">Telefono: </label>
                  <div class="col-md-8">
                    <input class="form-control" type="text" name="paso_telefono" id="paso_telefono" style="text-transform: uppercase;" disabled>
                  </div>
                </div>
              </div>
             
             <div class="col-md-6">
              <!--AQUI-->
               <div class="form-group">
                  <label for="paso_direccion" class="control-label col-md-4">Direccion: </label>
                  <div class="col-md-8">
                    <input class="form-control" type="text" name="paso_direccion" id="paso_direccion" style="text-transform: uppercase; font-size: smaller;" disabled>
                      
                  </div>
                </div>
               
               <div class="form-group" >
                  <label for="paso_rude" class="control-label col-md-4">Codigo RUDE: </label>
                  <div class="col-md-8">
                  <input class="form-control" type="text" name="paso_rude" id="paso_rude" style="text-transform: uppercase;"  disabled>
                  </div>
               </div>
               
               <div class="form-group" >
                <label for="paso_curso" class="control-label col-md-4">Curso:</label>
                <div class="col-md-8">
                <input type="text" class="form-control" id="paso_curso"  style="font-size: smaller;" disabled>
                </div>
             </div>
              
            </div>
           </div>
             <!--DATOS PATERNOS-->
             <div class="row">
             <center>
                <h1>Datos paternos</h1>
              </center>
             
               <div class="col-md-4" style="background-color: #e4e9f0;" align="center">
              <label for="paso_nompat" class="control-label">Nombre completo del padre:</label>
              <input class="form-control" type="text" name="paso_nompat" id="paso_nompat" style="text-transform: uppercase;" disabled>
                
          
              <label for="paso_cipat" class="control-label">CI:</label>
              <input class="form-control" type="number" name="paso_cipat" id="paso_cipat" disabled>
               
              <label for="paso_telfpat" class="control-label"> Telefono:</label>
              <input class="form-control" type="number" name="paso_telfpat" id="paso_telfpat" disabled>
              </div>
               
              <div class="col-md-4" style="background-color: #f5e1d4; " align="center">
              <label for="paso_nommat" class="control-label">Nombre completo de la madre:</label>
              <input class="form-control" type="text" name="paso_nommat" id="paso_nommat" style="text-transform: uppercase;" disabled>
               
              <label for="paso_cimat" class="control-label">CI:</label>
              <input class="form-control" type="text" name="paso_cimat" id="paso_cimat" disabled>
               
              <label for="paso_telfmat" class="control-label">Telefono:</label>
              <input class="form-control" type="text" name="paso_telfmat" id="paso_telfmat" disabled>
              </div>
               
              <div class="form-group col-md-4" style="background-color:#d8d8d8;" align="center">
              <label for="paso_nomtutor" class="control-label">Nombre completo del tutor:</label>
              <input class="form-control" type="text" name="paso_nomtutor" id="paso_nomtutor" style="text-transform: uppercase;" disabled>
               
              <label for="paso_citutor" class="control-label">CI:</label>
              <input class="form-control" type="text" name="paso_citutor" id="paso_citutor" disabled>
               
              <label for="paso_telftutor" class="control-label">Telefono:</label>
              <input class="form-control" type="text" name="paso_telftutor" id="paso_telftutor" style="text-transform: uppercase;" disabled>
              </div>
            </div>
            </form>
        </div>
      </div>
    </div>
</div>
</body>