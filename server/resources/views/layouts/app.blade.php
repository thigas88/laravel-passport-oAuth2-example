<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <!--  <script src="{{ asset('js/app.js') }}" defer></script> -->

    <!-- Fonts -->
     <!-- <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">  -->

    <!-- Font Rawline-->
    <link rel="stylesheet"
        href="/fonts/rawline/css/rawline.css" />
       
    <!-- <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700,800,900&amp;display=swap" />  -->

    <!-- Fontawesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" />

    <!--Styles-->
    @vite(['resources/css/app.css', 'node_modules/@govbr-ds/core/dist/core.min.css', 'resources/css/custom.css'])

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" 
    crossorigin="anonymous"></script>
    
    <style>
        #avatar-dropdown-trigger {
            height: auto;
            padding: var(--spacing-scale-base);
        }
    </style>

    @vite(['node_modules/@govbr-ds/core/dist/core.min.js', 'node_modules/@govbr-ds/core/dist/core-init.js', 
    'resources/js/app.js', 'resources/js/custom.js'])
</head>

<body>
    <div id="app">

        <div class="template-base">

            <nav class="br-skiplink">
                <a class="br-item" href="#main-content" accesskey="1">Ir para o conteúdo (1/4) <span
                        class="br-tag text ml-1">1</span></a>
                <a class="br-item" href="#header-navigation" accesskey="2">Ir para o menu (2/4) <span
                        class="br-tag text ml-1">2</span></a>
                <a class="br-item" href="#main-searchbox" accesskey="3">Ir para a busca (3/4) <span
                        class="br-tag text ml-1">3</span></a>
                <a class="br-item" href="#footer" accesskey="4">Ir para o rodapé (4/4) <span
                        class="br-tag text ml-1">4</span></a>
            </nav>

            <header class="br-header mb-4" id="header" data-sticky="data-sticky">
                <div class="container-lg">
                    <div class="header-top">
                        <div class="header-logo">
                            <a href="/">
                                <img src="{{ asset('img/logo-ufvjm-horizontal.png') }}" alt="logo" />
                            </a> <span class="br-divider vertical"></span>
                            <div class="header-sign">Universidade Federal dos Vales do Jequitinhonha e Mucuri</div>
                        </div>
                        <div class="header-actions">
                            <div class="header-links dropdown">
                                <button class="br-button circle small" type="button" data-toggle="dropdown"
                                    aria-label="Abrir Acesso Rápido"><i class="fas fa-ellipsis-v"
                                        aria-hidden="true"></i>
                                </button>
                                <div class="br-list">
                                    <div class="header">
                                        <div class="title">Acesso Rápido</div>
                                    </div>
                                    <a class="br-item" target="_blank" href="https://portal.ufvjm.edu.br">Portal
                                        Institucional</a>

                                    <!-- Language toggler -->
                                    {{-- <ul>
                                        <li>
                                            <button title="Alterar idioma da plataforma" class=""
                                                aria-label="Trocar idioma" aria-haspopup="true">
                                                <div id="header" class="flex items-center mb-2">
                                                    <span
                                                        class="flag-icon flag-icon-{{ Config::get('languages')[App::getLocale()]['flag-icon'] }}"></span>
                                                    {{ Config::get('languages')[App::getLocale()]['display'] }}
                                                </div>
                                            </button>
                                            <ul aria-label="submenu">

                                                @foreach (Config::get('languages') as $lang => $language)
                                                    @if ($lang != App::getLocale())
                                                        <li class="flex">
                                                            <a class="" href="{{ route('lang.switch', $lang) }}">
                                                                <span
                                                                    class="flag-icon flag-icon-{{ $language['flag-icon'] }}"></span>
                                                                {{ $language['display'] }}
                                                            </a>
                                                        </li>
                                                    @endif
                                                @endforeach

                                                <div class="border-t border-gray-100"></div>

                                            </ul>
                                        </li>
                                    </ul> --}}

                                </div>

                            </div>
                            <span class="br-divider vertical mx-half mx-sm-1"></span>
                            <div class="header-functions dropdown">
                                <button class="br-button circle small" type="button" data-toggle="dropdown"
                                    aria-label="Abrir Funcionalidades do Sistema">
                                    <i class="fas fa-th" aria-hidden="true"></i>
                                </button>
                                <div class="br-list">
                                    <div class="header">
                                        <div class="title">Outras opções</div>
                                    </div>

                                    <div class="br-item">
                                        <a href="https://glpi.ufvjm.edu.br/plugins/formcreator/front/formdisplay.php?id=106"
                                            target="_blank" class="br-button circle small" type="button"
                                            aria-label="Obter suporte"><i class="fas fa-headset"
                                                aria-hidden="true"></i><span class="text">Obter suporte</span>
                                        </a>
                                    </div>

                                </div>
                            </div>

                            <div class="header-login">
                                @auth
                                    <div class="header-avatar">
                                        <div>
                                            <button class="br-sign-in" type="button" id="avatar-dropdown-trigger"
                                                data-toggle="dropdown" data-target="avatar-menu" aria-label="Menu pessoal">
                                                <span class="br-avatar" title="{{ Auth::user()->nome }}">
                                                    <span class="content">
                                                        <img alt="avatar" src="{{ Auth::user()->avatarUrl() }}"
                                                            alt="{{ Auth::user()->nome }}" aria-hidden="true" />
                                                    </span>
                                                </span>
                                                <span class="ml-2 text-gray-80 text-weight-regular">
                                                    Olá, <span class="text-weight-semi-bold">
                                                        {{ Auth::user()->firstName() }}
                                                    </span>
                                                </span>
                                                <i class="fas fa-caret-down" aria-hidden="true"></i>
                                            </button>
                                            <div class="br-list" id="avatar-menu" hidden="hidden" tabindex="-1">
                                                <a class="br-item" href="/user/profile">Dados pessoais</a>
                                                <form method="POST" action="{{ route('logout') }}">
                                                    @csrf
                                                    <a class="br-item" href="{{ route('logout') }}"
                                                        onclick="event.preventDefault(); this.closest('form').submit();">
                                                        {{ __('Logout') }}
                                                    </a>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                @else
                                    <div class="header-sign-in">
                                        <a href="{{ route('login') }}" class="br-sign-in small" type="button"
                                            data-trigger="login"><i class="fas fa-user" aria-hidden="true"></i><span
                                                class="d-sm-inline">Entrar</span></a>
                                    </div>
                                    @endif


                            </div>
                        </div>
                    </div>
                    <div class="header-bottom">
                        <div class="header-menu">
                            <div class="header-menu-trigger" id="header-navigation">
                                <button class="br-button small circle" type="button" aria-label="Menu"
                                    data-toggle="menu" data-target="#main-navigation" id="navigation"><i
                                        class="fas fa-bars" aria-hidden="true"></i>
                                </button>
                            </div>
                            <div class="header-info">
                                <div class="header-title">{{ env('APP_NAME') }}</div>
                                <div class="header-subtitle">{{ env('APP_DESCRIPTION') }}</div>
                            </div>
                        </div>

                    </div>
                </div>
            </header>

            <main class="d-flex flex-fill mb-5" id="main">
                <div class="container-lg d-flex">
                    
                    <div class="container">
                        <div class="row">
                            <div class="col mb-5">
                                @include('layouts.flash-messages')
                                <!-- Main view  -->
                                @yield('content')
                            </div>
                        </div>
                    </div>

                    @stack('modals')

                </div>
            </main>

            <!-- Footer -->
            @include('layouts.footer')

        </div>
    </div>

    @section('scripts')
    <!-- @stack('scripts') -->

    @show    
    
    <script >
        // Inicializando os tooltips
        // window.document
        //     .querySelectorAll('[data-tooltip-text]')
        //     .forEach((TooltipExample) => {
        //         const texttooltip = TooltipExample.getAttribute('data-tooltip-text')
        //         const config = {
        //             activator: TooltipExample,
        //             place: 'top',
        //             textTooltip: texttooltip,
        //         }
    
        //         TooltipExampleList.push(new core.Tooltip(config))
        //     })
            
        // Inicializando os tooltips
        const tooltipList = []
        for (const brTooltip of window.document.querySelectorAll('.br-tooltip:not(.utilities)')) {
            tooltipList.push(new core.BRTooltip('br-tooltip', brTooltip))
        }
    </script>
    
</body>

</html>
