@extends('layouts.default')
@section('head')
	<link type="text/css" rel="stylesheet" href="/css/edit.css">
@endsection
@section('content')
	<section class="container-fluid">
		<h3>Clausulas</h3>
		<hr>
		@if (!empty($errors->all()))
			<div class="alert alert-danger">
				<ul>
					@foreach($errors->all() as $error)
						<li>{!! $error !!}</li>
					@endforeach
				</ul>
			</div>
		@endif
			
		<form action="{{ $action }}" method="POST" accept-charset="UTF-8">
			<input name="_token" type="hidden" value="{{ csrf_token() }}"> 
			<div class="form-group">
				<div class="row">
					<div class="col-md-4 col-md-offset-4">
						<span id="preview"></span>
					</div>
				</div>
				<div class="row">
					<div class="col-md-2 col-md-offset-5">
						<div class="btn btn-add">
							<label for="imagem" class="image-label">Selecionar Imagem</label>
							<input type="file" id="imagem" name="imagem" accept="image/*">
						</div>
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="row">
					<div class="col-md-8">
						<label for="nome">Nome</label>
						<input type="text" name="nome" id="nome" class="form-control" value="{{ (old('nome')) ? old('nome') :  $clausula->nome }}"> 
					</div>
					<div class="col-md-4">
						<label for="categoria_id">Categoria</label>
						<select name="categoria_id" id="categoria_id" class="form-control">
							<option value="0">Selecione uma categoria</option>
							@foreach($categorias as $c) 
								<option value="{{$c->id}}" <?php if (old('categoria_id') == $c->id || $clausula->categoria_id == $c->id) echo "selected" ?> >{{$c->nome}}</option>
							@endforeach
						</select>
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="row">
					<div class="col-md-12">
						<label for="descricao">Descrição</label>
						<textarea name="descricao" rows="7" id="descricao" class="form-control">{{ (old('descricao')) ? old('descricao') :  $clausula->descricao }}</textarea>
					</div>
				</div>
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-primary">Adicionar</button>
				<a href="{{action('ClausulasController@index')}}" class="btn btn-default">Cancelar</a>
			</div>
		</form>
	</section>
@endsection

@section('scripts')
	<script type="text/javascript" src="/js/edit.min.js" charset="utf-8"></script>
	<script type="text/javascript" src="/js/avatar.js" charset="utf-8"></script>
	<script type="text/javascript" charset="utf-8">
		$('#descricao').jqte();
	    $.uploadPreview({
		    input_field: "#imagem",
		    preview_box: "#preview",
		    label_field: ".image-label",
		    label_selected: "Alterar Imagem"
		});
	</script>
@endsection