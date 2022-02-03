@extends('layouts.app')

@section('content')
<section class="forms d-flex align-items-center">
    <div class="container-fluid text-light">
        <div class="row d-flex justify-content-center my-5">
            <div class="col-lg-5 my-5 border border-2 justify-content-lg-end align-items-center px-lg-5">
                    <div class="text-center py-4 mt-5 pt-lg-0">
                        <p>Health Counselling System</p>
                        <h4 class="pt-3">Reset Password</h4>
                    </div>

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <div class="row mb-3">
                            <div class="form-group my-1 py-2">
                                <input id="email" type="email" class="form-control form-control-input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Enter Email to get password reset link" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="my-4">
                            <button type="submit" class="btn mx-auto d-flex justify-content-center form-control-submit-button">
                                {{ __('Reset Password') }}
                            </button>     
                        </div>
                    </form>                       
                </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</section>
@endsection
