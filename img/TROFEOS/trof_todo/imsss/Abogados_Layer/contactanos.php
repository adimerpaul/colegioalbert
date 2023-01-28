
<?php
include('header.php');
include('navbar.php');
?>
<style>
    .tamForm{
        width: 50%;
       box-shadow: 0px 0px , -1em 0 0.4em #2b4e6d;
    }
    .tam{
        
        width: 50%;
        text-align: center;
        font-size: 35px;

    }

    .urlo{
  font-size: 25px; 
  color: black; 
  }
  .urli{
  font-size: 20px; 
  color: black; 
  } 
  span{
    font-size: 20px;
  }
  @media only screen and (max-width: 799px) {
    .tamForm{
        width: 100%;
       box-shadow: 0px 0px , -1em 0 0.4em #2b4e6d;
    }
    .container.tam{
      width: 100%;
    }
  }
</style>
<br>
<div class="container tamForm">
   
    <h1>Cuéntanos tu historia</h1>
<form class="row g-3 needs-validation" novalidate>
  <div class="col-md-4">
    <label for="validationCustom01" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="validationCustom01" placeholder="Ingresar nombre" required>
   
  </div>
  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Apellidos</label>
    <input type="text" class="form-control" id="validationCustom02" value="" required>
  
  </div>
  <div class="col-md-4">
    <label for="validationCustomUsername" class="form-label">Correo</label>
    <div class="input-group has-validation">
      <span class="input-group-text" id="inputGroupPrepend"><i class="fas fa-envelope-open-text"></i></span>
      <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
  
    </div>
  </div>
  <div class="col-md-5">
    <label for="validationCustom04" class="form-label">Ciudad</label>
    <select class="form-select" id="validationCustom04" required>
      <option selected disabled value="">Elige</option>
      <option value="">La Paz</option>
      <option value="">Oruro</option>
      <option value="">Cochabamba</option>
      <option value="">Sucre</option>
      <option value="">Santa Cruz</option>
      <option value="">Beni</option>
      <option value="">Potosí</option>
      <option value="">Pando</option>
      <option value="">Tarija</option>
    </select>
  
  </div>
  <div class="col-md-5">
    <label for="validationCustomUsername" class="form-label"> Celular</label>
    <div class="input-group has-validation">
      <span class="input-group-text" id="inputGroupPrepend"><i class="fas fa-phone-volume"></i></span>
      <input type="number" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
  
    </div>
  </div>
  <div class="col-md-6">
    <label for="validationCustom03" class="form-label"><i class="fas fa-user-edit"></i> Consultar</label>
    <Textarea type="" class="form-control" id="validationCustom03" required>
    
    </Textarea>

  </div>
  


  <div class="col-12 p-2">
    <button class="btn btn-primary "style="background:#26a69a;color: white" type="submit">Enviar consulta</button>
    
  </div>
  <br>
</form>



</div>
<div class="container tam">
<i class="fas fa-map-marked-alt"> <span>Edificio Ayacucho piso #11 Of.#114</span> </i>
<i class="fas fa-envelope"> <span>Legalex@gmail.com</span></i>
<i class="fas fa-mobile-alt"> <span>7777777</span></i>

</div>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
