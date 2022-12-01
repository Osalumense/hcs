@extends('admin.layouts.app')

@section('content')
<section class="">
  <div>
    <a href="{{url("admin/counsellors")}}" class="bg-indigo-500 hover:bg-indigo-600 relative shadow-xl rounded-md p-2 mb-12 lg:mb-3 text-gray-100 my-4">
      Back to Counsellors
    </a>
  </div>
    
    <form method="POST" action="{{ url('/admin/counsellors/add') }}" class="mx-auto container max-w-2xl md:w-3/4 shadow-xl">
      @csrf
      <input value="20" name="type" hidden>
      <div class="bg-gray-100 p-4 border-t-2 bg-opacity-5 border-indigo-400 rounded-t">
        <h2 class="font-bold text-2xl my-3">Add Counsellor</h2>
        <hr>
        <div class="max-w-sm mx-auto md:w-full md:mx-0">
        </div>
      </div>
      <div class="bg-white space-y-6">
        <div class="md:inline-flex space-y-4 md:space-y-0 w-full p-4 text-gray-500 items-center">
          <h2 class="md:w-1/3 max-w-sm mx-auto">Account</h2>
          <div class="md:w-2/3 max-w-sm mx-auto">
            <label class="text-sm text-gray-400">Email</label>
            <div class="w-full inline-flex border">
              <div class="pt-2 w-1/12 bg-gray-100 bg-opacity-50">
                <svg
                  fill="none"
                  class="w-6 text-gray-400 mx-ahiduto"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"
                  />
                </svg>
              </div>
              <input
                type="email"
                name="email"
                class="w-11/12 focus:outline-none focus:text-gray-600 p-2"
                required
              />
            </div>
            @error('email')
              <span class="text-red-500" role="alert">{{ $message }}
              </span>
            @enderror
          </div>
        </div>

        <hr />
        <div class="md:inline-flex  space-y-4 md:space-y-0  w-full p-4 text-gray-500 items-center">
          <h2 class="md:w-1/3 mx-auto max-w-sm">Personal info</h2>
          <div class="md:w-2/3 mx-auto max-w-sm space-y-5">
            <div>
              <label class="text-sm text-gray-400">First name</label>
              <div class="w-full inline-flex border">
                <div class="w-1/12 pt-2 bg-gray-100">
                  <svg
                    fill="none"
                    class="w-6 text-gray-400 mx-auto"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"
                    />
                  </svg>
                </div>
                <input
                  type="text"
                  name="first_name"
                  class="w-11/12 focus:outline-none focus:text-gray-600 p-2"
                />
              </div>
              @error('first_name')
                <span class="text-red-500" role="alert">{{ $message }}
                </span>
              @enderror
            </div>
            <div>
              <label class="text-sm text-gray-400">Last name</label>
              <div class="w-full inline-flex border">
                <div class="w-1/12 pt-2 bg-gray-100">
                  <svg
                    fill="none"
                    class="w-6 text-gray-400 mx-auto"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"
                    />
                  </svg>
                </div>
                <input
                  type="text"
                  name="last_name"
                  class="w-11/12 focus:outline-none focus:text-gray-600 p-2"
                />
              </div>
              @error('last_name')
                <span class="text-red-500" role="alert">{{ $message }}
                </span>
              @enderror
            </div>
            <div>
              <label class="text-sm text-gray-400">Staff ID</label>
              <div class="w-full inline-flex border">
                <div class="pt-2 w-1/12 bg-gray-100 bg-opacity-50">
                  <svg
                    fill="none"
                    class="w-6 text-gray-400 mx-auto"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"
                    />
                  </svg>
                </div>
                <input
                  type="text"
                  name="staff_id"
                  class="w-11/12 focus:outline-none focus:text-gray-600 p-2"
                  required
                />
              </div>
              @error('staff_id')
                <span class="text-red-500" role="alert">{{ $message }}
                </span>
              @enderror
            </div>
            <div>
              <label class="text-sm text-gray-400">Phone number</label>
              <div class="w-full inline-flex border">
                <div class="pt-2 w-1/12 bg-gray-100">
                  <svg
                    fill="none"
                    class="w-6 text-gray-400 mx-auto"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"
                    />
                  </svg>
                </div>
                <input
                  type="text"
                  name="mobile_number"
                  class="w-11/12 focus:outline-none focus:text-gray-600 p-2"
                />
              </div>
              @error('mobile_number')
                <span class="text-red-500" role="alert">{{ $message }}
                </span>
              @enderror
            </div>
            <div>
              <label class="text-sm text-gray-400">Gender</label>
              <div class="w-full inline-flex border">
                <div class="w-1/12 pt-2 bg-gray-100">
                  <svg
                    fill="none"
                    class="w-6 text-gray-400 mx-auto"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"
                    />
                  </svg>
                </div>
                <select class="w-11/12 focus:outline-none focus:text-gray-600 p-2" name="gender" required>
                  @foreach (Gender::getAll() as $key => $value)
                    <option value="{{$key}}">{{$value}}</option>
                  @endforeach
              </select>
              </div>
              @error('gender')
                <span class="text-red-500" role="alert">{{ $message }}
                </span>
              @enderror
            </div>
          </div>
        </div>

        <hr />
        <div class="flex justify-center items-center p-4 text-gray-100">
          <button class="w-2/5 max-w-sm rounded-md text-center bg-indigo-400 hover:bg-indigo-500 py-2 px-4 inline-flex focus:outline-none shadow-xl">
            Add 
          </button>
        </div>
      </div>
    </form>
</section>    
@endsection