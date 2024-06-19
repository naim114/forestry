@extends('layouts.app')

@section('page-title', 'Production Stand Table')

@section('content')
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            {{-- Stand Table (Production 30) --}}
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
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $group)
                        <tr>
                            <th>Group {{ $group['group'] }}</th>
                            <th>prod</th>
                            @foreach ($group['prod'] as $prod)
                                <td>{{ round($prod / 100, 4) }}</td>
                            @endforeach
                            <th>{{ round(array_sum($group['prod']) / 100, 4) }}</th>
                        </tr>
                        <tr>
                            <th></th>
                            <th>Num</th>
                            @foreach ($group['num'] as $num)
                                <td>{{ round($num / 100, 4) }}</td>
                            @endforeach
                            <th>{{ round(array_sum($group['num']) / 100, 4) }}</th>
                        </tr>
                    @endforeach
                    <tr>
                        <th>TOTAL</th>
                        <th>PROD</th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th>{{ round($totaltotalprod / 100, 4) }}</th>
                    </tr>
                    <tr>
                        <th></th>
                        <th>NUM</th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th>{{ round($totaltotaltree / 100, 4) }}</th>
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
            var url = '/stand/production30/' + selectedValue;
            window.location.href = url;
        }
    </script>
@endpush
