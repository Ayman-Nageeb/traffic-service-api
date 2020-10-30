@extends('adminlte::page')

@section('title', 'Users')

@section('content_header')
    <div class="d-flex justify-content-between">
        <h1 class="m-0 text-dark">Admins</h1>
        <a href="{{ route('admins.create') }}" class="btn btn-primary">Add Admin</a>
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
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">password</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($admins as $admin)
                            <tr>
                                <th scope="row">{{ $admin->id }}</th>
                                <td>{{ $admin->name }}</td>
                                <td>{{ $admin->email }}</td>
                                <td>{{ $admin->password }}</td>
                                <td>
                                    @if($admin['id'] != 1)
                                        <a href="{{ route('admins.edit', $admin->id) }}" class="btn btn-sm btn-success">Edit</a>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop
