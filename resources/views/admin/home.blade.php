@extends('layouts.app')
   
@section('content')
    <router-view></router-view>
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    You are Admin.
                    <br>
                    <p>
                        Name: {{Auth::user()->name}}
                        <br>
                        Email: {{Auth::user()->email}}
                    </p> 
                    <img alt="{{Auth::user()->name}}" src="{{Auth::user()->image}}"/>
                </div>
            </div>
        </div>
    </div>
</div> -->
@endsection