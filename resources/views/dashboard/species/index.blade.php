@extends('layouts.app')

@section('page-title', 'Species')

@section('content')
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Species Table
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>Code</th>
                        <th>Name</th>
                        <th>Species Group</th>
                        <th>Roy Class</th>
                        <th>Comm Gr</th>
                        <th>Dip</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Code</th>
                        <th>Name</th>
                        <th>Species Group</th>
                        <th>Roy Class</th>
                        <th>Comm Gr</th>
                        <th>Dip</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($species as $s)
                        <tr>
                            <td>{{ $s->code }}</td>
                            <td>{{ $s->name }}</td>
                            <td>{{ $s->speciesGroup->name }}</td>
                            <td>{{ $s->roy_class }}</td>
                            <td>{{ $s->comm_gr }}</td>
                            <td>{{ $s->dip }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop
