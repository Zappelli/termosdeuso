@extends('layouts.default')



@section('content')
	<section class="container-fluid padding">
		<div class="title">
			<h1>Clausulas</h1>
			<div class="title-action">
				<a href="{{action('ClausulasController@adicionar_form')}}">
					<i class="fa fa-plus" aria-hidden="true"></i>
				</a>
			</div>
		</div>
		@if (session('mensagem'))
			<div class="alert alert-{{session('class') }}">
				<p>{!! session('mensagem') !!}</p>
			</div>
		@endif
		<div class="clausulas-container">
			@include('clausulas.list')
		</div>		
	</section>
@endsection