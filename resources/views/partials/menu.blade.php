<!--@ inject('request', 'Illuminate\Http\Request')-->

<!--{ { $request->segment(0) }}-->

<div id="fh5co-header">
        <header id="fh5co-header-section">
            <div class="container">
                <div class="nav-header">
                    <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
                    <h1 id="fh5co-logo"><a href="{{ url("/") }}"> <img src={{url('template')}}/images/logo-image.png width="120" height="120"></a></h1>
                    <!-- START #fh5co-menu-wrap -->
                    <nav id="fh5co-menu-wrap" role="navigation">
                        <ul class="sf-menu" id="fh5co-primary-menu">
                            <li class="{{active_class(if_uri_pattern(['/']),'active','other')}}">
                                <a href="{{ url("/") }}">Inicio</a>
                            </li>
                            <li class="{{active_class(if_uri_pattern(['sala*'],'active','other'))}}">
                                <a href="#" class="fh5co-sub-ddown" >Sala de prensa</a>
                                <ul class="fh5co-sub-menu">
                                    <li><a href="{{ route('sala.media') }}"> Media </a></li>
                                    <li><a href="{{ route('sala.press') }}"> Press Releases</a></li>
                                    <li><a href="#">Galeria</a>
                                    <ul class="fh5co-sub-menu">
                                        <li><a href="{{ route('sala.galery.picture') }}">Fotos</a></li>
                                        <li><a href="#">Audiovisual</a></li>
                                    </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="{{active_class(if_uri_pattern(['contenido*'],'active','other'))}}">
                                <a href="#" class="fh5co-sub-ddown"> Contenidos de interés</a>
                                 <ul class="fh5co-sub-menu">
                                    <li><a href="{{ route('content.national') }}">Nacional</a></li>
                                    <li><a href="{{ route('content.international') }}">Internacional</a></li>
                                </ul>
                            </li>
                          <li><a href="https://juntosporelmedioambiente.jimdo.com" target="_blank">Blog</a></li>
                          <li class="{{active_class(if_uri_pattern(['contacto*'],'active','other'))}}"><a href="{{ route('contact') }}">Contacto</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>
    </div>