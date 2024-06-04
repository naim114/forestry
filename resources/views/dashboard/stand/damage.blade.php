@extends('layouts.app')

@section('page-title', 'Damage Stand Table')

@section('content')
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Stand Table (Stem Damage)
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
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($stemData as $group)
                        <tr>
                            <td>Group {{ $group['group'] }}</td>
                            <td>Damage</td>
                            @foreach ($group['damage'] as $damage)
                                <td>{{ number_format($damage, 2) }}</td>
                            @endforeach
                            <td>{{ number_format($group['total_damage'], 2) }}</td>
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
                        <td>DMG</td>
                        <td colspan="5"></td>
                        <td>{{ number_format($totals['total_stem'], 2) }}</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>NUM</td>
                        <td colspan="5"></td>
                        <td>{{ number_format($totals['total_tree_stem'], 2) }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Stand Table (Crown Damage)
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
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($crownData as $group)
                        <tr>
                            <td>Group {{ $group['group'] }}</td>
                            <td>Damage</td>
                            @foreach ($group['damage'] as $damage)
                                <td>{{ number_format($damage, 2) }}</td>
                            @endforeach
                            <td>{{ number_format($group['total_damage'], 2) }}</td>
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
                        <td>DMG</td>
                        <td colspan="5"></td>
                        <td>{{ number_format($totals['total_crown'], 2) }}</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>NUM</td>
                        <td colspan="5"></td>
                        <td>{{ number_format($totals['total_tree_crown'], 2) }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
