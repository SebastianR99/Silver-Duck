<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>SilverDuck | Contacto</title>
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
                  <li><a href="{{ url('/register') }}">Registrarse</a></li>
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
                <a href="{{ url('/') }}"><img style="max-width: 80px; max-height: 80px;" src="https://i.imgur.com/9DZp1Vf.png" alt="logo img">
                <a href="{{ url('/') }}">
                  <span class="fa fa-shopping-cart"></span>
                  <p>Silver<strong>Duck</strong> <span>Tu compañero de compras</span></p>
                </a>
                <!-- img based logo -->
              </div>
              <!-- / logo  -->
               <!-- cart box -->
              <div class="aa-cartbox">
                <a class="aa-cart-link" href="#">
                  <span class="fa fa-shopping-basket"></span>
                  <span class="aa-cart-title">CARRITO DE COMPRAS</span>
                 <span class="aa-cart-notify">{{$car}}</span>
                </a>
              </div>
              <!-- / cart box -->
              <!-- search box -->
              <div class="aa-search-box">
                <form action="{{ url('/search-product') }}" method='POST'>
                  @csrf
                  <input type="text" name="busqueda" id="busqueda" placeholder="Busque aquí ej: ´camiseta´ ">
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
  @include('flash-message') 

  <!-- / catg header banner section -->
<!-- start contact section -->
 <section id="aa-contact">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="aa-contact-area">
           <!-- Contact address -->
           <div class="aa-contact-address">
             <div class="row">
               <div class="col-md-8">
                 <div class="aa-contact-address-left">
                   <form class="comments-form contact-form formulario-eliminar" action="{{url ('/user-form-post') }}" method='POST'>
                   @csrf
                   <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">                        
                          <input id='names' name='names' type="text" placeholder="Nombres Completos" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">                        
                          <input id='lastnames' name='lastnames' type="text" placeholder="Apellidos Completos" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">                        
                          <input id='depto' name='depto' type="text" placeholder="Departamento" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">                        
                            <input id='ciudad' name='ciudad' type="text" placeholder="Ciudad" class="form-control">
                          </div>
                        </div>
                    </div>     
                    <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">                        
                            <input id='direccion' name='direccion' type="text" placeholder="Dirección" class="form-control">
                          </div>
                        </div>
                    </div>  
                    <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">                        
                            <input id='telefono' name='telefono' type="text" placeholder="Teléfono" class="form-control">
                          </div>
                        </div>
                    </div>
                    <button type='submit' class="aa-secondary-btn">Actualizar</button>
                  </form>
                 </div>
               </div>
               <div class="col-md-4">
                 <div class="aa-contact-address-right">
                   <address>
                     <h4>SilverDuck</h4>
                     <p><span class="fa fa-home"></span>San Juan de Pasto - Colombia</p>
                     <p><span class="fa fa-phone"></span>+57 3122358654</p>
                     <p><span class="fa fa-envelope"></span>Email: support@silverduck.com</p>
                   </address>
                 </div>
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
 </section>

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
                    <li><a href="{{ url('/product') }}">Catálogo completo</a></li>
                    <li><a href="{{ url('/about') }}">Sobre nosotros</a></li>
                    <li><a href="{{ url('/contact') }}">Contactanos</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="aa-footer-widget">
                  <div class="aa-footer-widget">
                    <h3>Contact Us</h3>
                    <address>
                      <p> Torobajo - Calle 18 Carrera 50</p>
                      <p><span class="fa fa-phone"></span> (+057) 7244309–7311449</p>
                      <p><span class="fa fa-envelope"></span>silverduck@gmail.com</p>
                    </address>
                    <div class="aa-footer-social">
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
  <!-- Login Modal -->  
  <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">                      
        <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4>Login or Register</h4>
          <form class="aa-login-form" action="">
            <label for="">Username or Email address<span>*</span></label>
            <input type="text" placeholder="Username or email">
            <label for="">Password<span>*</span></label>
            <input type="password" placeholder="Password">
            <button class="aa-browse-btn" type="submit">Login</button>
            <label for="rememberme" class="rememberme"><input type="checkbox" id="rememberme"> Remember me </label>
            <p class="aa-lost-password"><a href="#">Lost your password?</a></p>
            <div class="aa-register-now">
              Don't have an account?<a href="account.html">Register now!</a>
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
  <!-- Sweeralert JS -->
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

  <script>
      $('.formulario-eliminar').submit(function(e)
      {
              e.preventDefault();

                Swal.fire({
                title: '¿Está Segur@?',
                text: "¿Desea actualizar su información con estos datos?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Sí',
                cancelButtonText: 'Cancelar',
                 }).then((result) => {
                if (result.isConfirmed) {
                  this.submit();
                }
              })
      });
         
  </script>
  

  </body>
</html>