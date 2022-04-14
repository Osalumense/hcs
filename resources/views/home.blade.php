@extends('layouts.app')

@php
    $user = Auth::user();
    $name = $user->first_name;    
@endphp

@section('content')
<section class="dashboard d-flex py-5">
    <div class="container mt-4">
        <div class="row mt-5">
            <div class="d-flex justify-content-end">
                @if (Auth::user()->type == (UserType::USER))
                    <a class="btn-reverse text-center mb-3" href="{{ url('/chatify')}}">Chat with a Counsellor
                    @if ($unreadMsg != 0)
                        <span class="badge pulse">{{$unreadMsg}}</span>
                    @endif
                    </a>
                @else
                    <a class="btn-reverse text-center mb-3" href="{{ url('/chatify')}}">View Chats
                    @if ($unreadMsg != 0)
                        <span class="badge pulse">{{$unreadMsg}}</span>
                    @endif
                    </a>
                @endif
                
            </div>
            
            <div class="col-md-4">
                <div class="card m-2">
                    <div class="card-header">{{ __('Navigation') }}</div>
                        <div class="card-body bg-dark">
                            <div class="nav flex-column nav-pills mb-3 bg-opacity-50 mx-3 p-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                
                                <button class="btn-reverse active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Home</button>
                                <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Profile</button>
                                {{-- <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</button> --}}
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
                            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">Welcome to HCS, select the "Chat with counsellor" to begin your counselling sessions with your preferred therapist. </div>
                            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">Loremipsum dolor dfjfidfngdd gdjgdgdfsd as asasaklas oiiufhrihsfhsf ujisnfshfuifhs </div>
                            {{-- <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">Loremipsum dolor dfjfidfngdd gdjgdgdfsd as asasaklas oiiufhrihsfhsf ujisnfshfuifhs </div> --}}
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
