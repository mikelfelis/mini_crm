@extends('adminlte::page')

@section('title', 'Add New Employee')

@section('content_header')
    <h1>Add New Employee</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            @if ($errors->any())
            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <form method="post" action="{{ route('employees.store') }}">
                @csrf
                <div class="form-group">    
                    <label for="firstname">First Name:</label>
                    <input type="text" class="form-control" name="firstname"/>
                </div>

                <div class="form-group">    
                    <label for="lastname">Last Name:</label>
                    <input type="text" class="form-control" name="lastname"/>
                </div>

                <div class="form-group">
                    <label for="address">Company:</label>
                    <select class="form-control" name="company_id" id="">
                        <option value="">Please select item</option>
                        @foreach ($companies as $key => $value)
                            <option value="{{ $key }}">{{ $value }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="text" class="form-control" name="email"/>
                </div>

                <div class="form-group">
                    <label for="phone">Phone:</label>
                    <input type="text" class="form-control" name="phone"/>
                </div>


                <button type="submit" class="btn btn-primary">Add</button>
                <a href="{{ route('employees.index') }}" type="button" class="btn btn-default">Cancel</a>
            </form>
        <div>
    </div>

@stop