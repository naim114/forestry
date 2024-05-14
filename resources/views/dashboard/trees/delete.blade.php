@extends('layouts.app')

@section('page-title', 'Delete Tree')

@section('content')
    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{ route('trees.delete') }}">
                @csrf
                <div class="form-group row mb-4">
                    <label class="col-sm-2 col-form-label">BlockX</label>
                    <div class="col-sm-10">
                        <input name="id" type="number" class="form-control" value="{{ $tree->id }}" hidden>
                        <input name="BlockX" type="number" class="form-control" value="{{ $tree->BlockX }}" readonly>
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label class="col-sm-2 col-form-label">BlockY</label>
                    <div class="col-sm-10">
                        <input name="BlockY" type="number" class="form-control" value="{{ $tree->BlockY }}" readonly>
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label class="col-sm-2 col-form-label">x</label>
                    <div class="col-sm-10">
                        <input name="x" type="number" class="form-control" value="{{ $tree->x }}" readonly>
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label class="col-sm-2 col-form-label">y</label>
                    <div class="col-sm-10">
                        <input name="y" type="number" class="form-control" value="{{ $tree->y }}" readonly>
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label class="col-sm-2 col-form-label">TreeNum</label>
                    <div class="col-sm-10">
                        <input name="TreeNum" type="text" class="form-control" value="{{ $tree->TreeNum }}" readonly>
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label class="col-sm-2 col-form-label">species</label>
                    <div class="col-sm-10">
                        <input name="species" type="text" class="form-control" value="{{ $tree->species }}" readonly>
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label class="col-sm-2 col-form-label">species_groups</label>
                    <div class="col-sm-10">
                        <input name="species_groups" type="text" class="form-control" value="{{ $tree->species_groups }}"
                            readonly>
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label class="col-sm-2 col-form-label">diameter_dbh_cm</label>
                    <div class="col-sm-10">
                        <input name="diameter_dbh_cm" type="number" step=".01" class="form-control"
                            value="{{ $tree->diameter_dbh_cm }}" readonly>
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label class="col-sm-2 col-form-label">diameter_class</label>
                    <div class="col-sm-10">
                        <input name="diameter_class" type="number" class="form-control"
                            value="{{ $tree->diameter_class }}" readonly>
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label class="col-sm-2 col-form-label">stem_height_m</label>
                    <div class="col-sm-10">
                        <input name="stem_height_m" type="number" step=".01" class="form-control"
                            value="{{ $tree->stem_height_m }}" readonly>
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label class="col-sm-2 col-form-label">volume_m3</label>
                    <div class="col-sm-10">
                        <input name="volume_m3" type="number" step=".01" class="form-control"
                            value="{{ $tree->volume_m3 }}" readonly>
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label class="col-sm-2 col-form-label">Status</label>
                    <div class="col-sm-10">
                        <input name="status" type="text" class="form-control" value="{{ $tree->status }}" readonly>
                    </div>
                </div>

                <button type="submit" class="btn btn-danger">Confirm Delete</button>
            </form>
        </div>
    </div>
@stop
