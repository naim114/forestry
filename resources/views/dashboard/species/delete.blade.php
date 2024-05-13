@extends('layouts.app')

@section('page-title', 'Delete Species')

@section('content')
    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{ route('species.delete') }}">
                @csrf
                <input name="id" value="{{ $species->id }}" type="text" class="form-control" hidden>
                <div class="form-group row mb-4">
                    <label class="col-sm-2 col-form-label">Code</label>
                    <div class="col-sm-10">
                        <input name="code" value="{{ $species->code }}" type="text" class="form-control" readonly>
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input name="name" value="{{ $species->name }}" type="text" class="form-control" readonly>
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label class="col-sm-2 col-form-label">Species Group</label>
                    <div class="col-sm-10">
                        <input name="species_groups" value="{{ $species->species_groups }}" type="text"
                            class="form-control" readonly>
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label class="col-sm-2 col-form-label">Roy Class</label>
                    <div class="col-sm-10">
                        <input name="roy_class" value="{{ $species->roy_class }}" type="text" class="form-control"
                            readonly>
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label class="col-sm-2 col-form-label">Comm Gr</label>
                    <div class="col-sm-10">
                        <input name="comm_gr" value="{{ $species->comm_gr }}" type="text" class="form-control" readonly>
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label class="col-sm-2 col-form-label">Dip</label>
                    <div class="col-sm-10">
                        <input name="dip" value="{{ $species->dip }}" type="text" class="form-control" readonly>
                    </div>
                </div>
                <button type="submit" class="btn btn-danger">Confirm Delete</button>
            </form>
        </div>
    </div>
@stop
