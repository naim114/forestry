@extends('layouts.app')

@section('page-title', 'Volume Stand Table')

@section('content')
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            {{-- Stand Table --}}
            @if ($db == 'trees')
                Tree 45
            @elseif($db == 'trees50')
                Tree 50
            @elseif($db == 'trees55')
                Tree 55
            @elseif($db == 'trees60')
                Tree 60
            @elseif($db == 'trees65')
                Tree 65
            @endif
        </div>
        <div class="card-body">
            <div class="row g-2 mb-3">
                <div class="col-auto">
                    <select class="form-select auto-width" id="tree-select">
                        <option value="trees" {{ $db == 'trees' ? 'selected' : '' }}>Tree 45</option>
                        <option value="trees50" {{ $db == 'trees50' ? 'selected' : '' }}>Tree 50</option>
                        <option value="trees55" {{ $db == 'trees55' ? 'selected' : '' }}>Tree 55</option>
                        <option value="trees60" {{ $db == 'trees60' ? 'selected' : '' }}>Tree 60</option>
                        <option value="trees65" {{ $db == 'trees65' ? 'selected' : '' }}>Tree 65</option>
                    </select>
                </div>
                <div class="col-auto">
                    <button class="btn btn-primary" onclick="goToRoute()">Go</button>
                </div>
            </div>

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
                                        <td>{{ number_format($count, 2) }}</td>
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
                            <td>{{ number_format($count, 2) }}</td>
                        @endforeach
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        function goToRoute() {
            var select = document.getElementById('tree-select');
            var selectedValue = select.options[select.selectedIndex].value;
            var url = '/stand/volume/' + selectedValue;
            window.location.href = url;
        }
    </script>
@endpush
