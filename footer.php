<section style="background-color: #1a1a1a;" class="mt-5">
    <div class="container">
        <div class="mx-auto py-5 text-center">
            <figure class="logo">
                <a href="index.php">
                    <img src="img/logo.png" class="mx-auto rounded-pill img-fluid" />
                </a>
            </figure>
            <ul class="list-inline enlaces py-4">
                <li class="list-inline-item footer-menu">
                    <a href="index.php">Inicio</a>
                </li>
                <li class="list-inline-item footer-menu">
                    <a href="productos.php">Productos</a>
                </li>
                <li class="list-inline-item footer-menu">
                    <a href="contacto.php">Contacto</a>
                </li>
                <?php if (isset($_SESSION['admin']) && $_SESSION['usertype'] == 1){
               echo '
                  <li class="list-inline-item footer-menu">
                      <a href="AdministrarProductos.php">Administrar Productos</a>
                  </li>';
                }
                ?>

            </ul>

            <ul class="list-inline">
                <li class="list-inline-item">
                    <a href="#" class="text-white"><i class="fab fa-instagram"></i></a>
                </li>
                <li class="list-inline-item">
                    <a href="#" class="text-white"><i class="fab fa-twitter"></i></a>
                </li>
                <li class="list-inline-item">
                    <a href="#" class="text-white"><i class="fab fa-youtube"></i></a>
                </li>
                <li class="list-inline-item">
                    <a href="#" class="text-white"><i class="fab fa-whatsapp"></i></a>
                </li>
                <li class="list-inline-item">
                    <a href="#" class="text-white"><i class="fab fa-facebook"></i></a>
                </li>


            </ul>

            <small class="text-white">&copy2019 All Rights Reserved Created by Themes Boostrap</small>
        </div>
    </div>
</section>
