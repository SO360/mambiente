
@extends('layouts.app')

@section('content')

  <style type="text/css">

  	th, td { white-space: nowrap; }
    div.dataTables_wrapper {
        margin: 0 auto;
    }

    div.container {
        width: 80%;
    }
  </style>

  <div class="box box-primary" id="buscarT">
               <div class="box-header with-border" >
                        <div class="container">
               <h3 class="box-title" align="center">Consultar Noticia</h3>
               <br>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-4">
                <button type="button" id="nacional" class="btn btn-block btn-primary btn-lg">Noticias Nacionales</button>
            </div>
            <div class="col-md-4">
                <button type="button" id="internacional" class="btn btn-block btn-primary btn-lg">Noticias Internacionales</button>
            </div>
        </div>
        <br>


        <div class="container-fluid" id="No">
            <table class="table table-bordered" id="Na">
               <thead>
                  <tr>
                     <th>N°</th>
                     <th>Título</th>
                     <th>Fecha</th>
                     <th>Estado</th>
                     <th>Habilitar</th>
                     <th>Editar</th>

                  </tr>
               </thead>
            </table>
        </div>

        <div class="container" style="display: none;" id="Io">
            <table class="table table-bordered" id="In">
               <thead>
                  <tr>
                     <th>N°</th>
                     <th>Título</th>
                     <th>Fecha</th>
                     <th>Estado</th>
                     <th>Habilitar</th>
                     <th>Editar</th>

                  </tr>
               </thead>
            </table>
        </div>

    </div>
                    </div>
  </div>




@endsection

@section('javascript')




  <script src="{{ url('adminlte/js/fileinput.min.js') }}"></script>
  <script src="{{ url('adminlte/js/fileinput.js') }}"></script>

  <script src="{{ url('adminlte/js/bootstrap-datepicker.min.js') }}"></script>
  <!-- CkEditor -->
  <script src="{{ url('carnaval/plugin/ckeditor/ckeditor.js') }}"></script>


  <script>

        $('#editarT').css('display','none');
        $('#backP').click(function(){
               location.reload();
        });
        itable = $('#Na').DataTable({
                        processing: true,
                        serverSide: true,
                        ajax:{
                            url:'{{ route('admin.datat.index') }}' ,
                            type:'get',
                        } ,
                         language: {
                            url: '//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json'
                         },
                        columns: [
                            {data: 'id', name:'id','orderable': false},
                            {data: 'title', name:'title'},
                            {data: 'publish', name:'publish'},
                            {data: 'estado', name:'estado'},
                            {'defaultContent':"<button type='button' class='editar2 btn btn-danger'><i class='glyphicon glyphicon-off'></i></button> "},
                            {'defaultContent':"<button type='button' class='editar btn btn-primary'><i class='fa fa-pencil-square-o'></i></button> "},
                        ],
                        bAutoWidth: false,
                        order: [[0, 'asc']],
                        'aaSorting': [],
                        paging: true,
                        searching: false,
                        columnDefs: [
				            { width: 20, height: 100,  targets: 0 }
				        ],
				        fixedColumns: true,
                    });



        itable2 = $('#In').DataTable({
                        processing: true,
                        serverSide: true,

                        ajax:{
                            url:'{{ route('admin.internacional.index') }}' ,
                            type:'get',
                        } ,
                         language: {
                            url: '//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json'
                         },
                        columns: [
                            {data: 'id', name:'id','orderable': false},
                            {data: 'title', name:'title'},
                            {data: 'publish', name:'publish'},
                            {data: 'estado', name:'estado'},
                            {'defaultContent':"<button type='button' class='editar2 btn btn-danger'><i class='glyphicon glyphicon-off'></i></button> "},
                            {'defaultContent':"<button type='button' class='editar btn btn-primary'><i class='fa fa-pencil-square-o'></i></button> "},
                        ],
                        bAutoWidth: false,
                        order: [[0, 'asc']],
                        'aaSorting': [],
                        paging: true,
                        searching: false,
                    });


            $('#nacional').click(function(){

            	$('#Io').css("display","none");
            	$('#No').css("display","block");

            });

            $('#internacional').click(function(){
            	$('#No').css("display","none");
                $('#Io').css("display","block");
            });




            var obtener_data_editar = function(tbody,table,bt){
              $(tbody).on("click",bt,function(){
                var data = table.row($(this).parents("tr")).data();
                console.log(data.url_title_id);

                var parametros = {
                         "id" : data.url_title_id
                      };

               url1 = data.url_title_id;

                vurl='{{ route('admin.noticiaeditar.index') }}';
                vurl = `${vurl}?id=${url1}`;

               //(Location).load(vurl, { id: url1 });



                console.log(vurl);
                $(location).attr('href',vurl);

                /* var doc = 'statusEdit';
                $.ajax({
                url:   vurl,
                data: {id:data.url_title_id},
                type:  'GET', //método de envio
                dataType : 'json',
                headers: {
                              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                          } ,
                success:  function (data) {
                       console.log(data);

                       $('#buscarT').css('display','none');
                       $('#editarT').css('display','block');

                       va = data[0].description;

                       $('#editor1').after("<textarea class='input100'   id='editor1' name='message' placeholder='Escribir lol aqui la noticia'></textarea>");
                       $('#titulo').val(data[0].title);

                       //location.reload();

                     // document.getElementById("variable").value=data;

                },
                error: function (data) {
                    console.log('Error:', data);
                  }
                }); */
              })
            }

            obtener_data_editar("#Na tbody",itable,"button.editar");
            obtener_data_editar("#In tbody",itable2,"button.editar");



        var obtener_habilitar = function(tbody,table,bt){
              $(tbody).on("click",bt,function(){
                var data = table.row($(this).parents("tr")).data();
                console.log(data.url_title_id);

                var parametros = {
                         "id" : data.url_title_id
                      };

               url1 = data.url_title_id;

               vurl='{{ url('admin/statusEdit') }}';
                vurl = `${vurl}?id=${url1}`;

               //(Location).load(vurl, { id: url1 });



                console.log(vurl);
                $(location).attr('href',vurl);

                //var doc = 'statusEdit';
                $.ajax({
                url:   vurl,
                data: {id:data.url_title_id},
                type:  'GET', //método de envio
                dataType : 'json',
                headers: {
                              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                          } ,
                success:  function (data) {
                       console.log(data);



                       location.reload();

                     // document.getElementById("variable").value=data;

                },
                error: function (data) {
                    console.log('Error:', data);
                  }
                });
              })
            }

            obtener_habilitar("#Na tbody",itable,"button.editar2");
            obtener_habilitar("#In tbody",itable2,"button.editar2");

            $(function () {

         $('div.alert').not('.alert-important').delay(3000).fadeOut(350);

        date= new Date;

         $('#datepicker').datepicker({
               autoclose: true,minDate:  date
         });

        CKEDITOR.replace('editor1');


        $("#file-3").fileinput({
            showCaption: false,
            showUpload: false,
            browseClass: "btn btn-primary btn-lg",
            fileType: "any"
        });
        $("#file-4").fileinput({
            showCaption: false,
            showUpload: false,
            browseClass: "btn btn-primary btn-lg",
            fileType: "any"
         });


         $("#PU").click(function() {

         });
         $("#PI").click(function() {

         });

         $("#destiny").hide(7000);

    });

























         </script>
         @endsection