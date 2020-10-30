@extends('adminlte::page')

@section('title', 'Users')

@section('content_header')
    <div class="d-flex justify-content-between">
        <h1 class="m-0 text-dark">Police Officers</h1>
        <a href="{{ route('police.create') }}" class="btn btn-primary">Add Police</a>
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
                        @foreach($police as $data)
                            <tr>
                                <th scope="row">{{ $data->id }}</th>
                                <td>{{ $data->first_name }}</td>
                                <td>{{ $data->last_name }}</td>
                                <td>{{ $data->username }}</td>
                                <td>{{ $data->password }}</td>
                                <td><a href="{{ route('police.edit', $data->id) }}" class="btn btn-sm btn-success">Edit</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop
