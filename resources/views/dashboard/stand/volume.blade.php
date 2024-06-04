@extends('layouts.app')

@section('page-title', 'Volume Stand Table')

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
                        <th>Species Group</th>
                        <th></th>
                        <th>5 - 15</th>
                        <th>15 - 30</th>
                        <th>30 - 45</th>
                        <th>45 - 60</th>
                        <th>60+</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $currentGroup = '';
                        $counts = [];
                    @endphp
                    @foreach ($trees as $tree)
                        @if ($currentGroup != $tree->species_groups)
                            @if ($currentGroup != '')
                                <tr>
                                    <td></td>
                                    <td>Num</td>
                                    @foreach ($counts as $count)
                                        <td>{{ $count }}</td>
                                    @endforeach
                                </tr>
                            @endif
                            @php
                                $currentGroup = $tree->species_groups;
                                $counts = [];
                            @endphp
                            <tr>
                                <td>{{ $tree->species_groups }}</td>
                                <td>Volume</td>
                        @endif
                        <td>{{ $tree->avg_volume_perha }}</td>
                        @php
                            $counts[] = $tree->tree_count_perha;
                        @endphp
                    @endforeach
                    <tr>
                        <td></td>
                        <td>Num</td>
                        @foreach ($counts as $count)
                            <td>{{ $count }}</td>
                        @endforeach
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
