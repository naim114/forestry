@extends('layouts.app')

@section('page-title', 'Tree Distribution')

@section('content')
    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Tree Distribution Plot Graph
        </div>
        <div class="card-body">
            <div id="perha" style="width:100%; height:1000px"></div>
        </div>
    </div>

    {{-- <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Tree Distribution Plot Graph
        </div>
        <div class="card-body">
            <canvas id="perha" style="max-width:100%; height:100%"></canvas>
        </div>
    </div> --}}
@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Data points from your backend (replace this with your actual data)
            var dataPoints = {!! $dataPoints !!};

            // Extracting x, y, and color information
            var xValues = dataPoints.map(point => point.x);
            var yValues = dataPoints.map(point => point.y);
            var colors = dataPoints.map(point => {
                if (point.status === 'CUT') {
                    return 'red';
                } else if (point.status === 'VICTIM') {
                    return 'yellow';
                } else {
                    return 'green';
                }
            });

            var trace = {
                x: xValues,
                y: yValues,
                mode: 'markers',
                marker: {
                    size: 5,
                    color: colors
                },
                text: dataPoints.map(point => `(${point.x}, ${point.y}) ${point.id || ''}`)
            };

            var layout = {
                xaxis: {
                    range: [0, 1000]
                },
                yaxis: {
                    range: [0, 1000]
                },
                margin: {
                    t: 0
                }
            };

            Plotly.newPlot('perha', [trace], layout);

            // Adding zoom and pan functionalities
            var myPlot = document.getElementById('perha');
            myPlot.on('plotly_relayout', function(eventdata) {
                console.log('Zoom or Pan occurred');
            });
        });
    </script>
@endpush
