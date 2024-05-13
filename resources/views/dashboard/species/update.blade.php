@extends('layouts.app')

@section('page-title', 'Edit Species')

@section('content')
    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{ route('species.update') }}">
                @csrf
                <input name="id" value="{{ $species->id }}" type="text" class="form-control" hidden>
                <div class="form-group row mb-4">
                    <label class="col-sm-2 col-form-label">Code</label>
                    <div class="col-sm-10">
                        <input name="code" value="{{ $species->code }}" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input name="name" value="{{ $species->name }}" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label class="col-sm-2 col-form-label">Species Group</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="species_groups">
                            @foreach ($groups as $group)
                                <option value="{{ $group->id }}"
                                    {{ $group->id == $species->species_groups ? 'selected' : '' }}>
                                    {{ $group->name }}
                                </option>
                            @endforeach
                        </select>

                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label class="col-sm-2 col-form-label">Roy Class</label>
                    <div class="col-sm-10">
                        <input name="roy_class" value="{{ $species->roy_class }}" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label class="col-sm-2 col-form-label">Comm Gr</label>
                    <div class="col-sm-10">
                        <input name="comm_gr" value="{{ $species->comm_gr }}" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label class="col-sm-2 col-form-label">Dip</label>
                    <div class="col-sm-10">
                        <select name="dip" class="form-control">
                            <option value="Dip" {{ $species->dip === 'Dip' ? 'selected' : '' }}>Dip</option>
                            <option value="Non_Dip" {{ $species->dip === 'Non_Dip' ? 'selected' : '' }}>Non_Dip</option>
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@stop
