<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="{{mix('css/app.css')}}"/>
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.datatables.net/1.11.0/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="{{ asset('assets/notiflix/dist/notiflix-3.2.4.min.css') }}">
    <style>
      [x-cloak] { 
            display: none !important; 
        }
    </style>
    
    @yield('styles')
</head>
<body>

    <div>
        <div class="flex h-screen overflow-y-hidden bg-white" x-data="setup()" x-init="$refs.loading.classList.add('hidden')">
          <!-- Loading screen -->
          <div
            x-ref="loading"
            class="fixed inset-0 z-50 flex items-center justify-center text-white bg-black bg-opacity-50"
            style="backdrop-filter: blur(14px); -webkit-backdrop-filter: blur(14px)"
          >
            Please wait <br/>
            Page Loading...
          </div>

          @include('admin.layouts.sidebar')
    
          <div class="flex flex-col flex-1 h-full overflow-hidden">
            <!-- Navbar -->
            <header class="flex-shrink-0 border-b">
              <div class="flex items-center justify-between p-2">
                <!-- Navbar left -->
                <div class="flex items-center space-x-3">
                  <span class="p-2 text-xl font-semibold tracking-wider uppercase lg:hidden">K-WD</span>
                  <!-- Toggle sidebar button -->
                  <button @click="toggleSidbarMenu()" class="p-2 rounded-md focus:outline-none focus:ring">
                    <svg
                      class="w-4 h-4 text-gray-600"
                      :class="{'transform transition-transform -rotate-180': isSidebarOpen}"
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke="currentColor"
                    >
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7" />
                    </svg>
                  </button>
                </div>
    
                <!-- Navbar right -->
                <div class="relative flex items-center space-x-3">
    
                  <div class="items-center hidden space-x-3 md:flex">
                    <!-- Notification Button -->
                    <div class="relative" x-data="{ isOpen: false }">
                      <!-- red dot -->
                      <div class="absolute right-0 p-1 bg-red-400 rounded-full animate-ping"></div>
                      <div class="absolute right-0 p-1 bg-red-400 border rounded-full"></div>
                      <button
                        @click="isOpen = !isOpen"
                        class="p-2 bg-gray-100 rounded-full hover:bg-gray-200 focus:outline-none focus:ring hover:animate-pulse"
                      >
                        <i class='bx bx-bell bx-sm bx-tada-hover'></i>
                      </button>
    
                      <!-- Dropdown card -->
                      <div
                        @click.away="isOpen = false"
                        x-show.transition.opacity="isOpen"
                        class="absolute w-48 max-w-md mt-3 transform bg-white rounded-md shadow-lg -translate-x-3/4 min-w-max"
                      >
                        <div class="p-4 font-medium border-b">
                          <span class="text-gray-800">Notification</span>
                        </div>
                        <ul class="flex flex-col p-2 my-2 space-y-1">
                          <li>
                            <a href="#" class="block px-2 py-1 transition rounded-md hover:bg-gray-100">Link</a>
                          </li>
                          <li>
                            <a href="#" class="block px-2 py-1 transition rounded-md hover:bg-gray-100">Another Link</a>
                          </li>
                        </ul>
                      </div>
                    </div>
    
                  </div>
    
                  <!-- avatar button -->
                  <div class="relative" x-data="{ isOpen: false }">
                    <button @click="isOpen = !isOpen" class="">
                      <i class='bx bxs-user-circle bx-lg bx-tada-hover'></i>
                    </button>
                   
    
                    <!-- Dropdown card -->
                    <div
                      @click.away="isOpen = false"
                      x-show.transition.opacity="isOpen"
                      class="absolute mt-1 transform -translate-x-full bg-white rounded-md shadow-lg min-w-max"
                    >
                      <div class="flex flex-col p-4 space-y-1 font-medium border-b">
                        <span class="text-gray-800">User</span>
                        <span class="text-sm text-gray-400">ahmed.kamel@example.com</span>
                      </div>
                      <div class="flex items-center justify-center hover:bg-gray-100 text-red-600 p-2 border-t">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button class="px-2 py-1 transition rounded-md" type="submit">Logout</button>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </header>
            <!-- Main content -->
            <main class="flex-1 max-h-full p-5 overflow-hidden overflow-y-scroll">
              @yield('content')


              
            </main>

            <!-- Main footer -->
            {{-- <footer class="flex items-center justify-between flex-shrink-0 p-4 border-t max-h-14">
              <div>HCS &copy; <?=date('Y')?></div>
              
              <div>
                <!-- Github svg -->
                <div class="text-sm">
                    Made by
                    <a
                      class="text-blue-500 hover:bg-gray-200 p-1 rounded"
                      href="https://github.com/Osalumense"
                      target="_blank"
                      rel="noopener noreferrer"
                      >Stephen</a
                    >
                  </div>
              </div>
            </footer> --}}
    
          {{-- <!-- Setting panel button -->
          <div>
            <button
              @click="isSettingsPanelOpen = true"
              class="fixed right-0 px-4 py-2 text-sm font-medium text-white uppercase transform rotate-90 translate-x-8 bg-blue-600 top-1/2 rounded-b-md"
            >
              Settings
            </button>
          </div>
    
          <!-- Settings panel -->
          <div
            x-show="isSettingsPanelOpen"
            @click.away="isSettingsPanelOpen = false"
            x-transition:enter="transition transform duration-300"
            x-transition:enter-start="translate-x-full opacity-30  ease-in"
            x-transition:enter-end="translate-x-0 opacity-100 ease-out"
            x-transition:leave="transition transform duration-300"
            x-transition:leave-start="translate-x-0 opacity-100 ease-out"
            x-transition:leave-end="translate-x-full opacity-0 ease-in"
            class="fixed inset-y-0 right-0 flex flex-col bg-white shadow-lg bg-opacity-20 w-80"
            style="backdrop-filter: blur(14px); -webkit-backdrop-filter: blur(14px)"
          >
            <div class="flex items-center justify-between flex-shrink-0 p-2">
              <h6 class="p-2 text-lg">Settings</h6>
              <button @click="isSettingsPanelOpen = false" class="p-2 rounded-md focus:outline-none focus:ring">
                <svg
                  class="w-6 h-6 text-gray-600"
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                >
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
              </button>
            </div>
            <div class="flex-1 max-h-full p-4 overflow-hidden hover:overflow-y-scroll">
              <span>Settings Content</span>
              <!-- Settings Panel Content ... -->
            </div>
          </div> --}}
        </div>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdn.datatables.net/1.11.0/js/jquery.dataTables.min.js"></script>
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script>
          function APP() {
          }
      </script>
        <script src="{{ asset('assets/notiflix/dist/notiflix-3.2.4.min.js') }}"></script>
        <script>
          const setup = () => {
            return {
              loading: true,
              isSidebarOpen: false,
              toggleSidbarMenu() {
                this.isSidebarOpen = !this.isSidebarOpen
              },
              isSettingsPanelOpen: false,
              isSearchBoxOpen: false,
            }
          };
        </script>
        @yield('scripts')
        @stack('inline-scripts')       
    </div>    
</body>
</html>

