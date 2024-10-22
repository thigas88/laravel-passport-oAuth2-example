@extends('layouts.app')

@section('content')
    <!-- breadcrumb area -->
    <div class="br-breadcrumb">
        <ul class="crumb-list">
            <li class="crumb home"><a class="br-button circle" href="/"><span class="sr-only">Página
                        inicial</span><i class="fas fa-home"></i></a></li>
            <li class="crumb" data-active="active"><i class="icon fas fa-chevron-right"></i><span>Minha conta</span>
            </li>
        </ul>
    </div>
    <!-- end breadcrumb area -->

    <!-- main content area -->
    <div class="main-content pl-sm-3 mt-4" id="main-content">

        <div class="row">
            <div class="col-md-12">
                <h2 class="mt-0">Minha Conta Institucional</h2>
            </div>

            <div class="col-md-12">
                <p>Gerencie sua conta institucional, acompanhe os serviços solicitados e assine documentos digitalmente.</p>
            </div>

            <div class="col-md-7">
                <!-- account -->
                <div>
                    <div>
                        <span class="legend">Minha conta</span>
                        <span class="br-divider my-3"></span>
                    </div>

                    <div class="row">
                        <div class="col-lg-4 col-md-6  col-sm-12">
                            <div class="br-card">
                                <div class="card-content">
                                    <div class="text-center">
                                        <span class="br-avatar mt-1" title="">
                                            <span class="content">
                                                <i class="fas fa-dollar-sign"></i>
                                            </span>
                                        </span>
                                        <div class="ml-3">
                                            <div class="text-weight-semi-bold text-up-02">Dados pessoais</div>
                                            <p class="" >Ver e alterar dados pessoais e de contato</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="br-card">
                                <div class="card-content">
                                    <div class="text-center">
                                        <span class="br-avatar mt-1" title="">
                                            <span class="content">
                                                <i class="fas fa-dollar-sign"></i>
                                            </span>
                                        </span>
                                        <div class="ml-3">
                                            <div class="text-weight-semi-bold text-up-02">Segurança da conta</div>
                                            <p>Alterar senha e analisar sessões abertas</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6  col-sm-12">
                            <div class="br-card">
                                <div class="card-content">
                                    <div class="text-center">
                                        <span class="br-avatar mt-1" title="">
                                            <span class="content">
                                                <i class="fas fa-dollar-sign"></i>
                                            </span>
                                        </span>
                                        <div class="ml-3">
                                            <div class="text-weight-semi-bold text-up-02">Privacidade</div>
                                            <p>Ver histórico de login e gerenciar autorizações de uso dos dados</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end account -->

                <!-- services -->
                <div>
                    <div>
                        <span class="legend">Serviços</span>
                        <span class="br-divider my-3"></span>
                    </div>

                    <div class="row">
                        <div class="col-md-4 col-sm-12">
                            <div class="br-card">
                                <div class="card-content">
                                    <div class="text-center">
                                        <span class="br-avatar mt-1" title="">
                                            <span class="content">
                                                <i class="fas fa-dollar-sign"></i>
                                            </span>
                                        </span>
                                        <div class="ml-3">
                                            <div class="text-weight-semi-bold text-up-02">Assina@UFVJM</div>  
                                            <p>Assine documentos digitais</p>                                          
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="br-card">
                                <div class="card-content">
                                    <div class="text-center">
                                        <span class="br-avatar mt-1" title="">
                                            <span class="content">
                                                <i class="fas fa-dollar-sign"></i>
                                            </span>
                                        </span>
                                        <div class="ml-3">
                                            <div class="text-weight-semi-bold text-up-02">Pag@UFVJM</div>
                                            <p>Realize o pagamento de guias e taxas</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="br-card">
                                <div class="card-content">
                                    <div class="text-center">
                                        <span class="br-avatar mt-1" title="">
                                            <span class="content">
                                                <i class="fas fa-dollar-sign"></i>
                                            </span>
                                        </span>
                                        <div class="ml-3">
                                            <div class="text-weight-semi-bold text-up-02">Biblioteca</div>
                                            <p>Acesse o sistema de bibliotecas Pergamum</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4 col-sm-12">
                            <div class="br-card">
                                <div class="card-content">
                                    <div class="text-center">
                                        <span class="br-avatar mt-1" title="">
                                            <span class="content">
                                                <i class="fas fa-dollar-sign"></i>
                                            </span>
                                        </span>
                                        <div class="ml-3">
                                            <div class="text-weight-semi-bold text-up-02">Dados Abertos</div>   
                                            <p>Acesse o Portal de Dados Abertos</p>                                         
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="br-card">
                                <div class="card-content">
                                    <div class="text-center">
                                        <span class="br-avatar mt-1" title="">
                                            <span class="content">
                                                <i class="fas fa-dollar-sign"></i>
                                            </span>
                                        </span>
                                        <div class="ml-3">
                                            <div class="text-weight-semi-bold text-up-02">Webmail</div>
                                            <p>Acesse seus emails e mensagens</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="br-card">
                                <div class="card-content">
                                    <div class="text-center">
                                        <span class="br-avatar mt-1" title="">
                                            <span class="content">
                                                <i class="fas fa-dollar-sign"></i>
                                            </span>
                                        </span>
                                        <div class="ml-3">
                                            <div class="text-weight-semi-bold text-up-02">Suporte GLPI</div>
                                            <p>Abra uma chamado para suporte</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- end services -->
            </div>

            <!-- notifications -->
            <div class="col-md-5">
                <div class="row">
                    <div class="col">
                        <span class="legend">Notificações</span>
                    </div>
                    <div class="col-auto">
                        <button class="br-button " type="button" aria-label="Ver todas as notificações">
                            Ver todas
                        </button>                        
                    </div>                                      
                </div>

                <div>
                    <span class="br-divider my-0"></span>
                </div>  

                <div class="row">
                    <div class="col-md-12">

                        <div class="br-list" role="list">

                            <div class="br-item" role="listitem">
                                <div class="row align-items-center">
                                    <div class="col-auto"><i class="fas fa-bell" aria-hidden="true"></i>
                                    </div>
                                    <div class="col">
                                        <p class="text-medium mb-0"><span class="text-medium">24/02/2024</span></p>
                                        <p class="text-bold  mb-0">Título da notificação aqui</p>
                                        <p>Labore nulla elit laborum nulla duis. Deserunt ad nulla commodo occaecat nulla proident ea proident aliquip dolore sunt nulla.</p>
                                    </div>
                                    <div class="col-auto">
                                        <button class="br-button circle" type="button" aria-label="Interagir com item">
                                            <i class="fas fa-chevron-right" aria-hidden="true"></i>
                                        </button>
                                        
                                    </div>
                                </div>
                            </div>

                            <span class="br-divider"></span>

                            <div class="br-item" role="listitem">
                                <div class="row align-items-center">
                                    <div class="col-auto"><i class="fas fa-bell" aria-hidden="true"></i>
                                    </div>
                                    <div class="col">
                                        <p class="text-medium mb-0"><span class="text-medium">24/02/2024</span></p>
                                        <p class="text-bold  mb-0">Título da notificação aqui</p>
                                        <p>Labore nulla elit laborum nulla duis. Deserunt ad nulla commodo occaecat nulla proident ea proident aliquip dolore sunt nulla.</p>
                                    </div>
                                    <div class="col-auto">
                                        <button class="br-button circle" type="button" aria-label="Interagir com item">
                                            <i class="fas fa-chevron-right" aria-hidden="true"></i>
                                        </button>
                                        
                                    </div>
                                </div>
                            </div>

                            <span class="br-divider"></span>

                            <div class="br-item" role="listitem">
                                <div class="row align-items-center">
                                    <div class="col-auto"><i class="fas fa-bell" aria-hidden="true"></i>
                                    </div>
                                    <div class="col">
                                        <p class="text-medium mb-0"><span class="text-medium">24/02/2024</span></p>
                                        <p class="text-bold  mb-0">Título da notificação aqui</p>
                                        <p>Labore nulla elit laborum nulla duis. Deserunt ad nulla commodo occaecat nulla proident ea proident aliquip dolore sunt nulla.</p>
                                    </div>
                                    <div class="col-auto">
                                        <button class="br-button circle" type="button" aria-label="Interagir com item">
                                            <i class="fas fa-chevron-right" aria-hidden="true"></i>
                                        </button>
                                        
                                    </div>
                                </div>
                            </div>

                            <span class="br-divider"></span>


                        </div>

                    </div>
                </div>
            </div>
            <!-- end notifications -->


        </div>
    </div>
    <!-- end main content area -->
@endsection
