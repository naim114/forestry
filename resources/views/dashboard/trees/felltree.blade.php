@extends('layouts.app')

@section('page-title', 'Fell Tree')

@section('content')
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Fell Tree
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>TreeNum</th>
                        <th>Species Groups</th>
                        <th>Diameter</th>
                        <th>Coordinate</th>
                        <th>Felling Direction</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($trees as $tree)
                        <tr>
                            <td>{{ $tree->TreeNum }}</td>
                            <td>{{ $tree->species_groups }}</td>
                            <td>{{ $tree->diameter_dbh_cm }}</td>
                            <td>{{ '(' . $tree->x . ' , ' . $tree->y . ')' }}</td>
                            <td>{{ $tree->cut_angle }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
