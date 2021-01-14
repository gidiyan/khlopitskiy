<div id="sidebar" class="sidebar-menu">
    <div class="flex items-center justify-center mt-4">
        <div class="flex items-center color4">
            <span class="text-white text-2xl mx-2 font-semibold">Админка</span>
        </div>
    </div>
    <nav class="mt-4">
        <a class="nav-link{{ request()->is('admin') ? ' active' : '' }}" href="{{ route("admin.home") }}">
            <i class="fas fa-house-user"></i>
            <span class="mx-4 text-white">Стартовая</span>
        </a>
        <a class="nav-link{{ request()->is('admin/products*') ? ' active' : '' }}" href="{{ route('admin.products.index') }}">
            <i class="fas fa-object-ungroup text-white"></i>
            <span class="mx-4 text-white">Проекты</span>
        </a>
        <a class="nav-link{{ request()->is('admin/products*') ? ' active' : '' }}" href="{{ route('admin.products.index') }}">
            <i class="far fa-building text-white"></i>
            <span class="mx-4 text-white">ЖК</span>
        </a>
        <a class="nav-link{{ request()->is('admin/products*') ? ' active' : '' }}" href="{{ route('admin.products.index') }}">
            <i class="far fa-object-group text-white"></i>
            <span class="mx-4 text-white">Категории проектов</span>
        </a>
        <a class="nav-link{{ request()->is('admin/products*') ? ' active' : '' }}" href="{{ route('admin.products.index') }}">
            <i class="fab fa-creative-commons-nd text-white"></i>
            <span class="mx-4 text-white">Типы работ</span>
        </a>
        <a class="nav-link{{ request()->is('admin/products*') ? ' active' : '' }}" href="{{ route('admin.products.index') }}">
            <i class="fas fa-paint-roller text-white"></i>
            <span class="mx-4 text-white">Работы</span>
        </a>
        <a class="nav-link{{ request()->is('admin/products*') ? ' active' : '' }}" href="{{ route('admin.products.index') }}">
            <i class="fas fa-users text-white"></i>
            <span class="mx-4 text-white">Пользователи</span>
        </a>
    </nav>
</div>
