@extends('layouts.app')

@section('page-title', 'Growth Stand Table')

@section('content')
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Stand Table (Growth 30)
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
                    @foreach ($growthData as $group)
                        <tr>
                            <td>Group {{ $group['group'] }}</td>
                            <td>Growth</td>
                            @foreach ($group['growth'] as $growth)
                                <td>{{ number_format($growth, 2) }}</td>
                            @endforeach
                            <td>{{ number_format($group['total_growth'], 2) }}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Num</td>
                            @foreach ($group['num'] as $num)
                                <td>{{ number_format($num, 2) }}</td>
                            @endforeach
                            <td>{{ number_format($group['total_num'], 2) }}</td>
                        </tr>
                    @endforeach
                    <tr>
                        <td>TOTAL</td>
                        <td>Growth</td>
                        <td colspan="5"></td>
                        <td>{{ number_format($totals['total_growth'], 2) }}</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>NUM</td>
                        <td colspan="5"></td>
                        <td>{{ number_format($totals['total_tree'], 2) }}</td>
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
            var url = '/stand/growth30/' + selectedValue;
            window.location.href = url;
        }
    </script>
@endpush
