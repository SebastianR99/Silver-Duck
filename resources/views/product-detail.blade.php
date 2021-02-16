<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>Silver Duck | Producto</title>
    <link href="{{ url('/assets/img/favicon.ico') }}" rel="icon">
    
    <!-- Font awesome -->
    <link href="{{ url('/assets/fonts/font-awesome.css') }}" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="{{ url('/assets/css/bootstrap.css') }}" rel="stylesheet">   
    <!-- SmartMenus jQuery Bootstrap Addon CSS -->
    <link href="{{ url('/assets/css/jquery.smartmenus.bootstrap.css') }}" rel="stylesheet">
    <!-- Product view slider -->
    <link rel="stylesheet" type="text/css" href="{{ url('/assets/css/jquery.simpleLens.css') }}">    
    <!-- slick slider -->
    <link rel="stylesheet" type="text/css" href="{{ url('/assets/css/slick.css') }}">
    <!-- price picker slider -->
    <link rel="stylesheet" type="text/css" href="{{ url('/assets/css/nouislider.css') }}">
    <!-- Theme color -->
    <link id="switcher" href="{{ url('/assets/css/theme-color/default-theme.css') }}" rel="stylesheet">
    <!-- <link id="switcher" href="css/theme-color/bridge-theme.css" rel="stylesheet"> -->
    <!-- Top Slider CSS -->
    <link href="{{ url('/assets/css/sequence-theme.modern-slide-in.css') }}" rel="stylesheet" media="all">

    <!-- Main style sheet -->
    <link href="{{ url('/assets/css/style.css') }}" rel="stylesheet">    

    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  

  </head>
  <body> 
   <!-- wpf loader Two -->
   <div id="wpf-loader-two">          
      <div class="wpf-loader-two-inner">
        <span>Loading</span>
      </div>
    </div> 
    <!-- / wpf loader Two -->       
  <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i></a>
  <!-- END SCROLL TOP BUTTON -->


  <!-- Start header section -->
  <header id="aa-header">
    <!-- start header top  -->
    <div class="aa-header-top">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="aa-header-top-area">
              <!-- start header top left -->
              <div class="aa-header-top-left">
                <!-- Aquí se le puede poner algo arriba a la derecha -->
              </div>
              <!-- / header top left -->
              @if(Auth::check())
              <div class="aa-header-top-right">
                <ul class="aa-head-top-nav-right">
                  <li><a href=" {{ url('/account') }} ">Mi cuenta</a></li>
                  <li><a href="{{ url('/logout') }}">Logout</a></li>
                </ul>
              </div>
              @else
              <div class="aa-header-top-right">
                <ul class="aa-head-top-nav-right">
                  <li><a href="{{ url('/login') }}">Login</a></li>
                </ul>
              </div>
              @endif
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- / header top  -->

    <!-- start header bottom  -->
    
    <div class="aa-header-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="aa-header-bottom-area">
              <!-- logo  -->
              <div class="aa-logo">
                <!-- Text based logo -->
                <a href="{{ url('/') }}">
                  <span class="fa fa-shopping-cart"></span>
                  <p>Silver<strong>Duck</strong> <span>Tu compañero de compras</span></p>
                  <a href="{{ url('/') }}"><img style="max-width: 80px; max-height: 80px;" src="https://i.imgur.com/9DZp1Vf.png" alt="logo img">
                </a>
                <!-- img based logo -->
              </div>
              <!-- / logo  -->
               <!-- cart box -->
              <div class="aa-cartbox">
                <img style="max-width: 60px; max-height: 40px;" src=" {{ url('/assets/img/shopping-cart.svg') }} " alt="">
                <a class="aa-cart-link" href=" {{ url('/cart') }} ">
                  <span class="fa fa-shopping-basket"></span>
                  <span class="aa-cart-title">CARRITO DE COMPRAS</span>
                  <span class="aa-cart-notify">2</span>
                </a>
                <div class="aa-cartbox-summary">
                  <ul>
                    <li>
                      <a class="aa-cartbox-img" href="#"><img src=" {{ url('/assets/img/woman-small-2.jpg') }}" alt="img"></a>
                      <div class="aa-cartbox-info">
                        <h4><a href="#">Nombre del producto</a></h4>
                        <p>1 x $250</p>
                      </div>
                      <a class="aa-remove-product" href="#"><span class="fa fa-times"></span></a>
                    </li>
                    <li>
                      <a class="aa-cartbox-img" href="#"><img src=" {{ url('/assets/img/woman-small-1.jpg') }}" alt="img"></a>
                      <div class="aa-cartbox-info">
                        <h4><a href="#">Nombre del producto</a></h4>
                        <p>1 x $250</p>
                      </div>
                      <a class="aa-remove-product" href="#"><span class="fa fa-times"></span></a>
                    </li>                    
                    <li>
                      <span class="aa-cartbox-total-title">
                        Total
                      </span>
                      <span class="aa-cartbox-total-price">
                        $500
                      </span>
                    </li>
                  </ul>
                  <a class="aa-cartbox-checkout aa-primary-btn" href=" {{ url('/checkout') }} ">Checkout</a>
                </div>
              </div>
              <!-- / cart box -->
              <!-- search box -->
              <div class="aa-search-box">
                <form action="">
                  <input type="text" name="" id="" placeholder="Busque aquí ej: ´camiseta´ ">
                  <button type="submit"><span class="fa fa-search"></span></button>
                </form>
              </div>
              <!-- / search box -->             
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- / header bottom  -->
  </header>
  <!-- / header section -->
  <!-- menu -->
  <section id="menu">
    <div class="container">
      <div class="menu-area">
        <!-- Navbar -->
        <div class="navbar navbar-default" role="navigation">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>          
          </div>
          <div class="navbar-collapse collapse">
            <!-- Left nav -->
            <ul class="nav navbar-nav">
              <li><a href="{{ url('/') }}">Inicio</a></li>
              <li><a href="{{ url('/product') }}">Catálogo completo</a></li>
              <li><a href="{{ url('/Men/product-men') }}"> Hombre <span class="caret"></span></a>
                <ul class="dropdown-menu">                
                  <li><a href="{{ url('/Men/product-men-casual') }}">Casual</a></li>
                  <li><a href="{{ url('/Men/product-men-sport') }}">Deportivo</a></li>
                  <li><a href="{{ url('/Men/product-men-formal') }}">Formal</a></li>
                </ul>
              </li>
              <li><a href="{{ url('/Women/product-women') }}"> Mujer <span class="caret"></span></a>
                <ul class="dropdown-menu">  
                  <li><a href="{{ url('/Women/product-women-casual') }}">Casual</a></li>
                  <li><a href="{{ url('/Women/product-women-sport') }}">Deportivo</a></li>
                  <li><a href="{{ url('/Women/product-women-formal') }}">Formal</a></li>
                </ul>
              </li>
              <li><a href="{{ url('/contact') }}">Contacto</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>       
    </div>
  </section>
  <!-- / menu -->
 

  <!-- product category -->
  <section id="aa-product-details">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-product-details-area">
            <div class="aa-product-details-content">
              <div class="row">
                <!-- Modal view slider -->
                <div class="col-md-5 col-sm-5 col-xs-12">                              
                  <div class="aa-product-view-slider">                                
                    <div id="demo-1" class="simpleLens-gallery-container">
                      <div class="simpleLens-container">
                        <div class="simpleLens-big-image-container"><a data-lens-image="{{ $product->product_pic1 }}" class="simpleLens-lens-image"><img src="{{ $product->product_pic1 }}" class="simpleLens-big-image"></a></div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Modal view content -->
                <div class="col-md-7 col-sm-7 col-xs-12">
                  <div class="aa-product-view-content">
                    <h3>{{ $product->product_name }}</h3>
                    <div class="aa-price-block">
                      <span class="aa-product-view-price">$ {{ $product->product_price }}</span>
                      @if ($product->product_avail == true)
                        <p class="aa-product-avilability">Disponibilidad: <span>En stock = </span> <span></span> {{ $product->product_stock }} </p>
                      @else
                        <p class="aa-product-avilability">Disponibilidad: <span>Agotado</span></p>
                      @endif
                    </div>
                    <p> {{ $product->product_desc_short }} </p>
                    <h4>Size</h4>
                    <div class="aa-prod-view-size">
                      <a href="#"> {{ $product->product_size }} </a>
                    </div>
                    <h4>Color</h4>
                    <div class="aa-color-tag">
                      @if ($product->product_color == 'blue')
                        <a href="#" style="background-color:blue;"></a>
                      @elseif ($product->product_color == 'yellow')
                        <a href="#" style="background-color:yellow;"></a>
                      @elseif ($product->product_color == 'black')
                        <a href="#" style="background-color:black;"></a>
                      @elseif ($product->product_color == 'white')
                        <a href="#" style="background-color:white;"></a>
                      @elseif ($product->product_color == 'green')
                        <a href="#" style="background-color:green;"></a>
                      @elseif ($product->product_color == 'red')
                        <a href="#" style="background-color:red;"></a>
                      @endif
                    </div>
                    <div class="aa-prod-quantity">
                      <p class="aa-prod-category">
                        Categoría: <a href="">{{ strtoupper($product->product_type) }}</a>
                      </p>
                    </div>
                    <div class="aa-prod-view-bottom">
                      <a class="aa-add-to-cart-btn" href="#">Añadir al carrito</a>
                      <a class="aa-add-to-cart-btn" href="#">Añadir a la Wishlist</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="aa-product-details-bottom">
              <ul class="nav nav-tabs" id="myTab2">
                <li><a href="#description" data-toggle="tab">Descripción</a></li>
                <li><a href="#review" data-toggle="tab">Reviews</a></li>                
              </ul>

              <!-- Tab panes -->
              <div class="tab-content">
                <div class="tab-pane fade in active" id="description">
                  <p> {{ $product->product_desc_long }} </p>
                </div>            
              </div>
            </div>
            
            <!-- Related product -->
            <div class="aa-product-related-item">
              <h3>Productos Similares</h3>
              <ul class="aa-product-catg aa-related-item-slider">
                <!-- start single product item -->
                @foreach ($arraySimilars as $key => $similars)
                <li>
                  <figure>
                    <a class="aa-product-img" href="#"><img style="width: 100%; height: 90%;"  src=" {{ $similars->product_pic1 }} " alt="polo shirt img"></a>
                    <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Añadir al carrito</a>
                     <figcaption>
                      <h4 class="aa-product-title"><a href="#"> {{ $similars->product_name }} </a></h4>
                      <span class="aa-product-price"> {{ $similars->product_price }} </span>
                    </figcaption>
                  </figure>                     
                  <div class="aa-product-hvr-content">
                    <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                    <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                    <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>                            
                  </div>
                  <!-- product badge -->
                  <span class="aa-badge aa-sale" href="#">SALE!</span>
                </li>
                @endforeach
              </ul>
              <!-- quick view modal -->                  
              <div class="modal fade" id="quick-view-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">                      
                    <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <div class="row">
                        <!-- Modal view slider -->
                        <div class="col-md-6 col-sm-6 col-xs-12">                              
                          <div class="aa-product-view-slider">                                
                            <div class="simpleLens-gallery-container" id="demo-1">
                              <div class="simpleLens-container">
                                  <div class="simpleLens-big-image-container">
                                      <a class="simpleLens-lens-image" data-lens-image="img/view-slider/large/polo-shirt-1.png">
                                          <img src="img/view-slider/medium/polo-shirt-1.png" class="simpleLens-big-image">
                                      </a>
                                  </div>
                              </div>
                              <div class="simpleLens-thumbnails-container">
                                  <a href="#" class="simpleLens-thumbnail-wrapper"
                                     data-lens-image="img/view-slider/large/polo-shirt-1.png"
                                     data-big-image="img/view-slider/medium/polo-shirt-1.png">
                                      <img src="img/view-slider/thumbnail/polo-shirt-1.png">
                                  </a>                                    
                                  <a href="#" class="simpleLens-thumbnail-wrapper"
                                     data-lens-image="img/view-slider/large/polo-shirt-3.png"
                                     data-big-image="img/view-slider/medium/polo-shirt-3.png">
                                      <img src="img/view-slider/thumbnail/polo-shirt-3.png">
                                  </a>

                                  <a href="#" class="simpleLens-thumbnail-wrapper"
                                     data-lens-image="img/view-slider/large/polo-shirt-4.png"
                                     data-big-image="img/view-slider/medium/polo-shirt-4.png">
                                      <img src="img/view-slider/thumbnail/polo-shirt-4.png">
                                  </a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- Modal view content -->
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div class="aa-product-view-content">
                            <h3>T-Shirt</h3>
                            <div class="aa-price-block">
                              <span class="aa-product-view-price">$34.99</span>
                              <p class="aa-product-avilability">Avilability: <span>In stock</span></p>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis animi, veritatis quae repudiandae quod nulla porro quidem, itaque quis quaerat!</p>
                            <h4>Size</h4>
                            <div class="aa-prod-view-size">
                              <a href="#">S</a>
                              <a href="#">M</a>
                              <a href="#">L</a>
                              <a href="#">XL</a>
                            </div>
                            <div class="aa-prod-quantity">
                              <form action="">
                                <select name="" id="">
                                  <option value="0" selected="1">1</option>
                                  <option value="1">2</option>
                                  <option value="2">3</option>
                                  <option value="3">4</option>
                                  <option value="4">5</option>
                                  <option value="5">6</option>
                                </select>
                              </form>
                              <p class="aa-prod-category">
                                Category: <a href="#">Polo T-Shirt</a>
                              </p>
                            </div>
                            <div class="aa-prod-view-bottom">
                              <a href="#" class="aa-add-to-cart-btn"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                              <a href="#" class="aa-add-to-cart-btn">View Details</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>                        
                  </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
              </div>
              <!-- / quick view modal -->   
            </div>  
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / product category -->


   <!-- footer -->  
   <footer id="aa-footer">
    <!-- footer bottom -->
    <div class="aa-footer-top">
     <div class="container">
        <div class="row">
        <div class="col-md-12">
          <div class="aa-footer-top-area">
            <div class="row">
              <div class="col-md-3 col-sm-6">
                <div class="aa-footer-widget">
                  <h3>Menú Principal</h3>
                  <ul class="aa-footer-nav">
                    <li><a href="{{ url('/') }}">Inicio</a></li>
                    <li><a href="#">Our Products</a></li>
                    <li><a href="{{ url('/about') }}">Sobre nosotros</a></li>
                    <li><a href="{{ url('/contact') }}">Contact Us</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="aa-footer-widget">
                  <div class="aa-footer-widget">
                    <h3>Contact Us</h3>
                    <address>
                      <p> 25 Astor Pl, NY 10003, USA</p>
                      <p><span class="fa fa-phone"></span>+1 212-982-4589</p>
                      <p><span class="fa fa-envelope"></span>dailyshop@gmail.com</p>
                    </address>
                    <div class="aa-footer-social">
                      <a href="#"><span class="fa fa-facebook"></span></a>
                      <a href="#"><span class="fa fa-twitter"></span></a>
                      <a href="#"><span class="fa fa-google-plus"></span></a>
                      <a href="#"><span class="fa fa-youtube"></span></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
     </div>
    </div>
    <!-- footer-bottom -->
    <div class="aa-footer-bottom">
      <div class="container">
        <div class="row">
        <div class="col-md-12">
          <div class="aa-footer-bottom-area">
            <p>Designed by <a href="http://www.markups.io/">MarkUps.io</a></p>
            <div class="aa-footer-payment">
              <span class="fa fa-cc-mastercard"></span>
              <span class="fa fa-cc-visa"></span>
              <span class="fa fa-paypal"></span>
              <span class="fa fa-cc-discover"></span>
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>
  </footer>
  <!-- / footer -->

  <!-- Login Modal -->  
  <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">                      
        <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4>Iniciar sesión o registrarse</h4>
          <form class="aa-login-form" action="">
            <label for="username">Correo Electrónico<span>*</span></label>
            <input type="text" placeholder="ejemplo@example.com">
            <label for="passw">Contraseña<span>*</span></label>
            <input type="password" placeholder="12345">
            <button class="aa-browse-btn" type="submit">Iniciar sesión</button>
            <label for="rememberme" class="rememberme"><input type="checkbox" id="rememberme"> Recuérdame </label>
            <p class="aa-lost-password"><a href="#">¿Olvidaste tu contraseña?</a></p>
            <div class="aa-register-now">
              ¿No tienes una cuenta?<a href="account.html">¡Regístrate ahora!</a>
            </div>
          </form>
        </div>                        
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div>

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="{{ url('/assets/js/bootstrap.js') }}"></script>  
  <!-- SmartMenus jQuery plugin -->
  <script type="text/javascript" src="{{ url('/assets/js/jquery.smartmenus.js') }}"></script>
  <!-- SmartMenus jQuery Bootstrap Addon -->
  <script type="text/javascript" src="{{ url('/assets/js/jquery.smartmenus.bootstrap.js') }}"></script>  
  <!-- To Slider JS -->
  <script src="{{ url('/assets/js/sequence.js') }}"></script>
  <script src="{{ url('/assets/js/sequence-theme.modern-slide-in.js') }}"></script>  
  <!-- Product view slider -->
  <script type="text/javascript" src="{{ url('/assets/js/jquery.simpleGallery.js') }}"></script>
  <script type="text/javascript" src="{{ url('/assets/js/jquery.simpleLens.js') }}"></script>
  <!-- slick slider -->
  <script type="text/javascript" src="{{ url('/assets/js/slick.js') }}"></script>
  <!-- Price picker slider -->
  <script type="text/javascript" src="{{ url('/assets/js/nouislider.js') }}"></script>
  <!-- Custom js -->
  <script src="{{ url('/assets/js/custom.js') }}"></script> 

  </body>
</html>