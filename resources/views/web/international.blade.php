@extends('layouts.principal')
@section('meta')
   <title>Juntos por el Medio Ambiente</title>
    <meta name="description" content="Juntos por el Medio Ambiente es una iniciativa que nace con el objetivo de sensibilizar a la sociedad sobre el grave problema de contaminación que afecta al Perú y promover buenas prácticas para mitigar su impacto." />
@endsection
@section('content')

		<div class="fh5co-hero fh5co-hero-2">
			<div class="fh5co-overlay"></div>


		</div>
		<!-- end:header-top -->
		<div id="fh5co-blog-section" class="fh5co-section-gray">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
						<h3>Notas en medios sobre el medio ambiente en otros países</h3>
					</div>
				</div>
			</div>
		         @php
              $cont = 0;
            @endphp
            <div class="container">
                <div class="row">
                  @foreach ($prees as $value)


		                  @php
                            $cont++;
		                    $change= str_replace("\\", "/", $value->imagenDepotTitle_link->path);
		                    $url2 = url($change);

		                    if ($value->url_string == null) {
		                       $hre = route('contenido.internacional', [$value->slug]);

		                    } else {
		                        $hre = $value->url_string;
		                    }
		                  @endphp

                  <div class="col-md-4 col-sm-6 col-xs-12 animate-box" >
                    <div class="blog-sec box wow bounceInUp" id="noticia">
                      <div class="blog-img">
                        <a href="">
                          <img src='{{ $url2  }}' class="img-responsive" id="imge">
                        </a>
                      </div>
                      <br>
                      <div class="blog-info">
                        <p style="font-size: 20px; color: green;">
                             <a href='{{ $hre }}' id='titlea1'> {{ $value->title }} </a>
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
		<!-- fh5co-blog-section -->
@endsection