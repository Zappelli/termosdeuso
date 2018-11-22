<div class="clausulas-item clausula">
  <div class="clausulas-item--header">
    <h3>{{ ($clausulas[$c]['nome']) }}</h3>
    <div class="clausulas-item--header_action">
      @if (!isset($contrato))
        <a class="action-deletar" href="{{ action('ClausulasController@remover', $c) }}" data-id="{{ $c }}">
            <i class="fa fa-trash-o" aria-hidden="true"></i>
        </a>
        <a class="action-editar" href="{{ action('ClausulasController@editar', $c) }}" data-id="{{ $c }}">
            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
        </a>
      @endif
      <a class="action-arrow">
        <i class="fa fa-chevron-down" aria-hidden="true"></i>
      </a>
    </div>
  </div>
  <div class="clausulas-item--content">
    {!! $clausulas[$c]['descricao'] !!} 
    @if (isset($contrato))
        <input type="hidden" name="clausulas[{{ $c }}]" />
    @endif
  </div>
</div>