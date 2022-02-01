@extends('layouts.app')

@section('content')
<section class="contact d-flex align-items-center py-5">
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button class="btn btn-primary p-2 btn-reverse" type="submit">Logout</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
