<?php
include('header.php');
?>
<body>
<?php
include('navbar.php');
?>
<link rel="stylesheet" href="css/style_inscrip.css">
<style>
    
   .urlo{
  font-size: 25px; 
  color: black; 
  }
  .urli{
  font-size: 20px; 
  color: black; 
  }
  .nav-item:hover{
    transition: 1s;
    
    
    border-radius: 5px;
  
  }
.container-fluid{
  backdrop-filter: blur(0px);
padding: 0;
margin: 0;
}
.imgLugar{
    width: 100%;
    height: 500px;
}
.navbar{
    position:fixed;
    z-index: 1;
}
.imgLogo{
    width: 10%;
}
.imasC{
    position: relative;
}
.imagenes-principales{
margin-top: 80px;
}
.letr-flip{
font-size: 50px;
}
.separador{
    font-size: 30px;
    margin: 0;
    padding: 0;
}
footer{
    width: 100%;
}

</style>
<br> <br>
<div class="container-fluid imagenes-principales p-2">
        <div class="row imagen-superior imagen">
            <div class="col-md-6" style="background:#161a42">
                <div class="row justify-content-center align-items-center h-100">
                    <div class="col-sm-8 col-md-6">
                        <div class="contenido text-center text-light py-3">
                            <h2 class="titulo text-uppercase">Mas de 20 Años de Experiencia</h2>
                            <p>El ejercicio de la abogacía es una gran labor social y nuestra prioridad eres tú</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 bg-vino ">
              <img src="img/5.png" class='imgLugar'alt="">
            </div>
            
        </div>
</div>
       <br>

            <h2 class="text-center mb-5 separador">Asesoramiento y Departamentos Especializados</h2>
 
    

           <!-----FLIP-TARJETA--->
<section class="marg">
	<div class="wrap">
		<a href=""><div class="tarjeta-wrap">
			<div class="tarjeta">
				<div class="adelante card1"></div>
				<div class="atras">
                    |<br>|<br>|<br>|<br>|<br>|<br>
		        <p class="letr-flip"><div class="container tam">
                     
<i class="fas fa-map-marked-alt"> <span></span> </i> <p> Edificio Ayacucho piso #11 Of.#114</p> <br>
<i class="fas fa-envelope"> <span></span></i> <p> Legalex@gmail.com </p><br>
<i class="fas fa-mobile-alt"> <span> </span></i>  74325571 <br>
</div></p>
				</div>
			</div>
		</div></a>
		<a href=""><div class="tarjeta-wrap">
			<div class="tarjeta">
				<div class="adelante card2"></div>
               	<div class="atras">
                   |<br>|<br>|<br>|<br>|<br>|<br>
                <p class="letr-flip"><div class="container tam">
                     
<i class="fas fa-map-marked-alt"> <span></span> </i> <p> Edificio Ayacucho piso #11 Of.#114</p> <br>
<i class="fas fa-envelope"> <span></span></i> <p> Legalex@gmail.com </p><br>
<i class="fas fa-mobile-alt"> <span> </span></i>  74325571 <br>
</div></p>
			</div>
		</div></a>
		
</section>
	
 <center>
  <div  class="location">
    <div class="subLocation">
  
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d239.09604916620057!2d-68.13341341238853!3d-16.498976455869656!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x915f2071b042e233%3A0xf10d259a693d4c63!2sEdificio%20Mariscal%20De%20Ayacucho%23233%20Piso%2013%20Oficina%201310!5e0!3m2!1ses!2sbo!4v1643054910096!5m2!1ses!2sbo" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
  </div>
  </div>
  </center>

  <?php
  require('footer.php')
  ?>
  