@extends('layouts.app')

@section('page-title', 'Species Group')

@section('content')
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Species Group Table
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Created at</th>
                        <th>Edited at</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>Created at</th>
                        <th>Edited at</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($species_groups as $sg)
                        <tr>
                            <td>{{ $sg->name }}</td>
                            <td>{{ $sg->created_at }}</td>
                            <td>{{ $sg->updated_at }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop
