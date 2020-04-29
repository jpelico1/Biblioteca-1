<div class="form-group">
    <label for="inputNombre" class="col-lg-3 control-label requerido">Nombre</label>
    <div class="col-lg-8">
        <input type="text" name="nombre" class="form-control" id="inputNombre" placeholder="Nombre" value= "{{old('nombre')}}" required>
    </div>
</div>
<div class="form-group">
    <label for="inputURL" class="col-lg-3 control-label requerido">URL</label>
    <div class="col-lg-8">
        <input type="text" name="url" class="form-control" id="inputURL" placeholder="URL" value="{{old('url')}}" required>
    </div>
</div>
<div class="form-group">
    <label for="inputIcono" class="col-lg-3 control-label">Icono</label>
    <div class="col-lg-8">
        <input type="text" name="icono" class="form-control" id="inputIcono" placeholder="Icono" value="{{old('icono')}}">
    </div>
    <div class="col-lg-1">
        <span id="mostrar-icono" class="fa fa-fw {{old("icono")}}"></span>
    </div>
</div>