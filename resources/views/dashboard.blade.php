@extends('layouts.front')

@section('content')

<div class="row">
    <div class="col-md-9 mt-3">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h4 class="mt-2">Visitas</h4>
                    </div>
                    <div class="col-md-6">
                        <ul class="nav nav-pills justify-content-end" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link visits active" data-toggle="pill" id="visits_today" href="#" role="tab"
                                    aria-controls="pills-home" aria-selected="true">Hoje</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link visits" data-toggle="pill" id="visits_month" href="#" role="tab"
                                    aria-controls="pills-profile" aria-selected="false">Mês</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link visits" data-toggle="pill" id="visits_year" href="#" role="tab"
                                    aria-controls="pills-contact" aria-selected="false">Ano</a>
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
    
</div>

@endsection

@push('styles')
<link rel="stylesheet" href="{{ asset('css/Chart.min.css') }}">
@endpush

@push('scripts')
<script src="{{ asset('js/Chart.min.js') }}"></script>
<script src="{{ asset('js/dashboard.js') }}"></script>
@endpush