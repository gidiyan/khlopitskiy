<x-admin.admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Удаленные типы работ') }}
        </h2>
        <a class="px-2 btn-md btn-blue hover:border-transparent float-right"
           href="{{route("admin.types.index")}}">Назад</a>
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
                    @forelse ($types as $type)
                        <tr>
                            <th class="uppercase tracking-wide text-gray-700 text-xs mb-2">{{$type->id}}</th>
                            <td class="uppercase tracking-wide text-gray-700 text-xs mb-2">{{$type->name}}</td>
                            <td class="uppercase tracking-wide text-gray-700 text-xs mb-2">{{$type->deleted_at}}</td>
                            <td class="uppercase tracking-wide text-gray-700 text-xs mb-2">
                                <form action="{{route('admin.types.force', $type->id)}}" method="POST"
                                      style="display: inline-block">
                                    @csrf @method('delete')
                                    <input type="submit" class="px-2 btn-md btn-red"
                                           value="Удалить из базы">
                                </form>
                                <form action="{{route('admin.types.restore', $type->id)}}" method="POST"
                                      style="display: inline-block">
                                    @csrf
                                    <input type="submit" class="px-2 btn-md btn-green"
                                           value="Восстановить">
                                </form>
                            </td>
                        </tr>
                    @empty
                        <h2>Пока нет удаленных категорий</h2>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-admin.admin-layout>

