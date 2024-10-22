
@extends('layouts.app')

@section('content')

<style>
    .passport-authorize .container {
        margin-top: 30px;
    }

    .passport-authorize .scopes {
        margin-top: 20px;
    }

    .passport-authorize .buttons {
        margin-top: 25px;
        text-align: center;
    }

    .passport-authorize .btn {
        width: 125px;
    }

    .passport-authorize .btn-approve {
        margin-right: 15px;
    }

    .passport-authorize form {
        display: inline;
    }
</style>


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

        <div class="main-content passport-authorize" pl-sm-3 mt-4" id="main-content">
            <div class="row justify-content-center">

                <div class="col-md-6">
                    <div class="br-card">
                        <div class="card-header">
                            <h2>Autorização de acesso</h2>
                        </div>
                        <div class="card-content">
                            <!-- Introduction -->
                            <p><strong>{{ $client->name }}</strong> está solicitnado permissão para acessar sua Conta Institucional.</p>
    
                            <!-- Scope List -->
                            @if (count($scopes) > 0)
                                <div class="scopes">
                                    <p><strong>A aplicação terá acesso à:</strong></p>
    
                                    <ul>
                                        @foreach ($scopes as $scope)
                                            <li>{{ $scope->description }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
    
                            <div class="buttons">
                                <!-- Authorize Button -->
                                <form method="post" action="{{ route('passport.authorizations.approve') }}">
                                    @csrf
    
                                    <input type="hidden" name="state" value="{{ $request->state }}">
                                    <input type="hidden" name="client_id" value="{{ $client->id }}">
                                    <input type="hidden" name="auth_token" value="{{ $authToken }}">
                                    <button type="submit" class="br-button primary">Autorizar</button>
                                </form>
    
                                <!-- Cancel Button -->
                                <form method="post" action="{{ route('passport.authorizations.deny') }}">
                                    @csrf
                                    @method('DELETE')
    
                                    <input type="hidden" name="state" value="{{ $request->state }}">
                                    <input type="hidden" name="client_id" value="{{ $client->id }}">
                                    <input type="hidden" name="auth_token" value="{{ $authToken }}">
                                    <button class="br-button secondady">Cancelar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        
    </div>

</div>

@endsection
