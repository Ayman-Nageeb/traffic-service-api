@extends('adminlte::page')

@section('title', 'Users')

@section('content_header')
    <div class="d-flex justify-content-between">
        <h1 class="m-0 text-dark">Dashboard</h1>
        <a href="{{ route('citizens.create') }}" class="btn btn-primary">Add Citizen</a>
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
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">Username</th>
                            <th scope="col">password</th>
                            <th scope="col"></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($citizens as $citizen)
                            <tr>
                                <th scope="row">{{ $citizen->id }}</th>
                                <td>{{ $citizen->first_name }}</td>
                                <td>{{ $citizen->last_name }}</td>
                                <td>{{ $citizen->username }}</td>
                                <td>{{ $citizen->password }}</td>
                                <td><a href="{{ route('citizens.edit', $citizen->id) }}" class="btn btn-sm btn-success">Edit</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop
