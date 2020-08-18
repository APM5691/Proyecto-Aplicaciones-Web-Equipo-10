<footer class="site-footer border-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mb-5 mb-lg-0">
            <div class="row">
              <div class="col-md-12">
                <h3 class="footer-heading mb-4"> Opciones</h3>
              </div>
              <?php

if (isset($_SESSION['id']) && is_numeric($_SESSION['id']) && 'Administrador' == $_SESSION['perfil']) {

  echo'<div class="col-md-6 col-lg-4">
                <ul class="list-unstyled">
                <a class="dropdown-item" href="ventas.php"><i class="fa fa-piggy-bank"></i> Ventas</a>

                <a class="dropdown-item" href="materiales.php"><i class="fa fa-gem"></i> Materiales</a>
            
                <a class="dropdown-item" href="Productos.php"><i class="fa fa-cart-plus"></i> Productos</a>
            
                <a class="dropdown-item" href="clientes.php"><i class="fa fa-user-circle"></i> Clientes</a>
            
                <a class="dropdown-item" href="tipo_de_joya.php"><i class="fa fa-ring"></i> Tipo de Joya</a>
                </ul>
              </div>';
            }
            ?>
              <div class="col-md-6 col-lg-4">
                <ul class="list-unstyled">
                <p>Checa donde puedes obtener equipos de computo y el software para crear tu página web</p>
                  <li><a href="https://highpro.com.mx/index.php">Hardware</a></li>
                  <li><a href="https://code.visualstudio.com/download">Software</a></li>
                </ul>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
            <h3 class="footer-heading mb-4">Anuncio</h3>
            <p>Te puede interesar:</p>
            <a href="https://www.myshoesmexico.com/" class="block-6">
              <img src="https://cdn.shopify.com/s/files/1/1596/6579/products/HAMILTON-ZAPATILLAS-ALTAS-COLOR-NUDE-CON-MICA-TRANSPARENTE_1024x1024.jpg?v=1594248356" alt="Image placeholder" class="img-fluid rounded mb-4">
            </a>
          </div>
          
          <div class="col-md-6 col-lg-3">
            <div class="block-5 mb-5">
              <h3 class="footer-heading mb-4">Informacion de contacto</h3>
              <ul class="list-unstyled">
                <li class="address">56 5 De Mayo Colonia Centro, Toluca Centro, Toluca, Edo Mex</li>
                <li class="phone"><a href="tel://5610835845">+52 561 08 35 845</a></li>
                <li class="email">Luminositeofc@gmail.com</li>
              </ul>
            </div>

            <div class="block-7">
              <form action="#" method="post">
                <label for="email_subscribe" class="footer-heading">Suscribete</label>
                <div class="form-group">
                  <input type="text" class="form-control py-4" id="email_subscribe" placeholder="Email">
                  <input type="submit" class="btn btn-sm btn-primary" value="Send">
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <p>
         
            Copyright &copy;
            <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
            <script>document.write(new Date().getFullYear());</script> Derechos Reservados Para Fines Practicos | 
            Joyeria Luminosite <i class="icon-heart" aria-hidden="true"></i>
        
            </p>
          </div>
          
        </div>
      </div>
    </footer>