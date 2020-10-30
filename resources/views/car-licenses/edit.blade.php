@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Edit  Car license</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <form action="{{ route('car-licenses.update', $license) }}" method="POST">
                    <div class="card-body">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label>Plate Number</label>
                            <input type="text" class="form-control" name="number" required value="{{ $license->number }}">
                        </div>
                        <div class="form-group">
                            <label>Chassis number</label>
                            <input type="text" class="form-control" name="chassis_number" required value="{{ $license->chassis_number }}">
                        </div>
                        <div class="form-group">
                            <label>Company</label>
                            <input type="text" class="form-control" name="company" required value="{{ $license->company }}">
                        </div>
                        <div class="form-group">
                            <label>Color</label>
                            <input type="text" class="form-control" name="color" required value="{{ $license->color }}">
                        </div>
                        <div class="form-group">
                            <label>Fuel</label>
                            <input type="text" class="form-control" name="fuel" required value="{{ $license->fuel }}">
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
                            <label>type</label>
                            <select class="form-control" required name="type">
                                <option value="1">Owned</option>
                                <option value="2">Public</option>
                                <option value="3">Government</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Date created</label>
                            <input type="date" class="form-control" name="date_created" required value="{{ $license->date_created }}">
                        </div>
                        <div class="form-group">
                            <label>Date expired</label>
                            <input type="date" class="form-control" name="date_expired" required value="{{ $license->date_expired }}">
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
