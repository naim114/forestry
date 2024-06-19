@extends('layouts.app')

@section('page-title', 'Welcome to Forestry System')

@section('content')
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-chart-area me-1"></i>
            Analysis Recommendation Chart
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-xl-9">
                    <canvas id="recChart" style="max-width:100%; height:700px"></canvas>
                </div>
                <div class="col-xl-3">
                    <p>Recommendation for cutting regime: {{ $closestProdProd30['cutRegime'] }} cm</p>
                </div>
            </div>
        </div>
    </div>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-chart-area me-1"></i>
            Trees by Species
        </div>
        <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas>
        </div>
    </div>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-chart-bar me-1"></i>
            Species by Species Group
        </div>
        <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
    </div>
@stop

@push('scripts')
    <script>
        // Pass PHP array to JavaScript
        var dataPoints = @json($dataPoints);
        var chartData = @json($speciesData);
        var treeData = @json($treeData);
    </script>
@endpush
