@extends('layouts.app')

@section('content')

<div class="row">

    <div class="col mb-5">
        <div class="br-breadcrumb">
            <ul class="crumb-list">
                <li class="crumb home"><a class="br-button circle" href="/"><span
                            class="sr-only">Página inicial</span><i class="fas fa-home"></i></a></li>
                <li class="crumb" data-active="active"><i
                        class="icon fas fa-chevron-right"></i><span>Autenticar</span>
                </li>
            </ul>
        </div>

        <div class="main-content pl-sm-3 mt-4" id="main-content">
            <div class="row">

                <div class="col-sm">
                    <img aria-hidden="true" class="hidden mt-10 w-full dark:block"
                         src="{{ asset('img/icone-home.jpg')}}" alt="Login"/>
                </div>

                <div class="col-sm">

                    <div class="w-full">

                        <h2>Aceso a Conta Institucional</h2>

                        @if ($errors->any())

                            <div class="br-message danger col-md-8 " role="alert">
                                <div class="icon"><i class="fas fa-times-circle fa-lg" aria-hidden="true"></i>
                                </div>
                                <div class="content">
                                    <span class="message-title">{{ __('Whoops! Something went wrong.') }}</span>
                                    <div class="message-body">
                                        <ul class="mt-3 text-sm text-red-600 list-disc list-inside">
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                                <div class="close">
                                    <button class="br-button circle small" type="button" aria-label="Fechar"><i
                                            class="fas fa-times" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>

                        @endif

                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <fieldset>
                                <div class="row">
                                    <div class="col-md-8 mb-3">
                                        <div class="br-input">
                                            <label for="username">{{ __('Conta Institucional') }}</label>
                                            <div class="input-group">
                                                <div class="input-icon">
                                                    <i class="fas fa-user-tie" aria-hidden="true"></i>
                                                </div>
                                                <input id="username" type="text" required
                                                       placeholder="Placeholder" name="username"
                                                       value="{{ old('username') }}"/>
                                            </div>
                                            <p>Informe seu login institucional</p>
                                        </div>
                                    </div>

                                    <div class="col-md-8 mb-3">
                                        <div class="br-input input-button">
                                            <label for="password">{{ __('Password') }}</label>
                                            <input id="password" required type="password"
                                                   placeholder="Digite sua senha"
                                                   name="password" required autocomplete="current-password"/>
                                            <button class="br-button" type="button" aria-label="Mostrar senha"><i
                                                    class="fas fa-eye" aria-hidden="true"></i>
                                            </button>
                                            <p>Informe sua senha institucional</p>
                                        </div>

                                    </div>

                                    <div class="col-md-8 mb-5 text-right">
                                        <a class="" href="https://sistemas.ufvjm.edu.br/recuperar-senha"
                                           target="_blank">
                                            Esqueceu sua senha?
                                        </a>
                                    </div>

                                    <div class="col-md-8 mb-3">

                                        @if(false)
                                            <label class="block mt-4 text-sm">
                                                <input type="checkbox" class="form-checkbox" name="remember"> <span
                                                    class="ml-1 text-gray-700 dark:text-gray-400">{{ __('Remember me') }}</span>
                                            </label>
                                        @endif

                                        <!-- You should use a button here, as the anchor is only used for the example  -->
                                        <button class="br-button block primary" type="submit">
                                            {{ __('Login') }}
                                        </button>

                                        {{--                                            <div class=" block m-2 text-center">--}}
                                        {{--                                                ou--}}
                                        {{--                                            </div>--}}

                                        {{--                                            <div class="">--}}
                                        {{--                                                <button class="br-sign-in block" type="button">Entrar com&nbsp;<img--}}
                                        {{--                                                        src="https://www.gov.br/++theme++padrao_govbr/img/govbr-colorido-b.png"--}}
                                        {{--                                                        alt="gov.br"/>--}}
                                        {{--                                                </button>--}}
                                        {{--                                            </div>--}}
                                    </div>
                                </div>


                                <div class="col-md-8 mt-5">
                                    <div class="text-center text-weight-bold">
                                        <a class="" href="{{ route('register') }}">
                                            {{ __('Primeiro Acesso?') }}
                                        </a>
                                    </div>
                                </div>

                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection
