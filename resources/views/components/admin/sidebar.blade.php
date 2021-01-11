<div id="sidebar" class="sidebar-menu transform -translate-x-full ease-in">
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
    </nav>
</div>
