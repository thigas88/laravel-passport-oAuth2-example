@extends('layouts.app')

@section('content')

<!-- breadcrumb area -->
<div class="br-breadcrumb">
    <ul class="crumb-list">
        <li class="crumb home"><a class="br-button circle" href="/"><span class="sr-only">Página
                    inicial</span><i class="fas fa-home"></i></a></li>
        <li class="crumb" data-active="active"><i class="icon fas fa-chevron-right"></i>
            <a href="/home"><span>Minha conta</span></a>
        </li>
        <li class="crumb" data-active="active"><i class="icon fas fa-chevron-right"></i><span>Developers</span>
        </li>
    </ul>
</div>
<!-- end breadcrumb area -->

@if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
@endif

<!-- main content area -->
<div class="main-content pl-sm-3 mt-4" id="main-content">

    <div class="row">
        <div class="col-md-12">
            <h2 class="mt-0">Aplicativos registrados</h2>
        </div>
        <div class="col-md-12">
            <p>Gerencie sua conta institucional, acompanhe os serviços solicitados e assine documentos digitalmente.</p>
        </div>

        <div class="col-md-12">
            {{-- <counter></counter> --}}
            <passport-clients></passport-clients>
            {{-- <passport-authorized-clients></passport-authorized-clients> --}}
            {{-- <passport-personal-access-tokens></passport-personal-access-tokens> --}}
        </div>

    </div>
</div>

@endsection
