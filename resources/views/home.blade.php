@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
<<<<<<< HEAD
=======
        <div class="col-md-12">
            @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
            @endif
        </div>
>>>>>>> 15a10f0a9162546ce1e0e7d1195aadcffb9eafa3
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
<<<<<<< HEAD
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!

                    <p>My name: {{Auth::user()->name}}</p>
                    <p>My Email: {{Auth::user()->email}}</p>
                    <img alt="{{Auth::user()->name}}" src="{{Auth::user()->image}}"/>

=======
                    You are logged in!
>>>>>>> 15a10f0a9162546ce1e0e7d1195aadcffb9eafa3
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
