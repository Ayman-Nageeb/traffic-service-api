@extends('adminlte::page')

@section('title', 'Violations')

@section('content_header')
    <div class="d-flex justify-content-between">
        <h1 class="m-0 text-dark">Violation</h1>
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
                            <th scope="col">Type</th>
                            <th scope="col">Price</th>
                            <th scope="col">Degree</th>
                            <th scope="col" style="text-align: right">Plate  Number</th>
                            
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($violations as $violation)
                            <tr>
                                <th scope="row">{{ $violation->id }}</th>
                                <td>{{ $violation->type }}</td>
                                <td>{{ $violation->price }} SDG</td>
                                <td>{{ $violation->degree }}</td>
                                <td style="text-align: right">{{ $violation->plate_number }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop
