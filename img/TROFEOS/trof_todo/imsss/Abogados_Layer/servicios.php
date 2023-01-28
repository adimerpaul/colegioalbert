<?php

include('header.php');
include('navbar.php');

?>
<style>
    .urlo{
  font-size: 20px; 
  color: black; 
  }
  .urli{
  font-size: 20px; 
  color: black; 
  }
 
  
  a.btn{
    z-index: 1;
  }
  .urlo{
      background-color: #efefef;
      
  }
  .urli{
      background-color: #efefef;
  }


.urlo{
  z-index: 1;
}
ul.navbar-nav{
z-index: 1;
}
#navbarNav{
    z-index: 1;
}
</style>

  <div class="row align-items-start">
    <div class="col">
    <div class="card" style="width: 18rem;">
  <img src="img/servicios/4.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Derecho Comercial y Corporativo</h5>
    <p class="card-text">  <li>Constitución y liquidación de sociedades.
            <li>
Establecimiento de sucursales de Sociedades extranjeras.</li>
<li>Inversiones extranjeras y nacionales, Join Ventures y alianzas estratégicas.</li>
Propiedad Intelectual, registro de marcas, patentes, derechos de autor, renovaciones, licencias de uso.
</li><li>Auditorias legales.</li></p>
    <a href="#" class="btn "style="background:#26a69a;color: white">Realizar consulta</a>
  </div>
</div>
    </div>
    <div class="col sds">
    <div class="card" style="width: 18rem;">
  <img src="img/servicios/derecho-penal.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Derecho Penal</h5>
    <p class="card-text"><ul>
      <li>Denuncias, querellas, objeciones.</li>
      <li>Medidas cautelares.</li>
      <li>Incidentes y recursos.</li>
      <li>Etapa preparatoria y juicio oral.</li>
      <li>Acusación y defensa.</li>
    </ul></p>
    <a href="#" class="btn "style="background:#26a69a;color: white">Realizar consulta</a>
  </div>
</div>
    </div>
    <div class="col">
    <div class="card" style="width: 18rem;">
  <img src="img/servicios/familia.jfif" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Derecho Familiar</h5>
    <p class="card-text"> <ul>
        <li>Divorcios.</li>
        <li>Anulabilidad de Matrimonios.</li>
        <li>Nulidad de Matrimonios.</li>
        <li>Reposición de Partida de Matrimonio.</li>
        <li>Concubinato o Unión Libre.</li>
        <li>Separación de Bienes Matrimoniales.</li>
        <li>Divisiones y Particiones de Bienes.</li>
        <li>Demandas de Asistencia Familiar.</li>
        <li>Tenencia y Guarda de Menor.</li>
        <li>Constitución del Patrimonio Familiar.</li>
        <li>Investigación de Maternidad y Paternidad.</li>
        <li>Emancipación.</li>

    </ul> </p>
    <a href="#" class="btn "style="background:#26a69a;color: white">Realizar consulta</a>
   </div>
  </div>
 </div>


</div>
  <script>
 document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems,{
        menuWidth: 300,
      closeOnClick: true,
      edge: 'right', 
    });


    var elems = document.querySelectorAll('.slider');
    var instances = M.Slider.init(elems,{
        indicators:false,height:800
    });
    
});


</script>


<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
