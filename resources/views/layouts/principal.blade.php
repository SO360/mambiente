
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" prefix="og: http://ogp.me/ns#"> <!--<![endif]-->
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="keywords" content="cuidado ambiental, naturaleza, medio ambiente, juntos por el medio ambiente, reciclaje, preservacion ambiental" />
    <meta name="Orange 360" content="" />


    <meta property="fb:admins" content="100008217768429" />
    @yield('meta')



    @include('partials.head_template')

    </head>
    <body>
        <div id="fh5co-wrapper">
        <div id="fh5co-page">
         @include('partials.menu')

         @yield('content')

         @include('partials.footer')

         </div>
        <!-- END fh5co-page -->
    </div>
    <!-- END fh5co-wrapper -->

    <!-- jQuery -->
   <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="//cdn.datatables.net/1.10.9/js/jquery.dataTables.min.js"></script>
<script src="//cdn.datatables.net/buttons/1.2.4/js/dataTables.buttons.min.js"></script>
<script src="//cdn.datatables.net/buttons/1.2.4/js/buttons.flash.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.colVis.min.js"></script>
<script src="https://cdn.datatables.net/select/1.2.0/js/dataTables.select.min.js"></script>
<script src="https://code.jquery.com/ui/1.11.3/jquery-ui.min.js"></script>
<script src="{{ url('adminlte/js') }}/bootstrap.min.js"></script>
<script src="{{ url('adminlte/js') }}/select2.full.min.js"></script>
<script src="{{ url('adminlte/js') }}/main.js"></script>

<script src="{{ url('adminlte/plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
<script src="{{ url('adminlte/plugins/fastclick/fastclick.js') }}"></script>
<script src="{{ url('adminlte/js/app.min.js') }}"></script>


<!-- Template--->
 <!-- jQuery Easing -->
<script src="{{url('template')}}/js/jquery.easing.1.3.js"></script>
<!-- Bootstrap -->
<!--<script src="{ {url('template')}}/js/bootstrap.min.js"></script>-->
<!-- Waypoints -->
<script src="{{url('template')}}/js/jquery.waypoints.min.js"></script>
<!-- Stellar -->
<script src="{{url('template')}}/js/jquery.stellar.min.js"></script>
<!-- Superfish -->
<script src="{{url('template')}}/js/hoverIntent.js"></script>
<script src="{{url('template')}}/js/superfish.js"></script>

<!-- Main JS (Do not remove) -->
<script src="{{url('template')}}/js/main.js"></script>



<script>
    window._token = '{{ csrf_token() }}';
</script>

    </body>
</html>

