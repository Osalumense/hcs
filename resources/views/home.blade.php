@extends('layouts.app')

@section('content')
<section class="contact d-flex py-5">
    <div class="container mt-4">
        <div class="row justify-content-center mt-5">
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
        </div>

        <div class="d-flex align-items-start m-3 p-2 rounded-3">
            <div class="nav flex-column nav-pills me-3 bg-secondary bg-opacity-50 mx-3 p-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
              <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Home</button>
              <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Profile</button>
              <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</button>
              <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</button>
            </div>
            <div class="tab-content p-3  bg-white" id="v-pills-tabContent">
              <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">Loremipsum dolor dfjfidfngdd gdjgdgdfsd as asasaklas oiiufhrihsfhsf ujisnfshfuifhs </div>
              <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">Loremipsum dolor dfjfidfngdd gdjgdgdfsd as asasaklas oiiufhrihsfhsf ujisnfshfuifhs </div>
              <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">Loremipsum dolor dfjfidfngdd gdjgdgdfsd as asasaklas oiiufhrihsfhsf ujisnfshfuifhs </div>
              <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">Loremipsum dolor dfjfidfngdd gdjgdgdfsd as asasaklas oiiufhrihsfhsf ujisnfshfuifhs </div>
            </div>
          </div>
    </div>
</section>
@endsection
