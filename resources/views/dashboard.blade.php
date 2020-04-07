@extends('layouts.front')

@section('content')

<div class="row  mt-3">
    <div class="col-md-9">
        <div class="row">
            {{-- Visitas --}}
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6">
                                <h4 class="mt-2">Visitas</h4>
                            </div>
                            <div class="col-md-6">
                                <ul class="nav nav-pills justify-content-end" id="pills-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link visits active" data-toggle="pill" id="visits_today" href="#"
                                            role="tab" aria-controls="pills-home" aria-selected="true">Hoje</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link visits" data-toggle="pill" id="visits_month" href="#"
                                            role="tab" aria-controls="pills-profile" aria-selected="false">Mês</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link visits" data-toggle="pill" id="visits_year" href="#"
                                            role="tab" aria-controls="pills-contact" aria-selected="false">Ano</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <canvas id="visits" height="72"></canvas>
                    </div>
                </div>
            </div>
            {{-- /Visitas --}}
        </div>

        <div class="row mt-3">
            {{-- Navegador --}}
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6">
                                <h4 class="mt-2">Navegador</h4>
                            </div>
                            <div class="col-md-6">
                                <ul class="nav nav-pills justify-content-end" id="pills-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link browser active" data-toggle="pill" id="browser_today"
                                            href="#" role="tab" aria-controls="pills-home" aria-selected="true">Hoje</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link browser" data-toggle="pill" id="browser_month" href="#"
                                            role="tab" aria-controls="pills-profile" aria-selected="false">Mês</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link browser" data-toggle="pill" id="browser_year" href="#"
                                            role="tab" aria-controls="pills-contact" aria-selected="false">Ano</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <canvas id="browser"></canvas>
                    </div>
                </div>
            </div>
            {{-- /Navegador --}}

            {{-- Plataforma --}}
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6">
                                <h4 class="mt-2">Plataforma</h4>
                            </div>
                            <div class="col-md-6">
                                <ul class="nav nav-pills justify-content-end" id="pills-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link platform active" data-toggle="pill" id="platform_today"
                                            href="#" role="tab" aria-controls="pills-home" aria-selected="true">Hoje</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link platform" data-toggle="pill" id="platform_month" href="#"
                                            role="tab" aria-controls="pills-profile" aria-selected="false">Mês</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link platform" data-toggle="pill" id="platform_year" href="#"
                                            role="tab" aria-controls="pills-contact" aria-selected="false">Ano</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <canvas id="platform"></canvas>
                    </div>
                </div>
            </div>
            {{-- Plataforma --}}
        </div>
    </div>

    {{-- Listas --}}
    <div class="col-md-3">
        {{-- URI --}}
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-4">
                                <h4 class="mt-2">Páginas</h4>
                            </div>
                            <div class="col-md-8">
                                <ul class="nav nav-pills justify-content-end" id="pills-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link list active" data-toggle="pill" id="uri_today" href="#"
                                            role="tab" aria-controls="pills-home" aria-selected="true">Hoje</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link list" data-toggle="pill" id="uri_month" href="#" role="tab"
                                            aria-controls="pills-profile" aria-selected="false">Mês</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link list" data-toggle="pill" id="uri_year" href="#" role="tab"
                                            aria-controls="pills-contact" aria-selected="false">Ano</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-sm table-striped" id="table_uri"></table>
                    </div>
                </div>
            </div>
        </div>
        {{-- /URI --}}

        {{-- Região --}}
        <div class="row mt-3">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-4">
                                <h4 class="mt-2">Regiões</h4>
                            </div>
                            <div class="col-md-8">
                                <ul class="nav nav-pills justify-content-end" id="pills-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link list active" data-toggle="pill" id="region_today" href="#"
                                            role="tab" aria-controls="pills-home" aria-selected="true">Hoje</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link list" data-toggle="pill" id="region_month" href="#"
                                            role="tab" aria-controls="pills-profile" aria-selected="false">Mês</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link list" data-toggle="pill" id="region_year" href="#" role="tab"
                                            aria-controls="pills-contact" aria-selected="false">Ano</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-sm table-striped" id="table_region"></table>
                    </div>
                </div>
            </div>
        </div>
        {{-- /Região --}}

        {{-- País --}}
        <div class="row mt-3">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-4">
                                <h4 class="mt-2">Países</h4>
                            </div>
                            <div class="col-md-8">
                                <ul class="nav nav-pills justify-content-end" id="pills-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link list active" data-toggle="pill" id="country_today" href="#"
                                            role="tab" aria-controls="pills-home" aria-selected="true">Hoje</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link list" data-toggle="pill" id="country_month" href="#"
                                            role="tab" aria-controls="pills-profile" aria-selected="false">Mês</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link list" data-toggle="pill" id="country_year" href="#"
                                            role="tab" aria-controls="pills-contact" aria-selected="false">Ano</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-sm table-striped" id="table_country"></table>
                    </div>
                    {{-- /País --}}
                </div>
            </div>
        </div>
        {{-- /País --}}
    </div>
    {{-- /Listas --}}
</div>

@endsection

@push('styles')
<link rel="stylesheet" href="{{ asset('css/Chart.min.css') }}">
@endpush

@push('scripts')
<script src="{{ asset('js/Chart.min.js') }}"></script>
<script src="{{ asset('js/dashboard.js') }}"></script>
@endpush