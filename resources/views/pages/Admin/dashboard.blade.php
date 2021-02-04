@extends('layouts.defaultCalendar')
@section('content')

<div class="container">
    <div class="row justify-content-center " >
        <div class="col-md-8 " >
            <div class="card" >
                <div class="card-header">{{ __('Dashboard') }}</div>
                <div class="card-body" >
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                           {{ session('status') }}
                        </div>
                    @endif
                    {{ __('Hello ADMINISTRATOR, You are logged in!') }}
                </div>
                <button><a href="/adminPanel">Delete Users</a></button>
                <button><a href="/editPanel">Edit Users</a></button>
                
            </div>
        </div>
    </div>
</div>

@endsection