@extends('app')

@section('content')
<div class="container">
    <body>
    <!-- topbar starts -->
    <div class="navbar navbar-default" role="navigation">

        <div class="navbar-inner">
            <button type="button" class="navbar-toggle pull-left animated flip">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html"> <img alt="Charisma Logo" src="img/logo20.png" class="hidden-xs"/>
                <span>Colegio</span></a>

            <!-- user dropdown starts -->
            <div class="btn-group pull-right">
                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <i class="glyphicon glyphicon-user"></i><span class="hidden-sm hidden-xs"> admin</span>
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li><a href="#">Profile</a></li>
                    <li class="divider"></li>
                    <li><a href="login.html">Logout</a></li>
                </ul>
            </div>
            <!-- user dropdown ends -->

            <!-- theme selector starts -->
            <div class="btn-group pull-right theme-container animated tada">
                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <i class="glyphicon glyphicon-tint"></i><span
                        class="hidden-sm hidden-xs"> Change Theme / Skin</span>
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" id="themes">
                    <li><a data-value="classic" href="#"><i class="whitespace"></i> Classic</a></li>
                    <li><a data-value="cerulean" href="#"><i class="whitespace"></i> Cerulean</a></li>
                    <li><a data-value="cyborg" href="#"><i class="whitespace"></i> Cyborg</a></li>
                    <li><a data-value="simplex" href="#"><i class="whitespace"></i> Simplex</a></li>
                    <li><a data-value="darkly" href="#"><i class="whitespace"></i> Darkly</a></li>
                    <li><a data-value="lumen" href="#"><i class="whitespace"></i> Lumen</a></li>
                    <li><a data-value="slate" href="#"><i class="whitespace"></i> Slate</a></li>
                    <li><a data-value="spacelab" href="#"><i class="whitespace"></i> Spacelab</a></li>
                    <li><a data-value="united" href="#"><i class="whitespace"></i> United</a></li>
                </ul>
            </div>
            <!-- theme selector ends -->

            

            <ul class="collapse navbar-collapse nav navbar-nav top-menu">
                
              
                <li>
                    <form class="navbar-search pull-left">
                        <input placeholder="Buscar Profesores" class="search-query form-control col-md-10" name="query"
                               type="text">
                    </form>
                </li>
            </ul>

        </div>
    </div>
    <!-- topbar ends -->
<div class="ch-container">
    <div class="row">
        
        <!-- left menu starts -->
        <div class="col-sm-2 col-lg-2">
            <div class="sidebar-nav">
                <div class="nav-canvas">
                    <div class="nav-sm nav nav-stacked">

                    </div>
                    <ul class="nav nav-pills nav-stacked main-menu">
                        <li class="nav-header">Main</li>
                        <li><a class="ajax-link" href="index.html"><i class="glyphicon glyphicon-home"></i><span> inicio</span></a>
                        </li>
                        <li><a class="ajax-link" href="ui.html"><i class="glyphicon glyphicon-eye-open"></i><span> Estudiantes</span></a>
                        </li>
                        <li><a class="ajax-link" href="form.html"><i
                                    class="glyphicon glyphicon-edit"></i><span> Cursos</span></a></li>
                        <li><a class="ajax-link" href="chart.html"><i class="glyphicon glyphicon-list-alt"></i><span> Notas</span></a>
                        </li>
                        <li><a class="ajax-link" href="typography.html"><i class="glyphicon glyphicon-font"></i><span> Asignaturas</span></a>
                        </li>
                        <li><a href="{{ url('profesor') }}" class="ajax-link" href="gallery.html"><i class="glyphicon glyphicon-picture"></i><span> Profesor</span></a>
                        </li>
                        
                    </ul>
                    
                </div>
            </div>
        </div>
        <!--/span-->
        <!-- left menu ends -->

        

        <div id="content" class="col-lg-10 col-sm-10">
            <!-- content starts -->
            <div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Inicio</a>
        </li>
       
    </ul>
</div>
<div class=" row">
    <div class="col-md-3 col-sm-3 col-xs-6">
        <a data-toggle="tooltip" title="6 new members." class="well top-block" href="#">
            <i class="glyphicon glyphicon-user blue"></i>

            <div>Total</div>
            <div>507</div>
           
        </a>
    </div>

    <div class="col-md-3 col-sm-3 col-xs-6">
        <a data-toggle="tooltip" title="6 new members." class="well top-block" href="#">
            <i class="glyphicon glyphicon-user blue"></i>

            <div>Creados Recientes</div>
            <div>507</div>
           
        </a>
    </div>

    <div class="col-md-3 col-sm-3 col-xs-6">
        <a data-toggle="tooltip" title="6 new members." class="well top-block" href="#">
            <i class="glyphicon glyphicon-user blue"></i>

            <div>Eliminados  Recientes</div>
            <div>507</div>
           
        </a>
    </div>

    <div class="col-md-3 col-sm-3 col-xs-6">
        <a data-toggle="tooltip" title="6 new members." class="well top-block" href="#">
            <i class="glyphicon glyphicon-user blue"></i>

            <div>Actualizados Recientes</div>
            <div>507</div>
           
        </a>
    </div>

    

    

    
</div>

