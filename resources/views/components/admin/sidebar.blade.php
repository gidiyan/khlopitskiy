<div id="sidebar" class="sidebar-menu">
    <div class="flex items-center justify-center mt-4">
        <div class="flex items-center color4">
            <span class="text-white text-2xl mx-2 font-semibold">Админка</span>
        </div>
    </div>
    <nav class="mt-4">
        <a class="nav-link{{ request()->is('admin') ? ' active' : '' }}" href="{{ route("admin.home") }}">
            <i class="fas fa-house-user"></i>
            <span class="mx-4">Стартовая</span>
        </a>
        <a class="nav-link{{ request()->is('admin/products*') ? ' active' : '' }}" href="{{ route('admin.products.index') }}">
            <i class="fas fa-object-ungroup"></i>
            <span class="mx-4">Проекты</span>
        </a>
        <a class="nav-link{{ request()->is('admin/products*') ? ' active' : '' }}" href="{{ route('admin.products.index') }}">
            <i class="far fa-building"></i>
            <span class="mx-4">ЖК</span>
        </a>
        <a class="nav-link{{ request()->is('admin/products*') ? ' active' : '' }}" href="{{ route('admin.products.index') }}">
            <i class="far fa-object-group"></i>
            <span class="mx-4">Категории проектов</span>
        </a>
        <a class="nav-link{{ request()->is('admin/products*') ? ' active' : '' }}" href="{{ route('admin.products.index') }}">
            <i class="fab fa-creative-commons-nd"></i>
            <span class="mx-4">Типы работ</span>
        </a>
        <a class="nav-link{{ request()->is('admin/products*') ? ' active' : '' }}" href="{{ route('admin.products.index') }}">
            <i class="fas fa-paint-roller"></i>
            <span class="mx-4">Работы</span>
        </a>
        <a class="nav-link{{ request()->is('admin/products*') ? ' active' : '' }}" href="{{ route('admin.products.index') }}">
            <i class="fas fa-users"></i>
            <span class="mx-4">Пользователи</span>
        </a>
    </nav>
</div>
