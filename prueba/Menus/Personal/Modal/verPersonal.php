<body> 
<div class="modal fade" id="ver_personal" > 
    <div class="modal-dialog">
      <div class="modal-content">
      <!--encabezado del formulario emergente-->
        <div class="modal-header" style="background-color: #c6e2ff;" >
          <img src="../../../imagenes/logo.jpg" width="40" height="30">
          <font color="green"><b>DESCRIPCION DEL PERSONAL</b></font>
          <button class="close" data-dismiss="modal" aria-label="Close">
            &times;
          </button>
          </font>
        </div>
        <!--fin encabezado-->
        <!--inicio del cuerpo-->
        <div class="modal-body">
          <form id="form1" name="form1" method="post" action="" class="form-horizontal">
           <div class="row"><!-- 1ra fila-->  
             <div class="col-md-6">
               <div class="form-group">
                <label for="paso_nom" class="control-label col-md-4">Nombre(s):</label>
                <div class="col-md-8">                   
                  <input class="form-control" type="text" name="paso_nom" id="paso_nom" style="text-transform: uppercase;" disabled>
               </div>
               </div>
               <div class="form-group" >
                <label  for="paso_pat" class="control-label col-md-4">Apellido paterno: </label>
                <div class="col-md-8">
                  <input class="form-control" type="text" name="paso_pat" id="paso_pat" style="text-transform: uppercase;" disabled>
                </div>
               </div>
               <div class="form-group" >
                  <label for="paso_mat" class="control-label col-md-4">Apellido materno: </label>
                  <div class="col-md-8">
                    <input class="form-control" type="text" name="paso_mat" id="paso_mat" style="text-transform: uppercase;" disabled>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group" >
                  <label for="paso_ci" class="control-label col-md-4">C.I. :</label>
                  <div class="col-md-8">
                    <input class="form-control" type="number" name="paso_ci" id="paso_ci" disabled>
                  </div>
                </div>
                <div class="form-group">
                <label for="paso_exp" class="control-label col-md-4">Expedido en: </label>
                <div class="col-md-8">
                  <input type="text" class="form-control" id="paso_exp"  disabled>
                </div>
                </div>
                <div class="form-group">
                <label for="paso_sex" class="control-label col-md-4">Sexo: </label>
                <div class="col-md-8">
                  <input type="text" class="form-control" id="paso_sex"  disabled>
                </div>
                </div> 
              </div>
           </div>

           <div class="row"><!-- 2da fila, primera parte-->
              <div class="col-md-6">
                <div class="form-group">
                  <label for="paso_nac" class="control-label col-md-4">Fecha de nacimiento: </label>
                  <div class="col-md-8">
                    <input class="form-control" type="text" name="paso_nac" id="paso_nac" style="text-transform: uppercase;" disabled>
                  </div>
                </div>
                <div class="form-group" >
                   <label for="paso_nua" class="control-label col-md-4">NUA: </label>
                     <div class="col-md-8">
                        <input class="form-control" type="text" name="paso_nua" id="paso_nua" style="text-transform: uppercase;"  disabled>
                     </div>
                </div>         
              </div>

              <div class="col-md-6"><!-- 2da fila, segunda parte-->
                      <div class="form-group">
                        <label for="paso_tel" class="control-label col-md-4">Telefono: </label>
                        <div class="col-md-8">
                          <input class="form-control" type="text" name="paso_tel" id="paso_tel" style="text-transform: uppercase;" disabled>
                        </div>
                      </div>
                      <div class="form-group">
                          <label for="paso_cel" class="control-label col-md-4">Celular: </label>
                          <div class="col-md-8">
                            <input class="form-control" type="text" name="paso_cel" id="paso_cel" style="text-transform: uppercase;" disabled>
                          </div>
                      </div>
                      
                       
              </div>
            </div>
           </div>
           <center>
          <div class="row" style="background-color: #e4e9f0; width:580px; height:auto">
            <div class="form-group">
                <label for="paso_dir" class="control-label col-md-3">Direccion: </label>
                <div class="col-md-9">
                  <input class="form-control" type="text" name="paso_dir" id="paso_dir" style="text-transform: uppercase; font-size: smaller; width:380px; height:auto" disabled>
                </div>
              </div>
            <div class="form-group" >
              <label for="paso_nua" class="control-label col-md-3">Formacion: </label>
              <div class="col-md-9">
              <input class="form-control" type="text" name="paso_for" id="paso_for" style="text-transform: uppercase; width:380px; height:auto" disabled>
            </div>
            </div>
            <div class="col-md-12">
            <div class="form-group">
              <label for="paso_car" class="control-label col-md-4">Cargo:</label>
              <div lcass="col-md-8">
              <input class="form-control" type="text" name="paso_car" id="paso_car" style="text-transform: uppercase; width:150px; height:auto" disabled>
            </div>
            </div>
            <div class="form-group">
              <label for="paso_dec" class="control-label col-md-4">Fecha de ingreso:</label>
              <div lcass="col-md-8">
              <input class="form-control" type="text" name="paso_dec" id="paso_fec" style="text-transform: uppercase; width:150px; height:auto" disabled>
            </div>
            </div>
            </div>
          </div>
        </center>
<!--fin del cuerpo-->
            </form>
        </div>
      </div>
    </div>
</div>
</body>