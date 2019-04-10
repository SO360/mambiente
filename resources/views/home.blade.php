@extends('layouts.app')
@section('meta')
   <title>Juntos por el Medio Ambiente</title>
    <meta name="description" content="Juntos por el Medio Ambiente es una iniciativa que nace con el objetivo de sensibilizar a la sociedad sobre el grave problema de contaminación que afecta al Perú y promover buenas prácticas para mitigar su impacto." />
@endsection
@section('content')

      <!--
  <section class="content">

      <div class="row">
        <div class="col-lg-3 col-xs-6">

          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>150</h3>

              <p>New Orders</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-3 col-xs-6">

          <div class="small-box bg-green">
            <div class="inner">
              <h3>53<sup style="font-size: 20px">%</sup></h3>

              <p>Bounce Rate</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-3 col-xs-6">

          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>44</h3>

              <p>User Registrations</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-3 col-xs-6">

          <div class="small-box bg-red">
            <div class="inner">
              <h3>65</h3>

              <p>Unique Visitors</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

      </div>

  </section>

<!--

    <section class="content">
      <div class="row">
        <div class="col-md-6">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Últimas Noticias Nacional Registrada</h3>
            </div>

           <div class="col-md-6">



                <div class="container-fluid" id="No">
            <table class="table table-bordered" id="In">
               <thead>
                  <tr>
                     <th>N°</th>
                     <th>Título</th>
                     <th>Fecha</th>
                     <th>Habilitar</th>

                  </tr>
               </thead>
            </table>
        </div>

        </div>


          </div>


        </div>


              <div class="col-md-6">



                <div class="container-fluid" id="No">
            <table class="table table-bordered" id="Na">
               <thead>
                  <tr>
                     <th>N°</th>
                     <th>Título</th>
                     <th>Fecha</th>
                     <th>Habilitar</th>

                  </tr>
               </thead>
            </table>
        </div>

        </div>

      </div>


    </section>

 -->

@endsection


@section('javascript')

<script type="text/javascript">


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
                            {'defaultContent':"<button type='button' class='editar btn btn-primary'><i class='fa fa-pencil-square-o'></i></button>  <button type='button' class='eliminar btn btn-danger' data-toggle='modal' data-target='#modalEliminar' ><i class='fa fa-trash-o'></i></button>"},
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

  table2 = $('#In').DataTable({
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
                        ],
                        bAutoWidth: false,
                        order: [[0, 'asc']],
                        'aaSorting': [],
                        paging: true,
                        searching: false,
                    });
</script>





@endsection