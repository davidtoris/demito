@extends('admin.layout')

@section('header')
	
	<h1>
        Posts
        <small>Crear publicación</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href=" {{ route('admin') }}"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Posts</li>
      </ol>

@stop

@section('content')
<div class="row">
<form action="">
	<div class="col-md-8">
		<div class="box box-primary">
		        <div class="box-body">
		        	<div class="form-group">
		        		<label>Título de la publicación</label>
		        		<input name="title" class="form-control" placeholder="Ingresa el título">
		        	</div>
		        	<div class="form-group">
		        		<label>Extracto de la publicación</label>
		        		<input name="excerpt" class="form-control" placeholder="Ingresa el extracto">
		        	</div>
		        	<div class="form-group">
		        		<label>Contenido de la publicación</label>
		        		<textarea rows="10" name="body" class="form-control" placeholder="Ingresa el extracto"></textarea>
		        	</div>
		        </div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="box box-primary">
			<div class="box-content">
			 <div class="form-group">
                <label>Date:</label>

                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right" id="datepicker">
                </div>
                <!-- /.input group -->
              </div>
              <div class="form-group">
              	<label>Categorías</label>
              	<select class="form-control">
              	<option value="">Selecciona una categoría</option>
              	@foreach($categories as $category)
					<option value="{{ $category->id }}">{{ $category->name }}</option>
              	@endforeach
              	</select>
              </div>

				<div class="form-group">
	        		<label>Extracto de la publicación</label>
	        		<input name="excerpt" class="form-control" placeholder="Ingresa el extracto">
	        	</div>

	        	<div class="form-group">
	        		<button type="submit" class="btn btn-primary btn-block">Guardar publicación</button>
	        	</div>
			</div>
		</div>
	</div>
	 </form>
</div>

@stop


@push('styles')
	  <link rel="stylesheet" href="/adminlte/css/dataTables.bootstrap.min.css">
@endpush

@push('scripts')
	<script src="/adminlte/js/bootstrap-datepicker.min.js"></script>
	<script>
		//Date picker
	    $('#datepicker').datepicker({
	      autoclose: true
	    })
   	</script>
@endpush
    