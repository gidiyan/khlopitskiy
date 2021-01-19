<x-admin.admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Удаленные ЖК') }}
        </h2>
        <a class="px-2 btn-md btn-blue hover:border-transparent float-right"
           href="{{route("admin.brands.index")}}">Назад</a>
    </x-slot>
    <div class="main-card">
        <div class="body">
            <div class="w-full">
                <table class="border border-black shadow-2xl">
                    <thead class="border border-black">
                    <tr>
                        <th class="uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">ID</th>
                        <th class="uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Название</th>
                        <th class="uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Удален</th>
                        <th class="uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Действия</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse ($brands as $brand)
                        <tr>
                            <th class="uppercase tracking-wide text-gray-700 text-xs mb-2">{{$brand->id}}</th>
                            <td class="uppercase tracking-wide text-gray-700 text-xs mb-2">{{$brand->name}}</td>
                            <td class="uppercase tracking-wide text-gray-700 text-xs mb-2">{{$brand->deleted_at}}</td>
                            <td class="uppercase tracking-wide text-gray-700 text-xs mb-2">
                                <form action="{{route('admin.brands.force', $brand->id)}}" method="POST"
                                      style="display: inline-block">
                                    @csrf @method('delete')
                                    <input type="submit" class="px-2 btn-md btn-red"
                                           value="Удалить из базы">
                                </form>
                                <form action="{{route('admin.brands.restore', $brand->id)}}" method="POST"
                                      style="display: inline-block">
                                    @csrf
                                    <input type="submit" class="px-2 btn-md btn-green"
                                           value="Восстановить">
                                </form>
                            </td>
                        </tr>
                    @empty
                        <h2>Пока нет удаленных ЖК</h2>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-admin.admin-layout>

