<div class="inner"> 
    <div class="tabs-painel">
        <div class="tabs-painel_header">
            <div class="center">
                <a href="#contratante" class="btn btn-tab">
                    Contratante
                </a>
                <a href="#contratado" class="btn btn-tab">
                    Contratado
                </a>
            </div>
        </div>
        <div class="tabs-painel_content">
            @include('contratos.admin._quem-contratante')
            @include('contratos.admin._quem-contratado')
        </div>
    </div>
</div>