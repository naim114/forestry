@extends('layouts.app')

@section('page-title', 'Add Species')

@section('content')
    <div class="card">
        <div class="card-body">
            <form>
                <div class="form-group row mb-4">
                    <label class="col-sm-2 col-form-label">Code</label>
                    <div class="col-sm-10">
                        <input name="" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input name="" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label class="col-sm-2 col-form-label">Species Group</label>
                    <div class="col-sm-10">
                        <select class="form-control">
                            @foreach ($groups as $group)
                                <option value="{{ $group->id }}">{{ $group->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label class="col-sm-2 col-form-label">Roy Class</label>
                    <div class="col-sm-10">
                        <input name="" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label class="col-sm-2 col-form-label">Comm Gr</label>
                    <div class="col-sm-10">
                        <input name="" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label class="col-sm-2 col-form-label">Dip</label>
                    <div class="col-sm-10">
                        <select class="form-control">
                            <option value="">Dip</option>
                            <option value="">Non_Dip</option>
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@stop
