@extends('layouts.app')

@php
    $user = Auth::user();
    $name = $user->first_name;    
@endphp

@section('content')
<section class="dashboard d-flex py-5">
    <div class="container mt-4">
        {{-- <div class="row justify-content-center mt-5">
            <div class="col-lg-3 mb-5">
                <div class="card">
                    <div class="card-header">{{ __('Navigation') }}</div>

                    <div class="card-body">
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
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
                            <button class="btn p-2 btn-reverse" type="submit">Logout</button>
                        </form>
                    </div>
                </div>
            </div>
        </div> --}}
        <div class="row mt-5">
            <div class="col-md-4">
                <div class="card m-2">
                    <div class="card-header">{{ __('Navigation') }}</div>
                        <div class="card-body ">
                            <div class="nav flex-column nav-pills me-3 bg-opacity-50 mx-3 p-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                
                                <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Home</button>
                                <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Profile</button>
                                <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Chat</button>
                                <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</button>
                            </div>
                        </div>
                </div>
            </div>

            <div class="col-md">
                <div class="card m-2">
                    <div class="card-header">{{ __('Welcome')  }}
                        @php
                            echo '<strong>' . $name . '</strong>';
                        @endphp
                    </div>

                    <div class="card-body">
                        <div class="tab-content p-3  bg-white" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">Loremipsum dolor dfjfidfngdd gdjgdgdfsd as asasaklas oiiufhrihsfhsf ujisnfshfuifhs </div>
                            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">Loremipsum dolor dfjfidfngdd gdjgdgdfsd as asasaklas oiiufhrihsfhsf ujisnfshfuifhs </div>
                            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                                <div class="card" id="chat2">
                                    <div class="card-header d-flex justify-content-between align-items-center p-3">
                                    <h5 class="mb-0">Chat</h5>
                                    </div>
                                    <div class="card-body overflow-auto" data-mdb-perfect-scrollbar="true" style="position: relative; height: 300px">
                        
                                    <div class="d-flex flex-row justify-content-start">
                                        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3-bg.webp" alt="avatar 1"
                                        style="width: 45px; height: 100%;">
                                        <div>
                                        <p class="small p-2 ms-3 mb-1 rounded-3" style="background-color: #f5f6f7;">Hi</p>
                                        <p class="small p-2 ms-3 mb-1 rounded-3" style="background-color: #f5f6f7;">How are you ...???</p>
                                        <p class="small p-2 ms-3 mb-1 rounded-3" style="background-color: #f5f6f7;">What are you doing
                                            tomorrow? Can we come up a bar?</p>
                                        <p class="small ms-3 mb-3 rounded-3 text-muted">23:58</p>
                                        </div>
                                    </div>
                        
                                    <div class="divider d-flex align-items-center mb-4">
                                        <p class="text-center mx-3 mb-0" style="color: #a2aab7;">Today</p>
                                    </div>
                        
                                    <div class="d-flex flex-row justify-content-end mb-4 pt-1">
                                        <div>
                                        <p class="small p-2 me-3 mb-1 text-white rounded-3 bg-primary">Hiii, I'm good.</p>
                                        <p class="small p-2 me-3 mb-1 text-white rounded-3 bg-primary">How are you doing?</p>
                                        <p class="small p-2 me-3 mb-1 text-white rounded-3 bg-primary">Long time no see! Tomorrow office. will
                                            be free on sunday.</p>
                                        <p class="small me-3 mb-3 rounded-3 text-muted d-flex justify-content-end">00:06</p>
                                        </div>
                                        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava4-bg.webp" alt="avatar 1"
                                        style="width: 45px; height: 100%;">
                                    </div>
                        
                                    <div class="d-flex flex-row justify-content-start mb-4">
                                        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3-bg.webp" alt="avatar 1"
                                        style="width: 45px; height: 100%;">
                                        <div>
                                        <p class="small p-2 ms-3 mb-1 rounded-3" style="background-color: #f5f6f7;">Okay</p>
                                        <p class="small p-2 ms-3 mb-1 rounded-3" style="background-color: #f5f6f7;">We will go on Sunday?</p>
                                        <p class="small ms-3 mb-3 rounded-3 text-muted">00:07</p>
                                        </div>
                                    </div>
                        
                                    <div class="d-flex flex-row justify-content-end mb-4">
                                        <div>
                                        <p class="small p-2 me-3 mb-1 text-white rounded-3 bg-primary">That's awesome!</p>
                                        <p class="small p-2 me-3 mb-1 text-white rounded-3 bg-primary">I will meet you Sandon Square sharp at
                                            10 AM</p>
                                        <p class="small p-2 me-3 mb-1 text-white rounded-3 bg-primary">Is that okay?</p>
                                        <p class="small me-3 mb-3 rounded-3 text-muted d-flex justify-content-end">00:09</p>
                                        </div>
                                        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava4-bg.webp" alt="avatar 1"
                                        style="width: 45px; height: 100%;">
                                    </div>
                        
                                    </div>
                                    <div class="card-footer text-muted d-flex justify-content-start align-items-center p-3">
                                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3-bg.webp" alt="avatar 3"
                                        style="width: 40px; height: 100%;">
                                    <input type="text" class="form-control form-control-lg" id="exampleFormControlInput1"
                                        placeholder="Type message">
                                    <a class="ms-1 text-muted" href="#!"><i class="fas fa-paperclip"></i></a>
                                    <a class="ms-3 text-muted" href="#!"><i class="fas fa-smile"></i></a>
                                    <a class="ms-3" href="#!"><i class="fas fa-paper-plane"></i></a>
                                    </div>
                                </div>  
                            </div>
                            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">Loremipsum dolor dfjfidfngdd gdjgdgdfsd as asasaklas oiiufhrihsfhsf ujisnfshfuifhs </div>
                        </div>
                    </div>
                </div>

            </div>


            <div class="d-flex align-items-start p-2 rounded-3">
                

                
            </div>

        </div>

        
    </div>
</section>
@endsection
