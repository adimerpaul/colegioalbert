<style>
  .navbar-brand{
      margin: 0;
      padding: 0;
  }
  .container-fluid{
      margin: 0;
      padding: 0;
  }
  .navbar-toggler{
    position: absolute;
      margin-left: 80%;
      z-index: 100;
      color: blue;
    }
  .navbar-toggler{

  }
  .urli{
  font-size: 20px; 
  color: black; 
  }
.navbar-toggler-icon{
  background-color: white;
  border-radius:5px ;
  color: white;
}

  @media only screen and (max-width: 799px) {
.urlo{
  background-color: #2b4e6d;
  z-index: 1;
}
.urli{
   background-color:wheat;
  
   }
   
  }
</style>
<nav class="navbar navbar-expand-lg navbar-light bg-light" style="height: 110px;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="img/legalex.png" class="imgLogo"alt="" style="width:40%; "></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link urlo" aria-current="page" href="index.php">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link urli " href="casos.php">Nosotros</a>
        </li>
        <li class="nav-item">
          <a class="nav-link urli" href="servicios.php">Servivios</a>
        </li>
        <li class="nav-item">
          <a class="nav-link urli " href="#">Constitucional</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link urli" href="contactanos.php">Contactanos</a>
        </li>
        <li>
        <a class="nav-link urlo" ><i class="fas fa-book"></i></a>
        </li>
      </ul>
    </div>
  </div>
</nav>