@extends('adminlte::page')

@section('title', 'Employees')

@section('content_header')
    <h1>Employees</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-sm-12">
            @if(session()->get('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif 

            <a style="margin-bottom:5px;" href="{{ route('employees.create') }}" class="btn btn-sm btn-primary">Add Employee</a>
 
            <table class="table table-striped table-bordered table-condensed">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>First Name</td>
                        <td>Last Name</td>
                        <td>Company ID</td>
                        <td>Email</td>
                        <td>Phone</td>
                        <td class="text-center">Actions</td>
                    </tr>
                </thead>
                <tbody>
                    @if (count($employees) != 0) 
                        @foreach($employees as $employee)
                        <tr>
                            <td>{{ $employee->id }}</td>
                            <td>{{ $employee->firstname }}</td>
                            <td>{{ $employee->lastname }}</td>
                            <td>{{ $employee->company_id }}</td>
                            <td>{{ $employee->email }}</td>
                            <td>{{ $employee->phone }}</td>
                            <td>
                                <a href="{{ route('employees.show', $employee->id) }}" class="btn btn-sm btn-success">View</a>
                                <a href="{{ route('employees.edit', $employee->id)}}" class="btn btn-sm btn-primary">Edit</a>
                                <form action="{{ route('employees.destroy', $employee->id)}}" method="post" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger" type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    @else
                    <tr>
                        <td class="text-center" colspan="7">No data available</td>
                    </tr>
                    @endif
                </tbody>
            </table>

            {{ $employees->links() }}
        <div>
    </div>
@stop