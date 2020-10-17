@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Add Citizen</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <form action="{{ route('citizens.store') }}" method="POST">
                    <div class="card-body">
                        @csrf
                        <div class="form-group">
                            <label>First name</label>
                            <input type="text" class="form-control" name="first_name" required>
                        </div>
                        <div class="form-group">
                            <label>Last name</label>
                            <input type="text" class="form-control" name="last_name" required>
                        </div>
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" class="form-control" name="username" required>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password" required>
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
