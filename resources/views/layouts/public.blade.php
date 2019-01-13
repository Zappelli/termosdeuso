
<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/public.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body class="public page">
<header id="hearde">
			<div class="container">
				<div class="menu-container">
					<nav class="menu-navegation">
						<h1>Termos e Condições</h1>
						<ul id="menu" aria-label="Menu Principal">
							<li data-menuanchor="inicio" class="active">
								<a href="#inicio" class="menu--item" title="Início" accesskey="1">
									Início
								</a>
							</li>
							<li data-menuanchor="quem">
								<a href="#quem" class="menu--item" title="Quem" accesskey="2">
									Quem
								</a>
							</li>
							<li data-menuanchor="oque">
								<a href="#oque" class="menu--item" title="O Que" accesskey="3">
									O Que
								</a>
							</li>
							<li data-menuanchor="pagamento">
								<a href="#pagamento" class="menu--item" title="Pagamento" accesskey="4">
									Pagamento
								</a>
							</li>
							<li data-menuanchor="cancelamento">
								<a href="#cancelamento" class="menu--item" title="Cancelamento" accesskey="5">
									Cancelamento
								</a>
							</li>
							<li data-menuanchor="foro">
								<a href="#foro" class="menu--item" title="Foro" accesskey="6">
									Foro
								</a>
							</li>
						</ul>
					</nav>
					<nav class="menu-accessibility" aria-label="Menu Acessibilidade">
						<ul>
							<li>
								<a href="javascript:void(0);" id="btn-font_normal" title="Tamanho Normal">
									<i class="fa fac fac-font"></i>
									<span class="hidden">Normal</span>
								</a>
							</li>
							<li>
								<a href="javascript:void(0);" id="btn-font_increase" title="Aumentar Tamanho do Texto">
									<i class="fa fac fac-font_increase"></i>
									<span class="hidden">Aumentar</span>
								</a>
							</li>
							<li>
								<a href="javascript:void(0);" id="btn-font_decrease" title="Diminuir Tamanho do Texto">
									<i class="fa fac fac-font_decrease"></i>
									<span class="hidden">Diminuir</span>
								</a>
							</li>
							<li>
								<a href="javascript:void(0);" id="btn-contrast" title="Ativar Contraste">
									<i class="fa fa-adjust" aria-hidden="true"></i>
									<span class="hidden">Contraste</span>
								</a>
							</li>
							<li>
								<a href="" id="btn-site_map" target="_blank" title="Acessar: Mapa do Site">
									<i class="fa fa-sitemap" aria-hidden="true"></i>
									<span class="hidden">Mapa do site</span>
								</a>
							</li>
							<li>
								<a href="" id="btn-site_map" target="_blank" title="Acessar: Documentação sobre Acessibilidade">
									<i class="fa fa-wheelchair" aria-hidden="true"></i>
									<span class="hidden">Acessibilidade</span>
								</a>
							</li>
						</ul>
					</nav>
				</div>
			</div>
		</header>
    <div id="app">
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>