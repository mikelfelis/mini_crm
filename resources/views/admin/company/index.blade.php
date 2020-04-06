@extends('adminlte::page')

@section('title', 'Companies')

@section('content_header')
    <h1>Companies</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div>
                <a style="margin: 19px;" href="{{ route('companies.create') }}" class="btn btn-primary">New company</a>
            </div>
 
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                    <td>ID</td>
                    <td>Name</td>
                    <td>Address</td>
                    <td>Website</td>
                    <td colspan="2" class="text-center">Actions</td>
                    </tr>
                </thead>
                <tbody>
                    @if (count($companies) != 0) 
                        @foreach($companies as $company)
                        <tr>
                            <td>{{$company->id}}</td>
                            <td>{{$company->name}}</td>
                            <td>{{$company->address}}</td>
                            <td>{{$company->website}}</td>
                            <td>
                                <a href="{{ route('companies.edit', $company->id)}}" class="btn btn-primary">Edit</a>
                            </td>
                            <td>
                                <form action="{{ route('companies.destroy', $company->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                   @else
                   <tr>
                        <td class="text-center" colspan="5">No data available</td>
                    </tr>
                    @endif
                </tbody>
            </table>
        <div>
    </div>
@stop