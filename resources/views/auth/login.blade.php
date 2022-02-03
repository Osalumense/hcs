@extends('layouts.app')

@section('content')
<section class="contact d-flex align-items-center py-5">
    <div class="container-fluid text-light my-5">
        <div class="row d-flex justify-content-center mt-5">
            <div class="col-lg-5 border border-2 mt-3 justify-content-lg-end align-items-center px-lg-5">
                    <div class="text-center py-4 mt-3 pt-lg-0">
                        <p>Health Counselling System</p>
                        <h2 class="pt-2">Welcome Back</h2>
                    </div>

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <div class="form-group my-3 py-2">
                            <input id="email" type="email" class="form-control form-control-input @error('email') is-invalid @enderror" name="email" placeholder="Enter Email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                    
                            <div class="form-group mt-3 py-2">
                                <input id="password" type="password" class="form-control form-control-input @error('password') is-invalid @enderror" name="password" required placeholder="Enter password" autocomplete="current-password">
                    
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    
                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="my-3">
                            <div class="d-flex justify-content-center">
                                <p> Don't have an account yet? </p>
                                <a class="form-link mx-2" href="{{ url('/register')}}"> Sign up</a>
                            </div>
                            <div class="d-flex justify-content-center">
                                <a class="form-link my-2" href="{{ url('/password/reset' )}}"> Forgot password?</a>
                            </div>
                        </div>

                        <div class="my-4">
                            <button type="submit" class="btn mx-auto d-flex justify-content-center form-control-submit-button">
                                {{ __('Login') }}
                            </button>     
                        </div>
                        
                    </form>
                    {{-- <div>
                        <div class="form-group my-3 py-2">
                            <input type="email" class="form-control form-control-input" id="exampleFormControlInput3" placeholder="Enter email">
                        </div> 
                        <div class="form-group my-3 py-2">
                            <input type="password" class="form-control form-control-input" id="exampleFormControlInput3" placeholder="Enter password">
                        </div>                            
                    </div>
                    <div class="my-4">
                        <button class="btn mx-auto d-flex justify-content-center form-control-submit-button">Login</button>
                    </div>
                    <div class="d-flex justify-content-center">
                        <p class="para-light my-4">Don't have an account yet? <span><a class="form-link" href="{{ url('/register') }}"> {{ __('Login') }}</a></span></p> <br/>
                        
                    </div>

                    --}}
                    
                </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> 
</section>

{{-- <form method="POST" action="{{ route('login') }}">
    @csrf

    <div class="row mb-3">
        <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

        <div class="col-md-6">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="row mb-3">
        <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

        <div class="col-md-6">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-md-6 offset-md-4">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                <label class="form-check-label" for="remember">
                    {{ __('Remember Me') }}
                </label>
            </div>
        </div>
    </div>

    <div class="row mb-0">
        <div class="col-md-8 offset-md-4">
            <button type="submit" class="btn btn-primary">
                {{ __('Login') }}
            </button>

            @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
            @endif
        </div>
    </div>
</form> --}}
@endsection
