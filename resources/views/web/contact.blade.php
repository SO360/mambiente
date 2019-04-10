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

		<div id="fh5co-contact" class="animate-box">
			<div class="container">
				<form action="#">
					<div class="row">

						<div class="col-md-6 animate-box">
							<div class="row">
							 <div class="one-half">
							 	<h3>Contacto</h3>
							 	<form action="/html/tags/html_form_tag_action.cfm">
									<fieldset class="form-group">
									<label for="first_name">Nombre</label>
									<input type="text" class="form-control" id="first_name" name="first_name" placeholder="Escribe tu nombre">
									</fieldset>
									<fieldset class="form-group">
									<label for="last_name">Correo</label>
									<input type="email" class="form-control" id="last_name" name="last_name" placeholder="Escribe tu correo">
									</fieldset>
									<div class="form-group">
									  <label for="comment">Mensaje:</label>
									  <textarea class="form-control" rows="5" id="comment" placeholder="Escribe tu mensaje"></textarea>
									</div>
									<button id='bu' class="btn btn-primary" align="center">Enviar</button>
								</form>

                             </div>
						</div>
					</div>
				</form>
			</div>
		</div>
		<!-- END fh5co-contact -->

@endsection

@section('javascript')
 <script type="text/javascript">
 	$('#bu').click(function(){
 		location.reload();
 	})

 </script>
@endsection