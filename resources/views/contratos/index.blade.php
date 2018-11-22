@extends('layouts.default')

@section('content')

	<section class="container-fluid">
        @if (session('mensagem'))
            <div class="col-md-12">
                <div class="alert alert-{{ session('class') }}">
                    <p>{!! session('mensagem') !!}</p>
                </div>
            </div>
		@endif
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-2">
                    <div class="contrato-item">
                        <a href="{{action('ContratosController@adicionar_form')}}" class="contrato-item--content">
                            <span>
                                criar<br>
                                novo<br>
                                contrato
                            </span>
                        </a>    
                    </div>
                </div>
                
                @foreach ($contratos as $contrato )
                    <div class="col-md-2">
                        <div class="contrato-item">
                            <div href="javascript:void" class="contrato-item--content">
                                <span>
                                    {{$contrato->nome}}
                                </span>
                            </div>
                            <div class="clausulas-item--header_action">
                                <a class="action-deletar" href="{{ action('ContratosController@remover', $contrato->id ) }}" data-id="{{ $contrato->id }}">
                                    <i class="fa fa-trash-o" aria-hidden="true"></i>
                                </a>
                                <a class="action-editar" href="{{ action('ContratosController@editar', $contrato->id ) }}" data-id="{{ $contrato->id }}">
                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
        </div>
	</section>
@endsection