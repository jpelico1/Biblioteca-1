@extends("theme.$theme.layout")
@section('titulo')
Permisos
@endsection
@section('contenido')
<div class="row">
    <div class="col-lg-12">
        @include('includes.mensaje')
        @include('includes.form-error')
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Permisos</h3>
                <div class="box-tools pull-right">
                    <a href="{{route('crear_permiso')}}" class="btn btn-block btn-success btn-sm">
                    <i class="fa fa-fw fa-plus-circle"></i>Nuevo registro</a>
                    </div>
            </div>
            <div class="box-body table-responsive no-padding">
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Slug</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                       @foreach ($permisos as $permiso)
                           <tr>
                               <td>{{$permiso->id}}</td>
                               <td>{{$permiso->nombre}}</td>
                               <td>{{$permiso->slug}}</td>
                               <td></td>
                           </tr>
                       @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection