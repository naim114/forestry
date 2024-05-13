@extends('layouts.app')

@section('page-title', 'Delete Species Groups')

@section('content')
    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{ route('species_groups.delete') }}">
                @csrf
                <div class="form-group row mb-4">
                    <label class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input name="id" type="text" value={{ $sg->id }} hidden>
                        <input name="name" type="text" class="form-control" value="{{ $sg->name }}" readonly>
                    </div>
                </div>

                <button type="submit" class="btn btn-danger">Confirm Delete</button>
            </form>
        </div>
    </div>
@stop
