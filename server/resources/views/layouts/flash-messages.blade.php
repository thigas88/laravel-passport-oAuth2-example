<div class="info-messages">
    @if ($message = Session::get('success'))
        <div class="br-message success" role="alert">
            <div class="icon"><i class="fa fa-check-circle fa-lg" aria-hidden="true"></i>
            </div>
            <div class="content">
                <div class="message-title">Sucesso!</div>
                <div class="message-body">{{ $message }}</div>
            </div>
            <div class="close">
                <button class="br-button circle small" type="button" aria-label="Fechar">
                    <i class="fas fa-times" aria-hidden="true"></i>
                </button>
            </div>
        </div>
    @endif


    @if ($message = Session::get('error'))
        <div class="br-message danger" role="alert">
            <div class="icon"><i class="fa fa-exclamation-circle fa-lg" aria-hidden="true"></i>
            </div>
            <div class="content">
                <div class="message-title">Erro!</div>
                <div class="message-body">{{ $message }}</div>
            </div>
            <div class="close">
                <button class="br-button circle small" type="button" aria-label="Fechar">
                    <i class="fas fa-times" aria-hidden="true"></i>
                </button>
            </div>
        </div>
    @endif


    @if ($message = Session::get('warning'))
        <div class="br-message warning" role="alert">
            <div class="icon"><i class="fa fa-exclamation-triangle fa-lg" aria-hidden="true"></i>
            </div>
            <div class="content">
                <div class="message-title">Atenção!</div>
                <div class="message-body">{{ $message }}</div>
            </div>
            <div class="close">
                <button class="br-button circle small" type="button" aria-label="Fechar">
                    <i class="fas fa-times" aria-hidden="true"></i>
                </button>
            </div>
        </div>
    @endif


    @if ($message = Session::get('info'))
        <div class="br-message info" role="alert">
            <div class="icon"><i class="fa fa-info-circle fa-lg" aria-hidden="true"></i>
            </div>
            <div class="content">
                <div class="message-title">Informação:</div>
                <div class="message-body">{{ $message }}</div>
            </div>
            <div class="close">
                <button class="br-button circle small" type="button" aria-label="Fechar">
                    <i class="fas fa-times" aria-hidden="true"></i>
                </button>
            </div>
        </div>
    @endif


    @if (count($errors) > 0)
        <div class="br-message warning" role="alert">
            <div class="icon"><i class="fa fa-exclamation-triangle fa-lg" aria-hidden="true"></i>
            </div>
            <div class="content">
                <div class="message-title">Por favor, verifique os erros abaixo</div>
                <div class="message-body">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{!! $error !!}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="close">
                <button class="br-button circle small" type="button" aria-label="Fechar">
                    <i class="fas fa-times" aria-hidden="true"></i>
                </button>
            </div>
        </div>
    @endif
</div>