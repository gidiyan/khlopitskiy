<div>
    <div class="w-full flex pb-10">
        <div class="w-3/6 mx-1">
            <input type="text" placeholder="Поиск ЖК" wire:model.debounce.300ms="search">
        </div>
        <div class="w-1/6 mx-1  relative">
            <select wire:model="sortField">
                <option value="name">ID</option>
                <option value="name">Название</option>
                <option value="created_at">Дата создания</option>
            </select>
        </div>
        <div class="w-1/6 mx-1 relative">
            <select wire:model="sortAsc">
                <option value="1">Возрастание</option>
                <option value="0">Убывание</option>
            </select>
        </div>
    </div>
    @if ($brands->isNotEmpty())
        <table class="border border-black shadow-2xl">
            <thead class="border border-black">
            <tr>
                <th class="uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">ID</th>
                <th class="uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Название</th>
                <th class="uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Статус</th>
                <th class="uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Дата создания</th>
                <th class="uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Действия</th>
            </tr>
            </thead>
            <tbody>
            @forelse ($brands as $brand)
                <tr>
                    <td class="uppercase tracking-wide text-gray-700 text-xs mb-2">{{$brand->id}}</td>
                    <td class="uppercase tracking-wide text-gray-700 text-xs mb-2">{{$brand->name}}</td>
                    <td class="uppercase tracking-wide text-gray-700 text-xs mb-2">{{$brand->status}}</td>
                    <td class="uppercase tracking-wide text-gray-700 text-xs mb-2">{{$brand->created_at}}</td>
                    <td class="uppercase tracking-wide text-gray-700 text-xs mb-2">
                        <a href="{{route('admin.brands.show',$brand->id)}}"
                           class="btn-sm border border-black rounded btn-green">View</a>
                        <a href="{{route('admin.brands.edit',$brand->id)}}"
                           class="btn-sm border border-black rounded btn-indigo">Edit</a>
                        <form action="{{route('admin.brands.destroy', $brand->id)}}" method="POST"
                              style="display: inline-block">
                            @csrf @method('delete')
                            <input type="submit" class="btn-sm border border-black rounded btn-red uppercase"
                                   value="Delete">
                        </form>
                    </td>
                </tr>
            @empty
                <h2>Пока нет ЖК</h2>
            @endforelse
            </tbody>
        </table>
        {{ $brands ->links() }}
    @endif
</div>
