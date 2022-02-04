          <!-- Sidebar backdrop -->
          <div
            x-show.in.out.opacity="isSidebarOpen"
            class="fixed inset-0 z-10 bg-black bg-opacity-20 lg:hidden"
            style="backdrop-filter: blur(14px); -webkit-backdrop-filter: blur(14px)"
          ></div>
    
          <!-- Sidebar -->
          <aside
            x-transition:enter="transition transform duration-300"
            x-transition:enter-start="-translate-x-full opacity-30  ease-in"
            x-transition:enter-end="translate-x-0 opacity-100 ease-out"
            x-transition:leave="transition transform duration-300"
            x-transition:leave-start="translate-x-0 opacity-100 ease-out"
            x-transition:leave-end="-translate-x-full opacity-0 ease-in"
            class="fixed inset-y-0 z-10 flex flex-col flex-shrink-0 w-64 max-h-screen overflow-hidden transition-all transform bg-white border-r shadow-lg lg:z-auto lg:static lg:shadow-none"
            :class="{'-translate-x-full lg:translate-x-0 lg:w-20': !isSidebarOpen}"
          >
            <!-- sidebar header -->
            <div class="flex items-center justify-between flex-shrink-0 p-2" :class="{'lg:justify-center': !isSidebarOpen}">
              <span class="p-2 text-xl font-semibold leading-8 tracking-wider uppercase whitespace-nowrap">
                HCS<span :class="{'lg:hidden': !isSidebarOpen}"> Dashboard</span>
              </span>
              <button @click="toggleSidbarMenu()" class="p-2 rounded-md lg:hidden">
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
            <!-- Sidebar links -->
            <nav class="flex-1 overflow-hidden hover:overflow-y-auto">
              <ul class="p-2 overflow-hidden">
                <li>
                  <a
                    href="/admin"
                    class="flex items-center p-2 space-x-2 rounded-md hover:bg-gray-100"
                    :class="{'justify-center': !isSidebarOpen}"
                  >
                    <span>
                      <i class='bx bx-home bx-sm'></i>
                    </span>
                    <span :class="{ 'lg:hidden': !isSidebarOpen }">Home</span>
                  </a>
                </li>

                <li>
                    <a
                      href="{{ url('/admin/counsellors') }}"
                      class="flex items-center p-2 space-x-2 rounded-md hover:bg-gray-100"
                      :class="{'justify-center': !isSidebarOpen}"
                    >
                      <span>
                        <i class='bx bx-user-check bx-sm'></i>
                      </span>
                      <span :class="{ 'lg:hidden': !isSidebarOpen }">Counsellors</span>
                    </a>
                  </li>

                  <li>
                    <a
                      href="{{ url('/admin/users') }}"
                      class="flex items-center p-2 space-x-2 rounded-md hover:bg-gray-100"
                      :class="{'justify-center': !isSidebarOpen}"
                    >
                      <span>
                        <i class='bx bx-user bx-sm'></i>
                      </span>
                      <span :class="{ 'lg:hidden': !isSidebarOpen }">Users</span>
                    </a>
                  </li>
                <!-- Sidebar Links... -->
              </ul>
            </nav>
            <!-- Sidebar footer -->
            <div class="flex-shrink-0 p-2 border-t max-h-14">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                <button
                    class="flex items-center justify-center w-full px-4 py-2 space-x-1 font-medium tracking-wider uppercase bg-gray-100 border rounded-md focus:outline-none focus:ring"
                >
                    <span>
                    <svg
                        class="w-6 h-6"
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                    >
                        <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"
                        />
                    </svg>
                    </span>
                    <span :class="{'lg:hidden': !isSidebarOpen}"> Logout </span>
                </button>
                </form>
            </div>
          </aside>