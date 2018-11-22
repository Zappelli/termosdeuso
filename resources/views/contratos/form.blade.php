@extends('layouts.default')

@section('content')
    <div class="container-fluid">

        <section class="accordion-painel">
            <div class="accordion-header">
                Início
                <i class="arrow"></i>
            </div>
            <div class="accordion-content">
                @include('contratos.admin._inicio')
            </div>
        </section>

        <section class="accordion-painel">
            <div class="accordion-header">
                Quem
                <i class="arrow"></i>
            </div>
            <div class="accordion-content">
                @include('contratos.admin._quem')
            </div>
        </section>

        <section class="accordion-painel">
            <div class="accordion-header">
                O Que
                <i class="arrow"></i>
            </div>
            <div class="accordion-content">
                @include('contratos.admin._o-que')
            </div>
        </section>

    </div>

@endsection
@section('scripts')
	<script type="text/javascript" src="/js/jquery-ui.min.js" charset="utf-8"></script>
	<script type="text/javascript" src="/js/contrato.build.js" charset="utf-8"></script>
@endsection