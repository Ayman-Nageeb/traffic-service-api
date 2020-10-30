@extends('adminlte::page')

@section('title', 'Users')

@section('content_header')
    <div class="d-flex justify-content-between">
        <h1 class="m-0 text-dark">Car Licenses</h1>
        <a href="{{ route('car-licenses.create') }}" class="btn btn-primary">Add Car License</a>
    </div>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Plate number</th>
                            <th scope="col">Chassis number</th>
                            <th scope="col">Type</th>
                            <th scope="col">Company</th>
                            <th scope="col">Color</th>
                            <th scope="col">Fuel</th>
                            <th scope="col">Driver</th>
                            <th scope="col">Date Created</th>
                            <th scope="col">Date Expired</th>
                            <th scope="col"></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($licenses as $license)
                            <tr>
                                <th scope="row">{{ $license->id }}</th>
                                <td>{{ $license->number }}</td>
                                <td>{{ $license->chassis_number }}</td>
                                <td>{{ $license->type }}</td>
                                <td>{{ $license->company }}</td>
                                <td>{{ $license->color }}</td>
                                <td>{{ $license->fuel }}</td>
                                <td>{{ $license->citizen->first_name }}</td>
                                <td>{{ $license->date_created }}</td>
                                <td>{{ $license->date_expired }}</td>
                                <td><a href="{{ route('car-licenses.edit', $license->id) }}" class="btn btn-sm btn-success">Edit</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop
