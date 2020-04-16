@extends('adminlte::page')

@section('title', 'Employee Details')

@section('content_header')
    <h1>
        Employee Details
        <a href="{{ route('employees.index') }}" type="button" class="btn btn-primary float-right">Back</a>
    </h1>
@stop

@section('content')
    <div class="row">
        <div class="col-sm-8 offset-sm-4">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="..." alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title ">Name</h5>
                    <p class="card-text">{{ $employee->firstname . ' ' . $employee->lastname }}</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Company <small>{{ $employee->company->name }}</small></li>
                    <li class="list-group-item">Email <small>{{ $employee->email }}</small></li>
                    <li class="list-group-item">Phone <small>{{ $employee->phone }}</small></li>
                </ul>
            </div>
        <div>
    </div>
@stop