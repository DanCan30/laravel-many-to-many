@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Welcome back admin!') }}
                </div>
            </div>
        </div>
    </div>
    
    <div class="text-center pt-5">
        <a href="{{ route("admin.index") }}" class="btn btn-lg btn-primary">Posts</a>
    </div>
</div>
@endsection
