@extends('layouts.app')

@section('page-title', 'Edit Tree')

@section('content')
    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{ route('trees.update') }}">
                @csrf
                <div class="form-group row mb-4">
                    <label class="col-sm-2 col-form-label">BlockX</label>
                    <div class="col-sm-10">
                        <input name="id" type="number" class="form-control" value="{{ $tree->id }}" hidden>
                        <input name="BlockX" type="number" class="form-control" value="{{ $tree->BlockX }}">
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label class="col-sm-2 col-form-label">BlockY</label>
                    <div class="col-sm-10">
                        <input name="BlockY" type="number" class="form-control" value="{{ $tree->BlockY }}">
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label class="col-sm-2 col-form-label">x</label>
                    <div class="col-sm-10">
                        <input name="x" type="number" class="form-control" value="{{ $tree->x }}">
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label class="col-sm-2 col-form-label">y</label>
                    <div class="col-sm-10">
                        <input name="y" type="number" class="form-control" value="{{ $tree->y }}">
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label class="col-sm-2 col-form-label">TreeNum</label>
                    <div class="col-sm-10">
                        <input name="TreeNum" type="text" class="form-control" value="{{ $tree->TreeNum }}">
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label class="col-sm-2 col-form-label">species</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="species">
                            @foreach ($species as $s)
                                <option value="{{ $s->code }}" {{ $s->code == $tree->species ? 'selected' : '' }}>
                                    {{ $s->code }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label class="col-sm-2 col-form-label">species_groups</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="species_groups">
                            @foreach ($species_groups as $sg)
                                <option value="{{ $sg->id }}"
                                    {{ $sg->id == $tree->species_group_id ? 'selected' : '' }}>
                                    {{ $sg->id }}
                                </option>
                            @endforeach
                        </select>

                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label class="col-sm-2 col-form-label">diameter_dbh_cm</label>
                    <div class="col-sm-10">
                        <input name="diameter_dbh_cm" type="number" step=".01" class="form-control"
                            value="{{ $tree->diameter_dbh_cm }}">
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label class="col-sm-2 col-form-label">diameter_class</label>
                    <div class="col-sm-10">
                        <input name="diameter_class" type="number" class="form-control"
                            value="{{ $tree->diameter_class }}">
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label class="col-sm-2 col-form-label">stem_height_m</label>
                    <div class="col-sm-10">
                        <input name="stem_height_m" type="number" step=".01" class="form-control"
                            value="{{ $tree->stem_height_m }}">
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label class="col-sm-2 col-form-label">volume_m3</label>
                    <div class="col-sm-10">
                        <input name="volume_m3" type="number" step=".01" class="form-control"
                            value="{{ $tree->volume_m3 }}">
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label class="col-sm-2 col-form-label">Status</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="status">
                            <option value="KEEP" {{ $tree->status == 'KEEP' ? 'selected' : '' }}>KEEP</option>
                            <option value="CUT" {{ $tree->status == 'CUT' ? 'selected' : '' }}>CUT</option>
                        </select>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@stop
