@extends('layouts.principal')
@section('meta')
   <title>Juntos por el Medio Ambiente</title>
    <meta name="description" content="Juntos por el Medio Ambiente es una iniciativa que nace con el objetivo de sensibilizar a la sociedad sobre el grave problema de contaminación que afecta al Perú y promover buenas prácticas para mitigar su impacto." />
@endsection



@section('content')

        <div class="fh5co-hero">
             <div class="fh5co-overlay"></div>
             <div class="fh5co-cover text-center" data-stellar-background-ratio="0.5" style="background-image: url({{url('template')}}/images/home-image.jpg);">
                    <div class="desc animate-box">
                        <h2>JUNTOS CUIDAMOS MEJOR</h2>
                    <div align="center">


                    </div>
                </div>
           </div>

        </div>
        <!-- end:header-top -->
        <div id="fh5co-work-section">
            <div class="container">
                <div class="row">
              <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
                      <h6>¿Quiénes somos?</h6>
                      <p>Juntos por el Medio Ambiente es una iniciativa que nace con el objetivo de sensibilizar a la sociedad sobre el grave problema de contaminación que afecta al Perú y promover buenas prácticas para mitigar su impacto.</p>
                    </div></div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-8">
                        <div class="fh5co-grid animate-box" style="background-image: url({{url('template')}}/images/work-1.jpg);">
                            <a class="image-popup text-center" href="#">
                                <div class="prod-title">
                                    <h3>Contaminación Ambiental</h3>
                                    <span>Acumulación de basura</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="fh5co-grid animate-box" style="background-image: url({{url('template')}}/images/work-7.jpg);">
                            <a class="image-popup text-center" href="#">
                                <div class="prod-title">
                                    <h3>Contaminación dentro del hogar</h3>
                                    <span>Por cocinar con leña o carbón</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="fh5co-grid animate-box" style="background-image: url({{url('template')}}/images/work-3.jpg);">
                            <a class="image-popup text-center" href="#">
                                <div class="prod-title">
                                    <h3>Contaminación del Aire</h3>
                                    <span>Por el parque automotor </span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <div class="fh5co-grid animate-box" style="background-image: url({{url('template')}}/images/work-6.jpg);">
                            <a class="image-popup text-center" href="#">
                                <div class="prod-title">
                                    <h3>Contaminación del ambiente</h3>
                                    <span> Por actividades informales</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- fh5co-work-section -->
        <div id="fh5co-services-section" class="fh5co-section-gray">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
                        <p>La Sociedad Nacional de Industrias (SNI), el Organismo Peruano de Consumidores y Usuarios (OPECU) y la ONG Gobernabilidad Perú Ambiental, se han unido en un solo frente para impulsar esta iniciativa con la consigna de sensibilizar a las personas y empresas sobre la existencia de un problema serio,y alentar las correctas prácticas y hábitos que contribuyan a mejorar la calidad del medio ambiente.</p>
                        <div class="col-md-4 col-lg-10 col-md-offset-1" align=center>
                         <img src="{{url('template')}}/images/logos.png" width="600" height="98" alt="" class="img-responsive">

                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row text-center">
                  <div class="col-md-6  col-sm-2">
                        <div class="services animate-box">
                            <span><i class="icon-check"></i></span>
                            <h3>Misión</h3>
                            <p>Alentar las correctas prácticas y hábitos que contribuyan a mejorar la calidad del medio ambiente, en personas y empresas.</p>
                        </div>
                    </div>
                  <div class="col-md-6 col-sm-4">
                        <div class="services animate-box">
                            <span><i class="icon-eye"></i></span>
                            <h3>Visión</h3>
                            <p>Cambiar la conciencia de la sociedad y lograr que todos valoren la importancia de cuidar nuestro medio ambiente.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- fh5co-services-section -->
        <div id="fh5co-content-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="fh5co-testimonial text-center animate-box">
                            <figure>
                              <img src="{{url('template')}}/images/user-1.jpg" alt="user">
                            </figure>
                            <blockquote>
                                <p>“La única forma, si vamos a mejorar la calidad del medio ambiente, es involucrar a todo el mundo”</p>
                            </blockquote>
                            <span>Richard Rogers</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- fh5co-content-section -->
        <div id="fh5co-blog-section" class="fh5co-section-gray">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
                        <h3>Contenidos de interés</h3>

                    </div>
                </div>
            </div>
             @php
              $cont = 0;
            @endphp
            <div class="container">
                <div class="row ">
                  @foreach ($prees as $value)
                          @php
                            $cont++;
                            $change= str_replace("\\", "/", $value->imagenDepotTitle_link->path);
                            $url2 = url($change);

                            if ($value->url_image_id != 0) {
                               $hre = route('contenido', [$value->slug]);

                            } else {
                                $hre = $value->url_string;
                            }
                          @endphp

                  <div class="col-md-4 col-sm-6 col-xs-12 animate-box" >
                    <div class="blog-sec box wow bounceInUp" id="noticia">
                      <div class="blog-img">
                        <a href="">
                          <img src='{{ $url2  }}' id="imge" class="img-responsive">
                        </a>
                      </div>
                      <div class="blog-info">
                         <p style="font-size: 20px; color: green;">
                             <a href='{{ $hre }}'> {{ $value->title }} </a>
                        </p>

                       <p> {!! trim($value->description)  !!} </p>
                         <button type="button" class="btn btn-success">  <a style="color:white;" href='{{ $hre }}'>Leer m&aacute;s →</a> </button>
                      </div>
                      <br><br><br>
                    </div>

                  </div>
                       @php
                          if($cont ==3){
                            echo "</div> <div class='row'>";
                            $cont =0;
                          }else{
                            echo '';
                          }
                       @endphp

                  @endforeach
                </div>
              </div>
        </div>
@endsection

