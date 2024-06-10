@extends('layouts.app')

@section('page-title', 'Summary Overall')

@section('content')
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Summary Table
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
                            <td>{{ $row['volume'] / 100 }}</td>
                            <td>{{ $row['number'] / 100 }}</td>
                            <td>{{ $row['production'] / 100 }}</td>
                            <td>{{ $row['damage'] / 100 }}</td>
                            <td>{{ $row['growth30'] / 100 }}</td>
                            <td>{{ $row['production30'] / 100 }}</td>
                        </tr>
                    @endforeach
                    <tr>
                        <th>TOTAL</th>
                        <th>{{ $totalVolume / 100 }}</th>
                        <th>{{ $totalCount / 100 }}</th>
                        <th>{{ $totalProduction / 100 }}</th>
                        <th>{{ $totalDamage / 100 }}</th>
                        <th>{{ $totalV30 / 100 }}</th>
                        <th>{{ $totalP30 / 100 }}</th>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
