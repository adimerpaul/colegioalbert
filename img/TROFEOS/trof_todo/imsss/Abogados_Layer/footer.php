<style>
    .page-footer{
        height: 221px;
    
    }

    .footer-copyright{
        
        height: 0px;
    }
    .fab{
        color:#ffea00;
    }
</style>

<footer class="page-footer blue-grey darken-4">
    
          <div class="container">
          <hr style="height: 2px ;color:#ffea00">
            <div class="row">
              <div class="col l6 s12">
                 
                <h5 class="white-text">Encuentranos y contactanos</h5>
                
                <p class="grey-text text-lighten-4"><i class="fas fa-map-marker-alt"></i> Edificio Ayacucho piso #11 oficina #114</p>
                <p class="grey-text text-lighten-4"><i class="fas fa-phone-volume"></i> Comunicate con 7777777</p>
                © <?php echo date('Y')?> Todos los derechos reservados a Legalex
            </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">REDES SOCICIALES</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!"><i class="fab fa-facebook-square"></i></a></li>
                  <li><a class="grey-text text-lighten-3"href="#!"><i class="fab fa-whatsapp"></i></a></li>
                  <li><a class="grey-text text-lighten-3"href="#!"><i class="fab fa-twitter"></i></a></li>
                 
                </ul>
              </div>
            </div>
          </div>
          
      
</footer>



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

<!-- Compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        


<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
