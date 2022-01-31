@extends('layouts.app')

@section('content')
<section class="forms d-flex align-items-center">
    <div class="container-fluid text-light">
        <div class="row d-flex justify-content-center my-5">
            <div class="col-lg-5 mt-5 border border-2 justify-content-lg-end align-items-center px-lg-5">
                    <div class="text-center py-4 mt-4 pt-lg-0">
                        <p>Health Counselling System</p>
                        <h4 class="pt-5">Sign Up for Health Counselling</h4>
                    </div>
                    <div>
                        <div class="form-group my-3 py-2">
                            <input type="text" class="form-control form-control-input" id="exampleFormControlInput3" placeholder="Enter first name">
                        </div> 
                        <div class="form-group my-3 py-2">
                            <input type="text" class="form-control form-control-input" id="exampleFormControlInput3" placeholder="Enter last name">
                        </div> 
                        <div class="form-group my-3 py-2">
                            <select class="form-select" id="autoSizingSelect">
                                <option selected>Select Gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                              </select>
                        </div>
                        <div class="form-group my-3 py-2">
                            <input type="text" class="form-control form-control-input" id="exampleFormControlInput3" placeholder="Enter patient ID">
                        </div> 
                        <div class="form-group my-3 py-2">
                            <input type="email" class="form-control form-control-input" id="exampleFormControlInput3" placeholder="Enter email">
                        </div> 
                        <div class="form-group my-3 py-2">
                            <input type="password" class="form-control form-control-input" id="exampleFormControlInput3" placeholder="Enter password">
                        </div> 
                        <div class="form-group my-3 py-2">
                            <input type="password" class="form-control form-control-input" id="exampleFormControlInput3" placeholder="confirm password">
                        </div>                            
                    </div>
                    <div class="my-4">
                        <button class="btn mx-auto d-flex justify-content-center form-control-submit-button">Register</button>
                    </div>
                    <div class="d-flex justify-content-center">
                        <p class="para-light my-4">Already have an account? <span><a class="form-link" href="login.html"> Log in</a></span></p> <br/>
                        
                    </div>                        
                </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</section>

@endsection