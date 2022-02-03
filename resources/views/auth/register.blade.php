@extends('layouts.app')

@section('content')
<section class="forms d-flex align-items-center">
    <div class="container-fluid text-light">
        <div class="row d-flex justify-content-center my-5">
            <div class="col-lg-5 mt-5 border border-2 justify-content-lg-end align-items-center px-lg-5">
                    <div class="text-center py-4 mt-3 pt-lg-0">
                        <p>Health Counselling System</p>
                        <h4 class="pt-5">Sign Up for Health Counselling</h4>
                    </div>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <div class="form-group mb-1 py-2">
                                <input id="first_name" type="text" class="form-control form-control-input @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" placeholder="Enter first name" required autocomplete="first_name" autofocus>

                                @error('first_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="form-group my-1 py-2">
                                <input id="last_name" type="text" class="form-control form-control-input @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" placeholder="Enter last name" required autocomplete="last_name" autofocus>

                                @error('last_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="form-group my-1 py-2">
                                <input id="email" type="email" class="form-control form-control-input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Enter email" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="form-group my-1 py-2">
                                <input id="password" type="password" class="form-control form-control-input @error('password') is-invalid @enderror" placeholder="Enter password" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="form-group my-1 py-2">
                                <input id="password-confirm" type="password" class="form-control form-control-input" name="password_confirmation" placeholder="Confirm password" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 mt-3 offset-md-4">
                                <button type="submit" class="btn">
                                    {{ __('Register') }}
                                </button>
                            </div>

                            <div class="d-flex justify-content-center">
                                <p class="para-light my-4">Already have an account? <span><a class="form-link" href="{{ url('/login') }}"> Log in</a></span></p>
                                
                            </div> 
                            
                        </div>
                    </form>                       
                </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</section>
@endsection
