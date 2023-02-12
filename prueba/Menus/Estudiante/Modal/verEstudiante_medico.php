
<div class="modal fade" id="ver_estudiante" >
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header" style="background-color: #c6e2ff;" >
          <img src="../../imagenes/logo.jpg" width="40" height="30">
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
             <div class="col-md-10">
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
                <div class="form-group">
                  <label for="paso_fecha" class="control-label col-md-4">Curso: </label>
                  <div class="col-md-8">
                    <input class="form-control" type="text" name="paso_curso" id="paso_curso" style="text-transform: uppercase;" disabled>
                  </div>
                </div>
                <div class="form-group">
                  <label for="paso_fecha" class="control-label col-md-4">Fecha nac: </label>
                  <div class="col-md-8">
                    <input class="form-control" type="text" name="paso_fecha_nac" id="paso_fecha_nac" style="text-transform: uppercase;" disabled>
                  </div>
                </div>
                <div class="form-group">
                <label for="paso_sexo" class="control-label col-md-4">Telf Padre: </label>
                <div class="col-md-8">
                  <input type="text" class="form-control" id="paso_telfpat"  disabled>
                </div>
               </div>
               <div class="form-group">
                <label for="paso_sexo" class="control-label col-md-4">Telf Madre: </label>
                <div class="col-md-8">
                  <input type="text" class="form-control" id="paso_telfma"  disabled>
                </div>
               </div>
               <div class="form-group">
                <label for="paso_sexo" class="control-label col-md-4">Telf Tutor: </label>
                <div class="col-md-8">
                  <input type="text" class="form-control" id="paso_telftut"  disabled>
                </div>
               </div>
               <div class="form-group">
                <label for="paso_sexo" class="control-label col-md-4">Caso de emergencia llamar: </label>
                <div class="col-md-8">
                  <input type="text" class="form-control" id="paso_llamar"  disabled>
                </div>
               </div>
               <div class="form-group">
                <label for="paso_sexo" class="control-label col-md-4">Peso: </label>
                <div class="col-md-8">
                  <input type="text" class="form-control" id="paso_peso"  disabled>
                </div>
               </div>
                <div class="form-group">
                  <label for="paso_telefono" class="control-label col-md-4">Estatura: </label>
                  <div class="col-md-8">
                    <input class="form-control" type="text" name="paso_estatura" id="paso_estatura" style="text-transform: uppercase;" disabled>
                  </div>
                </div>
              </div>
             <div class="col-md-6">
              <!--AQUI-->
               <div class="form-group">
                  <label for="paso_direccion" class="control-label col-md-4">Seguro médico: </label>
                  <div class="col-md-8">
                    <input class="form-control" type="text" name="paso_seguro" id="paso_seguro" style="text-transform: uppercase; font-size: smaller;" disabled>

                  </div>
                </div>
               <div class="form-group" >
                  <label for="paso_rude" class="control-label col-md-4">Grupo sanguineo: </label>
                  <div class="col-md-8">
                  <input class="form-control" type="text" name="paso_sangre" id="paso_sangre" style="text-transform: uppercase;"  disabled>
                  </div>
               </div>
               <div class="form-group" >
                <label for="paso_curso" class="control-label col-md-4">Alergia a:</label>
                <div class="col-md-8">
                <input type="text" class="form-control" id="paso_alergia"  style="font-size: smaller;" disabled>
                </div>
             </div>
             <div class="form-group" >
                <label for="paso_curso" class="control-label col-md-4">Tratamiento: </label>
                <div class="col-md-8">
                <input type="text" class="form-control" id="paso_tratamiento"  style="font-size: smaller;" disabled>
                </div>
             </div>
             <div class="form-group" >
                <label for="paso_curso" class="control-label col-md-4">Ant. P. personales: </label>
                <div class="col-md-8">
                <input type="text" class="form-control" id="paso_app"  style="font-size: smaller;" disabled>
                </div>
             </div>
             <div class="form-group" >
                <label for="paso_curso" class="control-label col-md-4">Ant.P. familiares: </label>
                <div class="col-md-8">
                <input type="text" class="form-control" id="paso_apf"  style="font-size: smaller;" disabled>
                </div>
             </div>
             <div class="form-group" >
                <label for="paso_curso" class="control-label col-md-4">Fracturas: </label>
                <div class="col-md-8">
                <input type="text" class="form-control" id="paso_fracturas"  style="font-size: smaller;" disabled>
                </div>
             </div>
             <div class="form-group" >
                <label for="paso_curso" class="control-label col-md-4">Cirugias: </label>
                <div class="col-md-8">
                <input type="text" class="form-control" id="paso_cirugias"  style="font-size: smaller;" disabled>
                </div>
             </div>
             <div class="form-group" >
                <label for="paso_curso" class="control-label col-md-4">Enfermedad de base: </label>
                <div class="col-md-8">
                <input type="text" class="form-control" id="paso_base"  style="font-size: smaller;" disabled>
                </div>
             </div>
            </div>
           </div>
            </form>
        </div>
      </div>
    </div>
</div>
</body>