<div class="row">
    <div class="box col-md-12">
    <div class="box-inner">
    <div class="box-header well" data-original-title="">
        <h2><i class="glyphicon glyphicon-user"></i> crear un nuevo Estudiante</h2>

        <div class="box-icon">
            <a href="#" class="btn btn-setting btn-round btn-default"><i class="glyphicon glyphicon-cog"></i></a>
            <a href="#" class="btn btn-minimize btn-round btn-default"><i
                    class="glyphicon glyphicon-chevron-up"></i></a>
            <a href="#" class="btn btn-close btn-round btn-default"><i class="glyphicon glyphicon-remove"></i></a>
        </div>
    </div>
    <div class="box-content">

    
     @if($errors->any)

                <ul  >
                 @foreach($errors->all() as $error)

                   <li>{{$error}}</li>

                 @endforeach


                </ul>

                @endif
  
   


    
    </div><!--/#content.col-md-0-->
    

</div><!--/fluid-row-->


<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> Completa todos los Campos..todos son requeridos</h2>

                <div class="box-icon">
                    <a href="#" class="btn btn-setting btn-round btn-default"><i
                            class="glyphicon glyphicon-cog"></i></a>
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                    <a href="#" class="btn btn-close btn-round btn-default"><i
                            class="glyphicon glyphicon-remove"></i></a>
                </div>
            </div>
            <div class="box-content">
                {!!Form::open(['route'=>'estudiantes.store','method'=>'POST'])!!}
                    
                     <div class="form-group">
                        {!!Form::label('inputEmail3', 'Codigo', array('class' => ''),array('for' => 'exampleInputEmail1'), array('placeholder' => 'nombre'))!!}
                    {!!Form::text('codigo', null,['class'=>'form-control', 'placeholder'=>'Codigo estudiante'])!!}
                    </div>


                    <div class="form-group">
                        {!!Form::label('inputEmail3', 'Tarjeta I.D', array('class' => ''),array('for' => 'exampleInputEmail1'), array('placeholder' => 'Tarjeta identidad'))!!}
                    {!!Form::text('tarjeta', null,['class'=>'form-control', 'placeholder'=>'T.I'])!!}
                    </div>

                    <div class="form-group">
                        {!!Form::label('inputEmail3', 'Nombres', array('class' => ''),array('for' => 'exampleInputEmail1'), array('placeholder' => 'nombre'))!!}
                    {!!Form::text('nombre', null,['class'=>'form-control', 'placeholder'=>'Nombres'])!!}
                    </div>

                    <div class="form-group">
                        {!!Form::label('inputEmail3', 'Apellido', array('class' => ''),array('for' => 'exampleInputEmail1'), array('placeholder' => ''))!!}
                    {!!Form::text('apellido', null,['class'=>'form-control', 'placeholder'=>'Apellidos'])!!}
                    </div>
                    <div class="form-group">
                        {!!Form::label('inputEmail3', 'Edad', array('class' => ''),array('for' => 'exampleInputEmail1'), array('placeholder' => 'nombre'))!!}
                    {!!Form::text('edad', null,['class'=>'form-control', 'placeholder'=>'Edad'])!!}
                    </div>

                    <div class="form-group">
                        {!!Form::label('inputEmail3', 'Telefono', array('class' => ''),array('for' => 'exampleInputEmail1'), array('placeholder' => 'nombre'))!!}
                    {!!Form::text('telefono', null,['class'=>'form-control', 'placeholder'=>'Telefono'])!!}
                    </div>

                    <div class="form-group">
                        {!!Form::label('inputEmail3', 'Direccion', array('class' => ''),array('for' => 'exampleInputEmail1'), array('placeholder' => 'nombre'))!!}
                    {!!Form::text('dirrecion', null,['class'=>'form-control', 'placeholder'=>'Direccion'])!!}
                    </div>

                     <div class="form-group">
                        {!!Form::label('inputEmail3', 'Curso', array('class' => ''),array('for' => 'exampleInputEmail1'), array('placeholder' => 'nombre'))!!}
                         {!!Form:: select('curso_id',$est,['class'=>'form-control','for' => 'exampleInputEmail1'])!!}
                   

                       
                    </div>

                {!!Form::submit('enviar')!!}
                {!!Form::close()!!}


                 </div>
            </div>
        </div>
    </div>
    <!--/span-->

</div><!--/row-->

    <!-- Ad, you can remove it -->


    <hr>

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">

        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h3>Settings</h3>
                </div>
                <div class="modal-body">
                    <p>Here settings can be configured...</p>
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn btn-default" data-dismiss="modal">Close</a>
                    <a href="#" class="btn btn-primary" data-dismiss="modal">Save changes</a>
                </div>
            </div>
        </div>
    </div>

    <footer class="row">
        <p class="col-md-9 col-sm-9 col-xs-12 copyright">&copy; <a href="http://usman.it" target="_blank">colegio no se 
                </a> 2015 - 2016</p>

        <p class="col-md-3 col-sm-3 col-xs-12 powered-by">Powered by: <a
                href="http://usman.it/free-responsive-admin-template">Colegio no se</a></p>
    </footer>

</div><!--/.fluid-container-->
</body>
@endsection