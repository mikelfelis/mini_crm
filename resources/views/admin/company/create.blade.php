@extends('adminlte::page')

@section('title', 'Add New Company')

@section('content_header')
    <h1>Create Company</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <form method="post" action="{{ route('companies.store') }}">
                @csrf
                <div class="form-group">    
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" name="name"/>
                </div>

                <div class="form-group">
                    <label for="address">Address:</label>
                    <input type="text" class="form-control" name="address"/>
                </div>

                <div class="form-group">
                    <label for="website">Website:</label>
                    <input type="text" class="form-control" name="website"/>
                </div>

                <button type="submit" class="btn btn-primary">Add</button>
            </form>
        <div>
    </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    
@stop