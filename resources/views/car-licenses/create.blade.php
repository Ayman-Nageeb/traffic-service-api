@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Add license</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <form action="{{ route('car-licenses.store') }}" method="POST">
                    <div class="card-body">
                        @csrf
                        <div class="form-group">
                            <label>Plate Number</label>
                            <input type="text" class="form-control" name="number" required>
                        </div>
                        <div class="form-group">
                            <label>Chassis number</label>
                            <input type="text" class="form-control" name="chassis_number" required>
                        </div>
                        <div class="form-group">
                            <label>Company</label>
                            <input type="text" class="form-control" name="company" required>
                        </div>
                        <div class="form-group">
                            <label>Color</label>
                            <input type="text" class="form-control" name="color" required>
                        </div>
                        <div class="form-group">
                            <label>Fuel</label>
                            <input type="text" class="form-control" name="fuel" required>
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
                                <option value="3">Government</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Date created</label>
                            <input type="date" class="form-control" name="date_created" required>
                        </div>
                        <div class="form-group">
                            <label>Date expired</label>
                            <input type="date" class="form-control" name="date_expired" required>
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
