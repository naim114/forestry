@extends('layouts.app')

@section('page-title', 'Edit Tree')

@section('content')
    <div class="card">
        <div class="card-body">
            <form>
                <div class="form-group row mb-4">
                    <label class="col-sm-2 col-form-label">BlockX</label>
                    <div class="col-sm-10">
                        <input name="" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label class="col-sm-2 col-form-label">BlockY</label>
                    <div class="col-sm-10">
                        <input name="" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label class="col-sm-2 col-form-label">x</label>
                    <div class="col-sm-10">
                        <input name="" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label class="col-sm-2 col-form-label">y</label>
                    <div class="col-sm-10">
                        <input name="" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label class="col-sm-2 col-form-label">TreeNum</label>
                    <div class="col-sm-10">
                        <input name="" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label class="col-sm-2 col-form-label">species</label>
                    <div class="col-sm-10">
                        <input name="" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label class="col-sm-2 col-form-label">species_groups</label>
                    <div class="col-sm-10">
                        <input name="" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label class="col-sm-2 col-form-label">diameter_dbh_cm</label>
                    <div class="col-sm-10">
                        <input name="" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label class="col-sm-2 col-form-label">diameter_class</label>
                    <div class="col-sm-10">
                        <input name="" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label class="col-sm-2 col-form-label">stem_height_m</label>
                    <div class="col-sm-10">
                        <input name="" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label class="col-sm-2 col-form-label">volume_m3</label>
                    <div class="col-sm-10">
                        <input name="" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label class="col-sm-2 col-form-label">Status</label>
                    <div class="col-sm-10">
                        <input name="" type="text" class="form-control">
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@stop
