@inject('request', 'Illuminate\Http\Request')
<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <ul class="sidebar-menu">
            <!--
            <li class="{{ $request->segment(1) == 'home' ? 'active' : '' }}">
                <a href="{{ url('admin/home') }}">
                    <i class="fa fa-wrench"></i>
                    <span class="title">@lang('global.app_dashboard')</span>
                </a>
            </li>
            -->

             <li class="">
                <a href="{{ url('admin/home') }}">
                    <i class="fa fa-check-square-o"></i>
                    <span class="title">Sala de Prensa</span>
                </a>
                 <ul class="treeview-menu">



                    <li class="{{ $request->segment(2) == 'noticia' ? 'active active-sub' : '' }}">

                        <a href="#">

                        <a href="">
                            <i class="fa fa-briefcase"></i>
                            <span class="title">Noticia</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">

                            <li class="{{ $request->segment(2) == 'noticia' ? 'active active-sub' : '' }}">



                                <a href="{{ route('admin.noticias.store') }}">

                                    <i class="fa fa-briefcase"></i>
                                    <span class="title">Agregar</span>
                                </a>
                            </li>
                             <li class="{{ $request->segment(2) == 'noticia' ? 'active active-sub' : '' }}">
                                <a href="{{ route('admin.datat.create') }}">
                                    <i class="fa fa-briefcase"></i>
                                    <span class="title">Consultar</span>
                                </a>
                            </li>

                        </ul>

                    </li>
                    <li class="{{ $request->segment(2) == 'documentos' ? 'active active-sub' : '' }}">

                        <a href="#">

                        <a href="">
                            <i class="fa fa-briefcase"></i>
                            <span class="title">Documentos</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">

                            <li class="{{ $request->segment(2) == 'documentos' ? 'active active-sub' : '' }}">



                                <a href="{{ route('admin.word.store') }}">

                                    <i class="fa fa-briefcase"></i>
                                    <span class="title">Agregar</span>
                                </a>
                            </li>
                             <li class="{{ $request->segment(2) == 'documentos' ? 'active active-sub' : '' }}">
                                <a href="{{ route('admin.docsearch.index') }}">
                                    <i class="fa fa-briefcase"></i>
                                    <span class="title">Consultar</span>
                                </a>
                            </li>
                        </ul>

                    </li>

                    <li class="{{ $request->segment(2) == 'media' ? 'active active-sub' : '' }}">

                        <a href="#">

                        <a href="">
                            <i class="fa fa-briefcase"></i>
                            <span class="title">Media</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">

                            <li class="{{ $request->segment(2) == 'media' ? 'active active-sub' : '' }}">



                                <a href="{{ route('admin.media.store') }}">

                                    <i class="fa fa-briefcase"></i>
                                    <span class="title">Agregars</span>
                                </a>
                            </li>
                             <li class="{{ $request->segment(2) == 'noticia' ? 'active active-sub' : '' }}">
                                <a href="{{ route('admin.medisearch.index') }}">
                                    <i class="fa fa-briefcase"></i>
                                    <span class="title">Consultar</span>
                                </a>
                            </li>
                        </ul>

                    </li>
                    <!--
                    <li class="{{ $request->segment(2) == 'foto' ? 'active active-sub' : '' }}">

                        <a href="#">

                        <a href="">
                            <i class="fa fa-briefcase"></i>
                            <span class="title">Foto</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">

                            <li class="{{ $request->segment(2) == 'foto' ? 'active active-sub' : '' }}">



                                <a href="{{ route('admin.foto.store') }}">

                                    <i class="fa fa-briefcase"></i>
                                    <span class="title">Agregars</span>
                                </a>
                            </li>
                             <li class="{{ $request->segment(2) == 'noticia' ? 'active active-sub' : '' }}">
                                <a href="{{ route('admin.fotosearch.index') }}">
                                    <i class="fa fa-briefcase"></i>
                                    <span class="title">Consultar</span>
                                </a>
                            </li>
                        </ul>

                    </li>
                -->


                </ul>
            </li>
             <!-- <li class="">
                <a href="{{ url('admin/home') }}">
                    <i class="fa fa-check-square-o"></i>
                    <span class="title">@lang('global.content.titleA')</span>
                </a>
                 <ul class="treeview-menu">

                    <li>
                        <a>
                            <i class="fa fa-briefcase"></i>
                            <span class="title">
                               @lang('global.content.titleB')
                            </span>
                        </a>
                    </li>
                    <li>
                        <a>
                            <i class="fa fa-briefcase"></i>
                            <span class="title">
                                @lang('global.content.titleC')
                            </span>
                        </a>
                    </li>

                </ul>
            </li> -->
             <li class="{{ $request->segment(1) == 'home' ? 'active' : '' }}">
                <a href="{{ url('admin/home') }}">
                    <i class="fa  fa-user-plus"></i>
                    <span class="title">Contacto</span>
                </a>
            </li>


            @can('users_manage')
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-users"></i>
                    <span class="title">Administrador de Usuario</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">

                    <li class="{{ $request->segment(2) == 'permissions' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.permissions.index') }}">
                            <i class="fa fa-briefcase"></i>
                            <span class="title">
                                Permisos
                            </span>
                        </a>
                    </li>
                    <li class="{{ $request->segment(2) == 'roles' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.roles.index') }}">
                            <i class="fa fa-briefcase"></i>
                            <span class="title">
                                Roles
                            </span>
                        </a>
                    </li>
                    <li class="{{ $request->segment(2) == 'users' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.users.index') }}">
                            <i class="fa fa-user"></i>
                            <span class="title">
                               Usuario
                            </span>
                        </a>
                    </li>
                </ul>
            </li>
            @endcan

            <li class="{{ $request->segment(1) == 'change_password' ? 'active' : '' }}">
                <a href="{{ route('auth.change_password') }}">
                    <i class="fa fa-key"></i>
                    <span class="title">Cambiar contraseña</span>
                </a>
            </li>

            <li>
                <a href="#logout" onclick="$('#logout').submit();">
                    <i class="fa fa-arrow-left"></i>
                    <span class="title">Salir</span>
                </a>
            </li>
        </ul>
    </section>
</aside>
{!! Form::open(['route' => 'auth.logout', 'style' => 'display:none;', 'id' => 'logout']) !!}
<button type="submit">@lang('global.logout')</button>
{!! Form::close() !!}
