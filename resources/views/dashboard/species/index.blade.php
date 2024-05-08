@extends('layouts.app')

@section('page-title', 'Species')

@section('content')
    <a class="btn btn-primary mb-4" href="{{ route('species.view.add') }}">+ Add Species</a>

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
                        <th>Action</th>
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
                        <th>Action</th>
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
                            <td>
                                <a class="btn btn-primary" href="{{ route('species.view.update') }}">Edit</a>
                                <a class="btn btn-danger" href="{{ route('species.view.delete') }}">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop
