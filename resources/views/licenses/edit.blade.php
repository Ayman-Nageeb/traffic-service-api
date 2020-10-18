@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Edit license</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <form action="{{ route('licenses.update', $license) }}" method="POST">
                    <div class="card-body">
                        @csrf
                        @method('PUt')
                        <div class="form-group">
                            <label>Plate Number</label>
                            <input type="text" class="form-control" name="number" required
                                   value="{{ $license->number }}">
                        </div>
                        <div class="form-group">
                            <label>Citizen</label>
                            <select class="form-control" required name="citizen_id">
                                @foreach(\App\Citizen::all() as $citizen)
                                    <option value="{{ $citizen->id }}">{{ $citizen->first_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Citizen</label>
                            <select class="form-control" required name="type">
                                <option value="1">Owned</option>
                                <option value="2">Public</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Date created</label>
                            <input type="date" class="form-control" name="date_created" required
                                   value="{{ $license->date_created }}">
                        </div>
                        <div class="form-group">
                            <label>Date expired</label>
                            <input type="date" class="form-control" name="date_expired" required
                                   value="{{ $license->date_expired }}">
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
