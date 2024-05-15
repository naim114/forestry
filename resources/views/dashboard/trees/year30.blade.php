@extends('layouts.app')

@section('page-title', 'Year 30')

@section('content')
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Year 30
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>Species Groups</th>
                        <th>Volume</th>
                        <th>Number</th>
                        <th>Production</th>
                        <th>Damage</th>
                        <th>Growth30</th>
                        <th>Production30</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $row)
                        <tr>
                            <td>{{ $row['group']['name'] }}</td>
                            <td>{{ $row['volume'] }}</td>
                            <td>{{ $row['number'] }}</td>
                            <td>{{ $row['production'] }}</td>
                            <td>{{ $row['damage'] }}</td>
                            <td>{{ $row['growth30'] }}</td>
                            <td>{{ $row['production30'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
