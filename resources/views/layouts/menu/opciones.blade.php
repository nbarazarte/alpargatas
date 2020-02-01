<!-- 
  SIDE PANEL 
  
    sidepanel-dark      = dark color
    sidepanel-light     = light color (white)
    sidepanel-theme-color   = theme color
    
    sidepanel-inverse   = By default, sidepanel is placed on right (left for RTL)
            If you add "sidepanel-inverse", will be placed on left side (right on RTL).
-->
<div id="sidepanel" class="sidepanel-dark sidepanel-inverse" >
  <a id="sidepanel_close" href="#"><!-- close -->
    <i class="glyphicon glyphicon-remove"></i>
  </a>

  <div class="sidepanel-content">
    <h2 class="sidepanel-title">Cryptia Exchange</h2>

    <!-- SIDE NAV -->
    <ul class="list-group">
  
      @if (Route::current()->getName() == 'inicio')

      <li class="list-group-item list-toggle"><!-- add "active" to stay open on page load -->
        <a data-toggle="collapse" data-parent="#sidebar-nav" href="#collapse-1" class="collapsed"> 
          <i class="ico-dd icon-angle-down"><!-- Drop Down Indicator --></i>
          
          <i class="fa fa-home"></i>
        </a>
        <ul id="collapse-1" class="list-unstyled collapse"><!-- add "in" to stay open on page load -->
            <li><a href="#">INICIO</a></li>
            <li><a href="#cryptia">CRYPTIA EXCHANGE</a></li>
            <li><a href="#monedas-inicio">MONEDAS</a></li>
            <li><a href="#noticias-resumen">RESUMEN DE NOTICIAS</a></li>
            <li><a href="#blog-resumen">NUESTRO BLOG</a></li>
        </ul>
      </li>

      @else

      <li class="list-group-item list-toggle"><!-- add "active" to stay open on page load -->
        <a data-toggle="collapse" data-parent="#sidebar-nav" href="#collapse-1" class="collapsed"> 
          <i class="ico-dd icon-angle-down"><!-- Drop Down Indicator --></i>
          
          <i class="fa fa-home"></i>
        </a>
        <ul id="collapse-1" class="list-unstyled collapse"><!-- add "in" to stay open on page load -->
            <li><a href="{{route('inicio')}}#">INICIO</a></li>
            <li><a href="{{route('inicio')}}#cryptia">CRYPTIA EXCHANGE</a></li>
            <li><a href="{{route('inicio')}}#monedas-inicio">MONEDAS</a></li>
            <li><a href="{{route('inicio')}}#noticias-resumen">RESUMEN DE NOTICIAS</a></li>
            <li><a href="{{route('inicio')}}#blog-resumen">NUESTRO BLOG</a></li>
        </ul>
      </li>          

      @endif

      @if (Route::current()->getName() == 'nosotros')

        <li class="list-group-item list-toggle"><!-- add "active" to stay open on page load -->                
          <a data-toggle="collapse" data-parent="#sidebar-nav" href="#collapse-2" class="collapsed"> 
            <i class="ico-dd icon-angle-down"><!-- Drop Down Indicator --></i>
            
            SOBRE NOSOTROS
          </a>
          <ul id="collapse-2" class="list-unstyled collapse"><!-- add "in" to stay open on page load -->
              <li><a href="#quienes-somos">¿QUIENES SOMOS?</a></li>
              <li><a href="#mision">MISIÓN</a></li>
              <li><a href="#vision">VISIÓN</a></li>
              <li><a href="#valores">VALORES</a></li>
              <li><a href="#servicios">SERVICIOS</a></li>
          </ul>
        </li>

      @else

        <li class="list-group-item list-toggle"><!-- add "active" to stay open on page load -->                
          <a data-toggle="collapse" data-parent="#sidebar-nav" href="#collapse-2" class="collapsed"> 
            <i class="ico-dd icon-angle-down"><!-- Drop Down Indicator --></i>
            
            SOBRE NOSOTROS
          </a>
          <ul id="collapse-2" class="list-unstyled collapse"><!-- add "in" to stay open on page load -->
              <li><a href="{{route('nosotros')}}#quienes-somos">¿QUIENES SOMOS?</a></li>
              <li><a href="{{route('nosotros')}}#mision">MISIÓN</a></li>
              <li><a href="{{route('nosotros')}}#vision">VISIÓN</a></li>
              <li><a href="{{route('nosotros')}}#valores">VALORES</a></li>
              <li><a href="{{route('nosotros')}}#servicios">SERVICIOS</a></li>
          </ul>
        </li>
      @endif

      @if (Route::current()->getName() == 'mercados')

        <li class="list-group-item">
          <a href="#">
            
            MERCADOS
          </a>
        </li>          

      @else

        <li class="list-group-item">
          <a href="{{ route('mercados')}}">
             
            MERCADOS
          </a>
        </li>

      @endif


      @if (Route::current()->getName() == 'monedas')

        <li class="list-group-item list-toggle"><!-- add "active" to stay open on page load -->                
          <a data-toggle="collapse" data-parent="#sidebar-nav" href="#collapse-3" class="collapsed"> 
            <i class="ico-dd icon-angle-down"><!-- Drop Down Indicator --></i>
            
            MONEDAS
          </a>
          <ul id="collapse-3" class="list-unstyled collapse"><!-- add "in" to stay open on page load -->
            <li><a href="#">CRIPTOMONEDAS</a></li>
            <li><a href="#bitcoin">BITCOIN</a></li>
            <li><a href="#ripple">RIPPLE</a></li>
            <li><a href="#ethereum">ETHEREUM</a></li>
            <li><a href="#dash">DASH</a></li>                     
            <li><a href="#litecoin">LITECOIN</a></li>
            <li><a href="#petro">PETRO</a></li>
          </ul>
        </li>

      @else

        <li class="list-group-item list-toggle"><!-- add "active" to stay open on page load -->                
          <a data-toggle="collapse" data-parent="#sidebar-nav" href="#collapse-3" class="collapsed"> 
            <i class="ico-dd icon-angle-down"><!-- Drop Down Indicator --></i>
            
            MONEDAS
          </a>
          <ul id="collapse-3" class="list-unstyled collapse"><!-- add "in" to stay open on page load -->
            <li><a href="{{route('monedas')}}#">CRIPTOMONEDAS</a></li>
            <li><a href="{{route('monedas')}}#bitcoin">BITCOIN</a></li>
            <li><a href="{{route('monedas')}}#ripple">RIPPLE</a></li>
            <li><a href="{{route('monedas')}}#ethereum">ETHEREUM</a></li>
            <li><a href="{{route('monedas')}}#dash">DASH</a></li>
            <li><a href="{{route('monedas')}}#litecoin">LITECOIN</a></li>
            <li><a href="{{route('monedas')}}#petro">PETRO</a></li> 
          </ul>
        </li>

      @endif

      @if (Route::current()->getName() == 'noticias')

        <li class="list-group-item">
          <a href="#">
            
            NOTICIAS
          </a>
        </li>

      @else

        <li class="list-group-item">
          <a href="{{ route('noticias')}}">
            
            NOTICIAS
          </a>
        </li>          

      @endif

      @if (Route::current()->getName() == 'tutoriales')

        <li class="list-group-item">
          <a href="#">
            
            TUTORIALES
          </a>
        </li>

      @else

        <li class="list-group-item">
          <a href="{{route('tutoriales')}}">
            
            TUTORIALES
          </a>
        </li>

      @endif

      @if (Route::current()->getName() == 'blog')

        <li class="list-group-item">
          <a href="#">
            
            BLOG
          </a>
        </li>

      @else

        <li class="list-group-item">
          <a href="{{route('blog')}}">
            
            BLOG
          </a>
        </li>

      @endif

      <li class="list-group-item">
        <a href="#contacto">
           
          CONTACTO
        </a>
      </li>          

    </ul>
    <!-- /SIDE NAV -->

    <!-- social icons -->
    <div class="text-center margin-bottom-30">

      <a href="https://www.facebook.com/CryptiaExchange/?hc_ref=ARRunlUUrumZJ2D8puynjxgr67QxldbQ372nMx-bW7-dZK2xCWjN5jPlaS44ZNfBONU&fref=nf" class="social-icon social-icon-sm social-facebook" data-toggle="tooltip" data-placement="top" title="Facebook" target="_blank">
        <i class="icon-facebook"></i>
        <i class="icon-facebook"></i>
      </a>

      <a href="https://twitter.com/cryptiaexchange" class="social-icon social-icon-sm social-twitter" data-toggle="tooltip" data-placement="top" title="Twitter" target="_blank">
        <i class="icon-twitter"></i>
        <i class="icon-twitter"></i>
      </a>

      <a href="https://www.instagram.com/cryptiaexchange/" class="social-icon social-icon-sm social-instagram" data-toggle="tooltip" data-placement="top" title="Instagram" target="_blank">
        <i class="fa fa-instagram"></i>
        <i class="fa fa-instagram"></i>
      </a>

    </div>
    <!-- /social icons -->

  </div>

</div>
<!-- /SIDE PANEL -->