                <div class="row">
                    <?php $rel = $data_view['rel']; ?>
                    <?php $clausulas = $data_view['clausulas']; ?>
                    @foreach ($data_view['categorias'] as $cat )
                        <div class="col-md-12">
                            <div class="clausulas-painel">
                                <div class="clausulas-painel--header">
                                    <h2>{{ $cat['nome'] }}</h2>
                                </div>
                                <div class="clausulas-painel--content">
                                    <?php $cat_id = (int) $cat['id']; ?>
                                    @if ( !empty( $rel[$cat_id] ))
                                        @foreach ($rel[$cat_id] as $c)
                                           @include('clausulas.list-item')
                                        @endforeach
                                    @endif
                                </div>
                            </div>	
                        </div>
                    @endforeach
                </div>