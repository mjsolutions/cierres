<!DOCTYPE html>
<html lang="es">
<head>
  <title>Cierres el Cubano | @yield('title','Inicio')</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="{{asset('css/materialize.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/styles.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/owl.carousel.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/owl.theme.default.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/owl.theme.green.css')}}">
  <link href="https://file.myfontastic.com/p33ryNdn2ug99gf3MgkiUK/icons.css" rel="stylesheet">
</head>

<body>
  <header>
    @include('nav')
  </header>

  <div id="preloader">    
    <img src="{{ asset('images/cara-sr-jimenez.png') }}" class="responsive-img">
    <div id="preloader-circle"></div>
  </div>

  <main>
    <section id="home">
      <div id="inicio"></div>
      <div id="contenido">
        <div class='row'>
          <div class="col s6 center">
            <img style="max-width: 100%; max-height: 250px;" src="{{ asset('images/logo.png') }}">
          </div>
          <div class="col s6">
            <div id="index-banner" class="parallax-container">
              <div class="section no-pad-bot">
                <div class="container">
                  <h1 class="header center">CIERRES EL CUBANO</h1>
                  <div class="row center">
                    <h5  class="header col s12 light">"El mejor precio y surtido en México"</h5>
                  </div>
                  <div class="row center">
                    <a href="#nosotros" class="btn-large waves-effect waves-light teal lighten-1 page-scroll">Ver más</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="nosotros">
      <div class="container">
        <div class="section">
          <div class="row">
            <div class="col s12 m12">
              <h2 class="header center blue-grey-text darken-3">¿QUIÉNES SOMOS?</h2>
            </div>
            <div class="col s12 m4 offset-m1">
              <div class="icon-block">
                <h4 class="center">Misión</h4>
                <p class="light" style="font-size: 20px;">Satisfacer los requerimientos de nuestros clientes a través de nuestro extenso surtido y excelentes precios, siendo nuestro privilegio brindar la atención, dejando un legado en cada uno de los lugares en los que ofrecemos nuestros productos.</p>
              </div>
            </div>

            <div class="col s12 m4 offset-m2">
              <div class="icon-block">
                <h4 class="center">Visión</h4>
                <p class="light" style="font-size: 20px;">Ser una empresa reconocida a nivel nacional, por nuestra capacidad de distribución, los mejores precios, cercanía al mercado y amplio catálogo de productos de nuestro giro. Siendo un lugar que ofrezca un ambiente extraordinario a nuestro personal que inspire a generar beneficios para cada uno de los que forman parte de ella.</p>
              </div>
            </div>
          </div>
          <div class="col s12">
            <img style="width: 112%; margin-left: -7%; margin-top: -5%;" src="{{ asset('images/pie de pagina.svg') }}">
          </div>
        </div>

      </div>

    </section>
    <section id="galeria">
      <div class="container">
        <div class="section">
          <div class="row">
            <div class="col s12 m12">
              <h2 class="header center blue-grey-text darken-3">GALERÍA</h2>
            </div>
            <div class="col s12 m12">
              <div class="owl-carousel owl-theme">
                <div class="item" data-merge="1"><h5 class="center">CIERRE ALUMINIO</h5><img src="{{ asset('images/productos/cierres1.jpg') }}"><p>Descripcion, como el tamaño, color, etc, y aqui puede ir más texto, y más texto, y más texto...</p></div>
                <div class="item" data-merge="1"><h5 class="center">CIERRE 2</h5><img src="{{ asset('images/productos/cierres2.jpg') }}"><p>Descripcion, como el tamaño, color, etc, y aqui puede ir más texto, y más texto, y más texto...</p></div>
                <div class="item" data-merge="1"><h5 class="center">CIERRE 3</h5><img src="{{ asset('images/productos/cierres3.jpg') }}"><p>Descripcion, como el tamaño, color, etc, y aqui puede ir más texto, y más texto, y más texto...</p></div>
                <div class="item" data-merge="1"><h5 class="center">CIERRE 4</h5><img src="{{ asset('images/productos/cierres4.jpg') }}"><p>Descripcion, como el tamaño, color, etc, y aqui puede ir más texto, y más texto, y más texto...</p></div>
                <div class="item" data-merge="1"><h5 class="center">CIERRE 6</h5><img src="{{ asset('images/productos/cierres5.jpg') }}"><p>Descripcion, como el tamaño, color, etc, y aqui puede ir más texto, y más texto, y más texto...</p></div>
                <div class="item" data-merge="1"><h5 class="center">CIERRE 7</h5><img src="{{ asset('images/productos/cierres6.jpg') }}"><p>Descripcion, como el tamaño, color, etc, y aqui puede ir más texto, y más texto, y más texto...</p></div>
                <div class="item" data-merge="1"><h5 class="center">CIERRE 8</h5><img src="{{ asset('images/productos/cierres7.jpg') }}"><p>Descripcion, como el tamaño, color, etc, y aqui puede ir más texto, y más texto, y más texto...</p></div>
                <div class="item" data-merge="1"><h5 class="center">CIERRE 9</h5><img src="{{ asset('images/productos/cierres8.jpg') }}"><p>Descripcion, como el tamaño, color, etc, y aqui puede ir más texto, y más texto, y más texto...</p></div>
                <div class="item"><h5 class="center">CIERRE 10</h5><img src="{{ asset('images/productos/cierres9.jpg') }}"><p>Descripcion, como el tamaño, color, etc, y aqui puede ir más texto, y más texto, y más texto...</p></div>
                <div class="item"><h5 class="center">CIERRE 11</h5><img src="{{ asset('images/productos/cierres10.jpg') }}"><p>Descripcion, como el tamaño, color, etc, y aqui puede ir más texto, y más texto, y más texto...</p></div>
                <div class="item" data-merge="1"><h5 class="center">CIERRE 12</h5><img src="{{ asset('images/productos/cierres11.jpg') }}"><p>Descripcion, como el tamaño, color, etc, y aqui puede ir más texto, y más texto, y más texto...</p></div>
                <div class="item"><h5 class="center">CIERRE 13</h5><img src="{{ asset('images/productos/cierres12.jpg') }}"><p>Descripcion, como el tamaño, color, etc, y aqui puede ir más texto, y más texto, y más texto...</p></div>
                <div class="item"><h5 class="center">CIERRE 14</h5><img src="{{ asset('images/productos/cierres13.jpg') }}"><p>Descripcion, como el tamaño, color, etc, y aqui puede ir más texto, y más texto, y más texto...</p></div>
                <div class="item"><h5 class="center">CIERRE 15</h5><img src="{{ asset('images/productos/cierres14.jpg') }}"><p>Descripcion, como el tamaño, color, etc, y aqui puede ir más texto, y más texto, y más texto...</p></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="sucursales">
      <div class="container">
        <div class="row">
          <div class="col s12 m12">
            <h2 class="header center blue-grey-text darken-3">SUCURSALES</h2>
          </div>
          <div class="col m12 s12">
            <ul class="row produktliste">
              <div class="col m4 m4">
                <div class="card horizontal hoverable">
                  <div class="card-image">
                    <img src="{{ asset('images/logos_cubano-01.png') }}">
                  </div>
                  <div class="card-stacked">
                    <div class="card-content">
                      <p><strong>Sucursal DF</strong></p>
                      <p>Jesús María No. 3, Local A, Entre Guatemala y Zapata, Col. Centro, Del. Cuauhtemoc.</p>
                      <p>México, D.F., C.P. 06010</p>
                      <p>Tel: 01 (555) 49 10929</p>
                      <p>ID 72*15*63670</p>
                      <p>lesmar_mex@live.com.mx</p>
                    </div>
                    <div class="card-action">
                      <a href="#">Mapa</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col m4 m4">
                <div class="card horizontal hoverable">
                  <div class="card-image">
                    <img src="{{ asset('images/logos_cubano-05.png') }}">
                  </div>
                  <div class="card-stacked">
                    <div class="card-content">
                      <p><strong>Sucursal Puebla</strong></p>
                      <p>Ave. 14 Poniente #709 Col. Centro entre 7 y 9 Norte</p>
                      <p>Puebla, Puebla, C.P. 72000</p>
                      <p>Tel: 01 (222) 23 25624 <br> 01 (222) 23 21170</p>
                      <p>ID 72*15*58176</p>
                      <p>ciecubpuebla@live.com.mx</p>
                    </div>
                    <div class="card-action">
                      <a href="#">Mapa</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col m4 m4">
                <div class="card horizontal hoverable">
                  <div class="card-image">
                    <img src="{{ asset('images/logos_cubano-03.png') }}">
                  </div>
                  <div class="card-stacked">
                    <div class="card-content">
                      <p><strong>Sucursal Edo. de México</strong></p>
                      <p>Juan León #8 Col. San Pedro entre Victoria y Palma</p>
                      <p>Edo. de México, C.P. 56270</p>
                      <p>Tel: 01 (595) 95 32451</p>
                      <p>ID 72*15*62833</p>
                      <p>cubano_chicon@live.com.mx</p>
                    </div>
                    <div class="card-action">
                      <a href="#">Mapa</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col m4 m4">
                <div class="card horizontal hoverable">
                  <div class="card-image">
                    <img src="{{ asset('images/logos_cubano-04.png') }}">
                  </div>
                  <div class="card-stacked">
                    <div class="card-content">
                      <p><strong>Sucursal Edo. de México</strong></p>
                      <p>Ave. Nacional #13 Col. San Pablito entre Irrigación y Netzahualcoyotl</p>
                      <p>Edo. de México, C.P. 56270</p>
                      <p>Tel: 01 (595) 95 30568</p>
                      <p>ID 72*15*62829</p>
                      <p>dnjfmfn@live.com.mx</p>
                    </div>
                    <div class="card-action">
                      <a href="#">Mapa</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col m4 m4">
                <div class="card horizontal hoverable">
                  <div class="card-image">
                    <img src="{{ asset('images/logos_cubano-02.png') }}">
                  </div>
                  <div class="card-stacked">
                    <div class="card-content">
                      <p><strong>Sucursal Edo. de México</strong></p>
                      <p>Juan León #8 Col. San Pedro entre Victoria y Palma</p>
                      <p>Edo. de México, C.P. 56270</p>
                      <p>Tel: 01 (595) 95 32451</p>
                      <p>ID 72*15*62833</p>
                      <p>cubano_chicon@live.com.mx</p>
                    </div>
                    <div class="card-action">
                      <a href="#">Mapa</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col m4 m4">
                <div class="card horizontal hoverable">
                  <div class="card-stacked" style="height: 288px;">
                    <div class="card-content">
                      <div class="center">
                        <p class="nueva-sucursal"><strong>PRÓXIMAMENTE<br> NUEVA SUCURSAL</strong></p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <section id="contacto">
      <div class="container">
        <div class="row">
          <div class="col s12 m12">
            <h2 class="header center blue-grey-text darken-3">MANDA TUS COMENTARIOS</h2>
          </div>
          <div class="col s12 m8 offset-m2 center">
            <p>Ya sea que busques comprar alguno de nuestros productos, formar parte de nuestro equipo o algúna otra opción en <b>Cierres El Cubano</b> estamos para servirte, dejanos tu mensaje y nosotros nos pondremos en contacto contigo a la brevedad.</p>
          </div>
        </div>

        <div class="row">
          <div class="col s12 m8 offset-m2">
            <form name="contact-form" id="contactForm" action="" method="POST">

              <div class="row">
                <div class="col s12 m6">
                  <div class="input-field">
                    <input type="text" name="name" class="validate" id="name" required>
                    <label for="name">Nombre</label>
                  </div>

                </div><!-- /.col-md-6 -->

                <div class="col s12 m6">
                  <div class="input-field">
                    <input id="email" type="email" name="email" class="validate" required>
                    <label for="email" data-error="wrong" data-success="right">Email</label>
                  </div>
                </div><!-- /.col-md-6 -->
              </div><!-- /.row -->

              <div class="row">
                <div class="col s12 m12">
                  <div class="input-field">
                    <input id="website" type="text" name="subject" class="validate" >
                    <label for="website">Asunto</label>
                  </div>
                </div><!-- /.col-md-6 -->
              </div><!-- /.row -->

              <div class="input-field">
                <textarea name="message" id="message" class="materialize-textarea" required></textarea>
                <label for="message">Mensaje</label>
              </div>

              <button type="submit" id="enviar" name="submit" class="waves-effect waves-light btn green submit-button green mt-30">Enviar <i class="material-icons right">send</i></button>
            </form>
          </div><!-- /.col-md-8 -->
        </div><!-- /.row -->
      </div>
      <!-- contact-form-section End -->
    </section>
  </main>

  <footer class="page-footer grey darken-3">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Cierres El Cubano</h5>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
        <div class="row">
          <div class="col l6">
            Todos los derechos reservados.            
          </div>
          <div class="col l6 right-align">
            © {!! date('Y') !!}
          </div>
        </div>
      </div>
    </div>
  </footer>
  {{-- </div> --}}
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="{{asset('js/materialize.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/owl.carousel.js')}}"></script>
  <script>
    $(document).ready(function(){
      $(".button-collapse").sideNav({
         edge: 'right', // Choose the horizontal origin
         closeOnClick: true
       });

      $('.modal-trigger').leanModal();

      $('.owl-carousel').owlCarousel({
        items:5,
        loop:true,
        margin:10,
        merge:true,
        responsive:{
          678:{
            mergeFit:true
          },
          1000:{
            mergeFit:false
          }
        }
      });
      
      $('a.page-scroll').on('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
          scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
      });
    });
  </script>
  <script>
    (function($){
      $(window).on("load",function(){
        jQuery("#preloader").delay(3000).fadeOut("slow");
      });
    })(jQuery);
  </script>
</body>
</html>