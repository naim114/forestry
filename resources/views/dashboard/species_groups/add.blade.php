@extends('layouts.app')

@section('page-title', 'Add Species Groups')

@section('content')
    <div class="card">
        <div class="card-body">
            <form>
                <div class="form-group row mb-4">
                    <label class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input name="" type="text" class="form-control">
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@stop
