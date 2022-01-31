@extends('layouts.app')

@section('content')
<section class="contact d-flex align-items-center py-5" id="contact">
    <div class="container-fluid text-light">
        <div class="row d-flex justify-content-center mt-5">
            <div class="col-lg-5 border border-2 mt-3 justify-content-lg-end align-items-center px-lg-5">
                    <div class="text-center py-4 mt-4 pt-lg-0">
                        <p>Health Counselling System</p>
                        <h2 class="pt-5">Welcome Back</h2>
                    </div>
                    <div>
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
                        <p class="para-light my-4">Don't have an account yet? <span><a class="form-link" href="register.html"> Sign up</a></span></p> <br/>
                        
                    </div>

                    <div class="d-flex justify-content-center">
                        <a class="form-link mb-4" href="register.html"> Forgot password?</a>
                    </div>
                    
                </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</section>
@endsection