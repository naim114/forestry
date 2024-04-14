@extends('layouts.app')

@section('page-title', 'asdasd')

@section('content')
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Trees in Forest
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
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
                @foreach ($treePerha as $i => $group)
                    <tr>
                        <th>{{ $group[0] }}</th>
                        <th>Volume</th>
                        @foreach ($group as $j => $value)
                            @if ($j > 0)
                                @php
                                    $end = $i == 0 && $j == 1 ? $value : $value + $count;
                                    $totalVolume = \App\Models\Tree::whereBetween('id', [$count, $end])->sum(
                                        'volume_m3',
                                    );
                                    $avgVolume = $totalVolume / $value;
                                @endphp
                                <th>{{ $avgVolume }}</th>
                                @php
                                    $count += $value;
                                @endphp
                            @endif
                        @endforeach
                    </tr>
                    <tr>
                        <th></th>
                        <th>Num</th>
                        @foreach ($group as $j => $value)
                            @if ($j > 0)
                                <th>{{ $value }}</th>
                            @endif
                        @endforeach
                    </tr>
                @endforeach
            </table>

        </div>
    </div>
@endsection
