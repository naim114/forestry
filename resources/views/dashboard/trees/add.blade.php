@extends('layouts.app')

@section('page-title', 'Add Tree')

@section('content')
    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{ route('trees.add') }}">
                @csrf
                <div class="form-group row mb-4">
                    <label class="col-sm-2 col-form-label">BlockX</label>
                    <div class="col-sm-10">
                        <input name="BlockX" type="number" class="form-control" required>
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label class="col-sm-2 col-form-label">BlockY</label>
                    <div class="col-sm-10">
                        <input name="BlockY" type="number" class="form-control" required>
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label class="col-sm-2 col-form-label">x</label>
                    <div class="col-sm-10">
                        <input name="x" type="number" class="form-control" required>
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label class="col-sm-2 col-form-label">y</label>
                    <div class="col-sm-10">
                        <input name="y" type="number" class="form-control" required>
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label class="col-sm-2 col-form-label">TreeNum</label>
                    <div class="col-sm-10">
                        <input name="TreeNum" type="text" class="form-control" required>
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label class="col-sm-2 col-form-label">species</label>
                    <div class="col-sm-10">
                        <select class="form-control" required name="species">
                            @foreach ($species as $s)
                                <option value="{{ $s->code }}">{{ $s->code }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label class="col-sm-2 col-form-label">species_groups</label>
                    <div class="col-sm-10">
                        <select class="form-control" required name="species_groups">
                            @foreach ($species_groups as $sg)
                                <option value="{{ $sg->id }}">{{ $sg->id }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label class="col-sm-2 col-form-label">diameter_dbh_cm</label>
                    <div class="col-sm-10">
                        <input name="diameter_dbh_cm" type="number" step=".01" class="form-control" required>
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label class="col-sm-2 col-form-label">diameter_class</label>
                    <div class="col-sm-10">
                        <input name="diameter_class" type="number" class="form-control" required>
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label class="col-sm-2 col-form-label">stem_height_m</label>
                    <div class="col-sm-10">
                        <input name="stem_height_m" type="number" step=".01" class="form-control" required>
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label class="col-sm-2 col-form-label">volume_m3</label>
                    <div class="col-sm-10">
                        <input name="volume_m3" type="number" step=".01" class="form-control" required>
                    </div>
                </div>

                <div class="form-group row mb-4">
                    <label class="col-sm-2 col-form-label">Status</label>
                    <div class="col-sm-10">
                        <select class="form-control" required name="status">
                            <option value="KEEP">KEEP</option>
                            <option value="CUT">CUT</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row mb-4">
                    <label class="col-sm-2 col-form-label">PROD</label>
                    <div class="col-sm-10">
                        <input name="PROD" type="number" step=".01" class="form-control" required>
                    </div>
                </div>

                <div class="form-group row mb-4">
                    <label class="col-sm-2 col-form-label">cut_angle</label>
                    <div class="col-sm-10">
                        <input name="cut_angle" type="number" class="form-control" required>
                    </div>
                </div>

                <div class="form-group row mb-4">
                    <label class="col-sm-2 col-form-label">DMG_stem</label>
                    <div class="col-sm-10">
                        <input name="DMG_stem" type="number" step=".01" class="form-control" required>
                    </div>
                </div>

                <div class="form-group row mb-4">
                    <label class="col-sm-2 col-form-label">DMG_crown</label>
                    <div class="col-sm-10">
                        <input name="DMG_crown" type="number" step=".01" class="form-control" required>
                    </div>
                </div>

                <div class="form-group row mb-4">
                    <label class="col-sm-2 col-form-label">D30</label>
                    <div class="col-sm-10">
                        <input name="D30" type="number" step=".01" class="form-control" required>
                    </div>
                </div>

                <div class="form-group row mb-4">
                    <label class="col-sm-2 col-form-label">V30</label>
                    <div class="col-sm-10">
                        <input name="V30" type="number" step=".01" class="form-control" required>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@stop
