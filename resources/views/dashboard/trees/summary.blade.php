@extends('layouts.app')

@section('page-title', 'Stand Table Summary')

@section('content')
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Stand Table
        </div>
        <div class="card-body">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Species Groups</th>
                        <th>Volume (m³)</th>
                        <th>Number</th>
                        <th>Production (m³)</th>
                        <th>Damage (m³)</th>
                        <th>Growth (V30)</th>
                        <th>Production (P30)</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $row)
                        <tr>
                            <td>{{ $row['species_group'] }}</td>
                            <td>{{ $row['volume'] }}</td>
                            <td>{{ $row['number'] }}</td>
                            <td>{{ $row['production'] }}</td>
                            <td>{{ $row['damage'] }}</td>
                            <td>{{ $row['growth30'] }}</td>
                            <td>{{ $row['production30'] }}</td>
                        </tr>
                    @endforeach
                    <tr>
                        <th>TOTAL</th>
                        <th>{{ $totalVolume }}</th>
                        <th>{{ $totalCount }}</th>
                        <th>{{ $totalProduction }}</th>
                        <th>{{ $totalDamage }}</th>
                        <th>{{ $totalV30 }}</th>
                        <th>{{ $totalP30 }}</th>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
