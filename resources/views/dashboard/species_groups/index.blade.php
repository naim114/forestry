@extends('layouts.app')

@section('page-title', 'Species Group')

@section('content')
    <a class="btn btn-primary mb-4" href="{{ route('species_groups.view.add') }}">+ Add Species Group</a>

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
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>Created at</th>
                        <th>Edited at</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($species_groups as $sg)
                        <tr>
                            <td>{{ $sg->name }}</td>
                            <td>{{ $sg->created_at }}</td>
                            <td>{{ $sg->updated_at }}</td>
                            <td>
                                <a class="btn btn-primary"
                                    href="{{ route('species_groups.view.update', ['id' => $sg->id]) }}">Edit</a>
                                <a class="btn btn-danger"
                                    href="{{ route('species_groups.view.delete', ['id' => $sg->id]) }}">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop
