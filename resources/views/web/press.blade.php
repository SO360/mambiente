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
		<!-- fh5co-content-section -->
		<div id="fh5co-services-section">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
						<h3>press releases</h3>
						<p>Notas de prensa para descargar</p>
					</div>
				</div>
			</div>
			<div class="container">

                @php
                  $cont = 0;
                @endphp
                <div class="row text-center">
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
                      <div class="col-md-4 col-sm-4 animate-box">
						<div class="services animate-box">
							<span><i class="icon-notebook"></i></span>
							<h3>{{ $value->title }}</h3>

							<a href="{{ $url2 }}"  download="{{ $value->title }}"  title="Descargar archivo">Descargar archivo</a>
						</div>
					</div>

                       @php
                          if($cont ==3){
                          	echo "</div> <div class='row text-center'>";
                          	$cont =0;
                          }else{
                          	echo '';
                          }
                       @endphp

                  @endforeach
                </div>






			</div>
		</div>
		<!-- END fh5co-services-section -->
@endsection