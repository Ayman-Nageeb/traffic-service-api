@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Edit Citizen</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <form action="{{ route('citizens.update', $police->id) }}" method="POST">
                    <div class="card-body">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label>First name</label>
                            <input type="text" class="form-control" name="first_name" required value="{{ $police->first_name }}">
                        </div>
                        <div class="form-group">
                            <label>Last name</label>
                            <input type="text" class="form-control" name="last_name" required value="{{ $police->last_name }}">
                        </div>
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" class="form-control" name="username" required value="{{ $police->username }}">
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
