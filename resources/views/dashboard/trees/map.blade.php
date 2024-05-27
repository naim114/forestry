@extends('layouts.app')

@section('page-title', 'Tree Distribution')

@section('content')
    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Tree Distribution Plot Graph
        </div>
        <div class="card-body">
            <canvas id="perha" style="max-width:100%; height:100%"></canvas>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-zoom@1.1.1/dist/chartjs-plugin-zoom.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            new Chart("perha", {
                type: "scatter",
                data: {
                    datasets: [{
                        pointRadius: 2,
                        pointBackgroundColor: function(context) {
                            var status = context.dataset.data[context.dataIndex].status;
                            if (status === 'CUT') {
                                return 'red';
                            } else if (status === 'VICTIM') {
                                return 'yellow';
                            } else {
                                return 'green';
                            }
                        },
                        data: {!! $dataPoints !!}
                    }, ]
                },
                options: {
                    legend: {
                        display: false
                    },
                    scales: {
                        xAxes: [{
                            ticks: {
                                min: 0,
                                max: 1000
                            }
                        }],
                        yAxes: [{
                            ticks: {
                                min: 0,
                                max: 1000
                            }
                        }]
                    },
                    tooltips: {
                        callbacks: {
                            label: function(tooltipItem, data) {
                                var dataset = data.datasets[tooltipItem.datasetIndex];
                                var dataPoint = dataset.data[tooltipItem.index];
                                var id = dataPoint.id || '';
                                var x = dataPoint.x || '';
                                var y = dataPoint.y || '';
                                return '(' + x + ', ' + y + ') ' + id;
                            }
                        }
                    },
                    plugins: {
                        zoom: {
                            zoom: {
                                enabled: true,
                                mode: 'xy', // You can change to 'x' or 'y' if you want to restrict the zooming direction
                                speed: 0.1
                            },
                            pan: {
                                enabled: true,
                                mode: 'xy', // You can change to 'x' or 'y' if you want to restrict the panning direction
                                speed: 1
                            }
                        }
                    }
                }
            });
        });
    </script>
@endpush
