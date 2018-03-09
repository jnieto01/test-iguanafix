<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <a href="#"><img src="http://localhost/img/logofooter.png" alt="IguanaFix" class="img-responsive"/></a>
            </div>

            <div class="col-md-10">
                <ul class="list-unstyled list-inline pull-right icons-social">
                    <li><a href="#" target="_blank"><i class="fa fa-facebook fa-2x social-color"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fa fa-instagram fa-2x social-color"></i></a></li>                  
                    <li><a href="#" target="_blank"><i class="fa fa-google-plus fa-2x social-color"></i></a></li>                 
                    <li><a href="#" target="_blank"><i class="fa fa-youtube fa-2x social-color"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fa fa-twitter fa-2x social-color"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fa fa-envelope-o fa-2x social-color"></i></a></li>        
                </ul>
            </div>
            
        </div>
        <hr>

        <div class="row">
            <div class="col-md-12">
                <?php 
                // Esta seccion los datos vienen cargados usualmente en arrays con 
                // categorias, subcategorias y la url para efectos demostrativos 
                // se usara variables con datos estaticos. Esta seccion debe ser elliminada
                // al implementar el codigo
                $categorias = array("Casa", "Autos");                                
                $subcategorias = array("Albañileria", "Albañileria","Albañileria","Albañileria","Albañileria",
                "Albañileria","Albañileria","Albañileria","Albañileria","Albañileria","Albañileria","Albañileria");
                ?>

                <?php  foreach ($categorias as $categoria) { ?>
                <div>
                    <h4 class="stroke"><?php echo $categoria; ?></h4>
                    <hr class="footer-line1">
                    <hr class="footer-line2">
                    
                    <ul class="list-unstyled">  
                        <?php  foreach ($subcategorias as $subcategoria) { ?>
                        <li class="col-sm-3">
                            <a href="#" class="stroke"><?php echo $subcategoria; ?></a>
                        </li>
                        <?php } ?>     
                    </ul>
                </div> 
                <br>    
                <?php } ?>    
            </div>
        </div>
    </div>


    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xs-8 copyright">
                    &copy; Copyright 2016. All rights reserved | IguanaFix
                </div>

                <div class="col-xs-4">
                    <ul class="list-unstyled list-inline">
                        <li class="app-store">
                            <a href="#" target="_blank"><img src="http://localhost/img/googleplay.png" class="img-responsive" alt="Google Play Store"/></a>
                        </li>
                        <li class="app-store">
                            <a href="#" target="_blank"><img src="http://localhost/img/applestore.png" class="img-responsive" alt="App Store"/></a>
                        </li>
                        <li>
                            <a href="#" target="_blank"><img src="http://localhost/img/fiscal.png" class="img-responsive" alt="AFIP"/></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</footer>
</body></html>