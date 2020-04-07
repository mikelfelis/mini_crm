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
        <div class="col-sm-8 offset-sm-2">

            <div class="form-group">    
                <label for="firstname">First Name:</label>
                {{ $employee->firstname }}
            </div>

            <div class="form-group">    
                <label for="lastname">Last Name:</label>
                {{ $employee->lastname }}
            </div>

            <div class="form-group">
                <label for="address">Company:</label>
                {{ $employee->company->name }}
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                {{ $employee->email }}
            </div>

            <div class="form-group">
                <label for="phone">Phone:</label>
                {{ $employee->phone }}
            </div>
        <div>
    </div>

@stop