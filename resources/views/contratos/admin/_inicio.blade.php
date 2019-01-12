<div class="inner">
    <form role="form" class='form form-contrato' method='post'  action="{{ $action }}" data-partial='_inicio'>
        {{ csrf_field() }}
        <div class="form-section">
            <div class="form-row">
                <label>
                    Nome do Contrato:
                </label>
                <input class='form-control' type="text" name="_nome">
                <input type='hidden' name="id" value='{{ 0 }}'>
            </div>
            <div class="form-row">
                <label class="mark-content inline">
                    <span class="mark-content__tag radio">
                        <input type="radio" name="tipo">
                        <span class="view"></span>
                    </span>
                    <span class="inline" for="tipo_reserva_1">
                        Este é um contrato de uma plataforma online de reserva de acomodações
                    </span>
                </span>
            </div>
            <div class="form-row">
                <label class="mark-content inline">
                    <span class="mark-content__tag radio">
                        <input type="radio" name="tipo">
                        <span class="view"></span>
                    </span>
                    <span class="inline" for="tipo_reserva_1">
                        Este é um contrato de uma acomodação temporária
                    </span>
                </label>
                <div class="select-content inline">
                    <select class="form-control select" name='tipo_hospedagem'>
                        <option selected disabled>Selecione uma opção</option>
                        <option value='1'>Tipo 1</option>
                        <option value='2'>Tipo 2</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="form-section">
            <div class="form-section__legend">
                <p>Utilizando os seguintes dispositivos:</p>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="form-row">
                        <label class="mark-content">
                            <span class="mark-content__tag checkbox">
                                <input type="checkbox" name="dispositivos[site]">
                                <span class="view"></span>
                            </span>
                            <span class="inline">
                                Site
                            </span>
                        </label>
                    </div>
                    <div class="form-row">
                        <label class="mark-content">
                            <span class="mark-content__tag checkbox">
                                <input type="checkbox" name="dispositivos[aplicativo]">
                                <span class="view"></span>
                            </span>
                            <span class="inline">
                                Aplicativo
                            </span>
                        </label>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-row">
                        <label class="mark-content">
                            <span class="mark-content__tag checkbox">
                                <input type="checkbox" name="dispositivos[telefone]">
                                <span class="view"></span>
                            </span>
                            <span class="inline">
                                Telefone
                            </span>
                        </label>
                    </div>
                    <div class="form-row">
                        <label class="mark-content">
                            <span class="mark-content__tag checkbox">
                                <input type="checkbox" name="dispositivos[email]">
                                <span class="view"></span>
                            </span>
                            <span class="inline">
                                E-mail
                            </span>
                        </label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-row">
                        <span class="mark-content mark-content_orther inline">
                            <span class="mark-content__tag checkbox">
                                <input type="checkbox" name="dispositivos[has_outros]">
                                <span class="view"></span>
                            </span>
                            <label>
                                Outros:
                            </label>
                        </span>
                        <div class="inline form-orther">
                            <span class="form-orther__input">
                                <input type="text" name="dispositivos[outros]" class="form-control">
                                <small>seperar dispositivos por virgulas</small>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <label class="inline">
                    Será permitido o uso comercial?
                </label>
                <label class="mark-content inline offset-left">
                    <span class="mark-content__tag radio">
                        <input type="radio" name="uso_comercial" value='1'>
                        <span class="view"></span>
                    </span>
                    <span class="inline" for="uso_comercia__s">
                        Sim
                    </span>
                </label>
                <label class="mark-content inline offset-left">
                    <span class="mark-content__tag radio">
                        <input type="radio" name="uso_comercial" value='0'>
                        <span class="view"></span>
                    </span>
                    <span class="inline" for="uso_comercia__n">
                        Não
                    </span>
                </label>
            </div>
        </div> 
        <div class='row'>
            <div class='col-md-3 pull-right'>
                <button type='submit' class='btn btn-primary'>Salvar Alterações</button>
            </div>
        </div>
    </form>
</div>