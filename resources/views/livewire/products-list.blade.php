<div>
    <div class="w-full flex pb-10">
        <div class="w-3/6 mx-1">
            <input placeholder="Поиск проекта" wire:model.debounce.300ms="search">
        </div>
        <div class="w-1/6 mx-1  relative">
            <select wire:model="sortField">
                <option value="name">Название</option>
                <option value="details">Детальнее</option>
                <option value="created_at">Дата создания</option>
            </select>
        </div>
        <div class="w-1/6 mx-1 relative">
            <select wire:model="sortAsc">
                <option value="1">Возрастание</option>
                <option value="0">Спадание</option>
            </select>
        </div>
    </div>
    @if ($products->isNotEmpty())
        <table class="border border-black shadow-2xl">
            <thead class="border border-black">
            <tr>
                <th class="uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Название</th>
                <th class="uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Детальнее</th>
                <th class="uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Статус</th>
                <th class="uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Дата создания</th>
                <th class="uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Действия</th>
            </tr>
            </thead>
            <tbody>
            @forelse ($products as $product)
                <tr>
                    <td class="uppercase tracking-wide text-gray-700 text-xs mb-2">{{$product->name}}</td>
                    <td class="uppercase tracking-wide text-gray-700 text-xs mb-2">{{$product->details}}</td>
                    <td class="uppercase tracking-wide text-gray-700 text-xs mb-2">{{$product->status}}</td>
                    <td class="uppercase tracking-wide text-gray-700 text-xs mb-2">{{$product->created_at}}</td>
                    <td class="uppercase tracking-wide text-gray-700 text-xs mb-2">
                        <a href="{{route('admin.products.show',$product->id)}}"
                           class="btn-sm border border-black rounded btn-green">View</a>
                        <a href="{{route('admin.products.edit',$product->id)}}"
                           class="btn-sm border border-black rounded btn-indigo">Edit</a>
                        <form action="{{route('admin.products.destroy', $product->id)}}" method="POST"
                              style="display: inline-block">
                            @csrf @method('delete')
                            <input type="submit" class="btn-sm border border-black rounded btn-red uppercase"
                                   value="Delete">
                        </form>
                    </td>
                </tr>
            @empty
                <h2>No Products Yet</h2>
            @endforelse
            </tbody>
        </table>
        {{ $products ->links() }}
    @endif
</div>

