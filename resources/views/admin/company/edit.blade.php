@extends('adminlte::page')

@section('title', 'Edit Company')

@section('content_header')
    <h1>Edit Company</h1>
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

            <form method="post" action="{{ route('companies.update', $company->id) }}">
                @method('PATCH')
                @csrf
                <div class="form-group">    
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" name="name" value="{{ $company->name }}"/>
                </div>

                <div class="form-group">
                    <label for="address">Address:</label>
                    <input type="text" class="form-control" name="address" value="{{ $company->address }}"/>
                </div>

                <div class="form-group">
                    <label for="website">Website:</label>
                    <input type="text" class="form-control" name="website" value="{{ $company->website }}"/>
                </div>

                <button type="submit" class="btn btn-sm btn-primary">Save</button>
                <a href="{{ route('companies.index') }}" type="button" class="btn btn-default">Cancel</a>
            </form>
        <div>
    </div>

@stop