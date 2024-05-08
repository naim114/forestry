@extends('layouts.app')

@section('page-title', 'Trees in Forest')

@section('content')
    <a class="btn btn-primary mb-4" href="{{ route('trees.view.add') }}">+ Add Tree</a>

    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Trees in Forest
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>BlockX</th>
                        <th>BlockY</th>
                        <th>x</th>
                        <th>y</th>
                        <th>TreeNum</th>
                        <th>species</th>
                        <th>species_groups</th>
                        <th>diameter_dbh_cm</th>
                        <th>diameter_class</th>
                        <th>stem_height_m</th>
                        <th>volume_m3</th>
                        <th>Status</th>
                        <th>Created at</th>
                        <th>Edited at</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>id</th>
                        <th>BlockX</th>
                        <th>BlockY</th>
                        <th>x</th>
                        <th>y</th>
                        <th>TreeNum</th>
                        <th>species</th>
                        <th>species_groups</th>
                        <th>diameter_dbh_cm</th>
                        <th>diameter_class</th>
                        <th>stem_height_m</th>
                        <th>volume_m3</th>
                        <th>Status</th>
                        <th>Created at</th>
                        <th>Edited at</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($trees as $tree)
                        <tr>
                            <td>{{ $tree->id }}</td>
                            <td>{{ $tree->BlockX }}</td>
                            <td>{{ $tree->BlockY }}</td>
                            <td>{{ $tree->x }}</td>
                            <td>{{ $tree->y }}</td>
                            <td>{{ $tree->TreeNum }}</td>
                            <td>{{ $tree->species }}</td>
                            <td>{{ $tree->species_groups }}</td>
                            <td>{{ $tree->diameter_dbh_cm }}</td>
                            <td>{{ $tree->diameter_class }}</td>
                            <td>{{ $tree->stem_height_m }}</td>
                            <td>{{ $tree->volume_m3 }}</td>
                            <td>{{ $tree->status }}</td>
                            <td>{{ $tree->created_at }}</td>
                            <td>{{ $tree->updated_at }}</td>
                            <td>
                                <a class="btn btn-primary mb-2" href="{{ route('trees.view.update') }}">Edit</a>
                                <a class="btn btn-danger" href="{{ route('trees.view.delete') }}">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="mt-3">
                {{ $trees->links() }}
            </div>
        </div>
    </div>
@endsection
