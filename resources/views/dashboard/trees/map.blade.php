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
@endsection

@push('scripts')
    <script src="https://cdn.plot.ly/plotly-2.32.0.min.js" charset="utf-8"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var dataPoints = {!! $dataPoints !!};
            var triangles = {!! $triangles !!};

            var cutData = dataPoints.filter(point => point.status === 'CUT');
            var victimStemData = dataPoints.filter(point => point.status === 'VICTIM STEM');
            var victimCrownData = dataPoints.filter(point => point.status === 'VICTIM CROWN');
            var keepData = dataPoints.filter(point => point.status !== 'CUT' && point.status !== 'VICTIM STEM' &&
                point.status !== 'VICTIM CROWN');

            var cutTrace = {
                x: cutData.map(point => point.x),
                y: cutData.map(point => point.y),
                mode: 'markers',
                marker: {
                    size: 5,
                    color: 'red'
                },
                text: cutData.map(point => `ID: ${point.id}`),
                hoverinfo: 'text',
                name: 'CUT',
                legendgroup: 'CUT',
                showlegend: true
            };

            var victimStemTrace = {
                x: victimStemData.map(point => point.x),
                y: victimStemData.map(point => point.y),
                mode: 'markers',
                marker: {
                    size: 5,
                    color: 'orange'
                },
                text: victimStemData.map(point => `ID: ${point.id}`),
                hoverinfo: 'text',
                name: 'VICTIM STEM',
                legendgroup: 'VICTIM STEM',
                showlegend: true
            };

            var victimCrownTrace = {
                x: victimCrownData.map(point => point.x),
                y: victimCrownData.map(point => point.y),
                mode: 'markers',
                marker: {
                    size: 5,
                    color: 'yellow'
                },
                text: victimCrownData.map(point => `ID: ${point.id}`),
                hoverinfo: 'text',
                name: 'VICTIM CROWN',
                legendgroup: 'VICTIM CROWN',
                showlegend: true
            };

            var keepTrace = {
                x: keepData.map(point => point.x),
                y: keepData.map(point => point.y),
                mode: 'markers',
                marker: {
                    size: 5,
                    color: 'green'
                },
                text: keepData.map(point => `ID: ${point.id}`),
                hoverinfo: 'text',
                name: 'KEEP',
                legendgroup: 'KEEP',
                showlegend: true
            };

            var triangleTraces = triangles.map(function(triangle) {
                return {
                    x: triangle.x.concat(triangle.x[0]),
                    y: triangle.y.concat(triangle.y[0]),
                    mode: 'lines+markers',
                    line: {
                        color: 'red',
                        width: 1
                    },
                    marker: {
                        size: 1
                    },
                    hoverinfo: 'none',
                    showlegend: false
                };
            });

            var layout = {
                xaxis: {
                    range: [0, 1000],
                    title: 'X Axis',
                    scaleanchor: 'y'
                },
                yaxis: {
                    range: [0, 1000],
                    title: 'Y Axis'
                },
                margin: {
                    t: 0
                },
                hovermode: 'closest',
                autosize: true
            };

            Plotly.newPlot('perha', [cutTrace, victimStemTrace, victimCrownTrace, keepTrace, ...triangleTraces],
                layout, {
                    responsive: true
                });

            var myPlot = document.getElementById('perha');

            myPlot.on('plotly_relayout', function(eventdata) {
                console.log('Zoom or Pan event:', eventdata);
            });
        });
    </script>
@endpush
