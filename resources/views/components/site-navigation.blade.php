<div class="z-50 shadow-sm sticky top-0 bg-gradient-to-b lg:from-color1 lg:to-color3 hover:from-color5 hover:to-color3">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-1 md:py-4">
        <div class="flex items-center justify-between md:justify-start">
            <!-- Menu Trigger -->
            <button type="button" class="md:hidden w-10 h-10 rounded-lg -ml-2 flex justify-center items-center">
                <svg class="text-gray-500 w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
            <!-- ./ Menu Trigger -->
            <div class="flex-shrink-0 flex items-center justify-between ">
                <a href="{{ route('main.page') }}" class="font-bold text-white text-2xl mx-2 text-white">
                    Khlopitskiy
                </a>
            </div>

            <div class="hidden md:flex space-x-3 flex-1 lg:ml-8">
                <a href="/" class="nav-link px-2 py-2 hover:bg-gray-100 rounded-lg text-gray-900 hover:text-gray-600" :active="request()->routeIs('main.page')">Главная</a>
                <a href="#" class="nav-link px-2 py-2 hover:bg-gray-100 rounded-lg text-gray-400 hover:text-gray-600">Проекты</a>
                <a href="#" class="nav-link px-2 py-2 hover:bg-gray-100 rounded-lg text-gray-400 hover:text-gray-600">О нас</a>
                <a href="#" class="nav-link px-2 py-2 hover:bg-gray-100 rounded-lg text-gray-400 hover:text-gray-600">Калькулятор работ</a>
            </div>

            <div class="flex items-center justify-end">
                 <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
        <a class="text-gray-500">
          <a href="https://www.facebook.com/resident.er" rel="noopener noreferrer" class="text-white ml-1"
             target="_blank"><i class="fab fa-facebook-f text-2xl hover:text-blue-500"></i></a>
        </a>
        <a class="ml-3 text-gray-500">
          <a href="https://www.instagram.com/resident_er/" rel="noopener noreferrer" class="text-white ml-1"
             target="_blank"><i class="fab fa-instagram text-2xl hover:text-red-600 hover:-rotate-45"></i></a>
        </a>
                     </a>
                     <a class="ml-3 text-gray-500">
          <a href="tel:+3800631409232" rel="noopener noreferrer" class="text-white ml-1"
             target="_blank"><i class="fas fa-mobile-alt text-2xl hover:text-gray-700 "></i></a>
        </a>
                  <a class="ml-3 text-gray-500">
          <a href="viber://chat/?number=+380631409232&lang=en" rel="noopener noreferrer" class="text-white ml-1"
             target="_blank"><i class="fab fa-viber text-2xl hover:text-pink-700"></i></a>
        </a>
                         <a class="ml-3 text-gray-500">
          <a href="https://wa.me/380631409232?lang=ru&text=У%20меня%20есть%20вопрос" rel="noopener noreferrer"
             class="text-white ml-1"
             target="_blank"><i class="fab fa-whatsapp text-2xl hover:text-green-300"></i></a>
        </a>
      </span>
            </div>

            <div class="flex items-center space-x-4">

                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/dashboard') }}">
                            <button type="button" class="hidden md:block w-10 h-10 rounded-lg bg-gray-100 border border-gray-200 flex justify-center items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                </svg>
                            </button>
                        </a>
                        <a href="{{ url('/logout') }}">
                            <button type="button" class="hidden md:block w-10 h-10 rounded-lg bg-gray-100 border border-gray-200 flex justify-center items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" />
                                </svg>
                            </button>
                        </a>

                    @else
                        <a href="{{ route('login') }}">
                            <button type="button" class="hidden md:block w-10 h-10 rounded-lg bg-gray-100 border border-gray-200 flex justify-center items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                                </svg>
                            </button>
                        </a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">
                                <button type="button" class="hidden md:block w-10 h-10 rounded-lg bg-gray-100 border border-gray-200 flex justify-center items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6zM16 7a1 1 0 10-2 0v1h-1a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V7z" />
                                    </svg>
                                </button>
                            </a>
                        @endif
                    @endauth
                @endif
            </div>
        </div>
    </div>
</div>


