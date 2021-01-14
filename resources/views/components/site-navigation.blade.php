<nav class="z-50 shadow-sm sticky top-0 bg-gradient-to-b from-color1 to-color3  hover:from-color5 hover:to-color3">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-1 md:py-4">
        <div class="flex items-center justify-between md:justify-between">
            <!-- Menu Trigger -->
            <button type="button" class="navbar-burger md:hidden w-10 h-10 rounded-lg -ml-2 flex justify-center items-center">
                <svg class="text-gray-500 w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>
            <!-- ./ Menu Trigger -->
            <div class="flex-shrink-0 flex items-center justify-between order-1">
                <a href="{{ route('main') }}" class="font-bold text-white text-2xl mx-2 text-white">
                    Khlopitskiy
                </a>
            </div>

            <div  id="main-nav" class="toggle hidden md:flex w-full md:w-auto text-right text-bold mt-5 md:mt-0 md:border-none order-2">
                <a href="/" class="nav-link px-2 py-2 hover:bg-gray-100 rounded-lg text-green-500 hover:text-gray-600 {{ (request()->routeIs('main')) ? 'active' : '' }}">Главная</a>
                <a href="/projects"
                   class="nav-link px-2 py-2 hover:bg-gray-100 rounded-lg text-gray-400 hover:text-gray-600 {{ (request()->routeIs('products')) ? 'active' : '' }}">Проекты</a>
                <a href="/pricelist" class="nav-link px-2 py-2 hover:bg-gray-100 rounded-lg text-gray-400 hover:text-gray-600 {{ (request()->routeIs('pricelist')) ? 'active' : '' }}">Прайс</a>
                <a href="#" class="nav-link px-2 py-2 hover:bg-gray-100 rounded-lg text-gray-400 hover:text-gray-600">О
                    нас</a>
                <a href="#" class="nav-link px-2 py-2 hover:bg-gray-100 rounded-lg text-gray-400 hover:text-gray-600">Калькулятор
                    работ</a>
            </div>

            <div class="flex items-center justify-end order-3">
              <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
                 <a class="text-gray-500">
                    <a href="https://www.facebook.com/resident.er" rel="noopener noreferrer" class="text-white ml-1"
                       target="_blank"><i class="fab fa-facebook-f text-2xl hover:text-blue-500"></i></a>
                 </a>
                 <a class="ml-3 text-gray-500">
                     <a href="https://www.instagram.com/resident_er/" rel="noopener noreferrer" class="text-white ml-1"
                        target="_blank"><i
                             class="fab fa-instagram text-2xl hover:text-red-600 hover:-rotate-45"></i></a>
                 </a>
                 <a class="ml-3 text-gray-500">
                    <a href="tel:+3800631409232" rel="noopener noreferrer" class="text-white ml-1"
                       target="_blank"><i class="fas fa-mobile-alt text-2xl hover:text-gray-700 "></i></a>
                 </a>
                 <a class="ml-3 text-gray-500">
                    <a href="viber://chat/?number=+380631409232&lang=en" rel="noopener noreferrer"
                       class="text-white ml-1"
                       target="_blank"><i class="fab fa-viber text-2xl hover:text-pink-700"></i></a>
                 </a>
                 <a class="ml-3 text-gray-500">
                    <a href="https://wa.me/380631409232?lang=ru&text=У%20меня%20есть%20вопрос" rel="noopener noreferrer"
                       class="text-white ml-1"
                       target="_blank"><i class="fab fa-whatsapp text-2xl hover:text-green-300"></i></a>
                 </a>
              </span>
            </div>
        </div>
    </div>
</nav>


