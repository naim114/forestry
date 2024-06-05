@extends('layouts.app')

@section('page-title', 'Process')

@section('content')

    <div class="card">
        <div class="card-body">
            <h4>Step 1: Create Forest</h4>
            <a href="#" class="btn btn-primary mt-1 mb-3">Run</a>
            {{-- <a href="{{ route('trees.index') }}" class="btn btn-primary mt-1 mb-3">Run</a> --}}
            <h4>Step 2: Calculate Volume</h4>
            <a href="#" class="btn btn-primary mt-1 mb-3">Run</a>
            {{-- <a href="{{ route('process.calc_volume') }}" class="btn btn-primary mt-1 mb-3">Run</a> --}}
            <h4>Step 3: Determine Cutting Angle & Status Cut</h4>
            <a href="#" class="btn btn-primary mt-1 mb-3">Run</a>
            {{-- <a href="{{ route('process.calc_cut_angle') }}" class="btn btn-primary mt-1 mb-3">Run</a> --}}
            <h4>Step 4: Create Production 0</h4>
            <a href="#" class="btn btn-primary mt-1 mb-3">Run</a>
            {{-- <a href="{{ route('process.create_production0') }}" class="btn btn-primary mt-1 mb-3">Run</a> --}}
            <h4>Step 5: Calculate Damage Stem</h4>
            <a href="#" class="btn btn-primary mt-1 mb-3">Run</a>
            {{-- <a href="{{ route('process.calc_dmg_stem') }}" class="btn btn-primary mt-1 mb-3">Run</a> --}}
            <h4>Step 6: Calculate Damage Crown</h4>
            <a href="#" class="btn btn-primary mt-1 mb-3">Run</a>
            {{-- <a href="{{ route('process.calc_dmg_crown') }}" class="btn btn-primary mt-1 mb-3">Run</a> --}}
            <h4>Step 7: Calculate V30 & D30</h4>
            <a href="#" class="btn btn-primary mt-1 mb-3">Run</a>
            {{-- <a href="{{ route('process.calc_v30_d30') }}" class="btn btn-primary mt-1 mb-3">Run</a> --}}
        </div>
    </div>
@stop
