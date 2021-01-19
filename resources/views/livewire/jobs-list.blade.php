<div>
    <div class="w-full flex pb-10">
        <div class="w-3/6 mx-1">
            <input type="text" placeholder="Поиск работ" wire:model.debounce.300ms="search">
        </div>
        <div class="w-1/6 mx-1  relative">
            <select wire:model="sortField">
                <option value="name">Название</option>
                <option value="details">Описание</option>
                <option value="price">Цена</option>
                <option value="type_id">Тип работ(ID)</option>
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
    @if ($jobs->isNotEmpty())
        <table class="border border-black shadow-2xl">
            <thead class="border border-black">
            <tr>
                <th class="uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">ID</th>
                <th class="uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Название</th>
                <th class="uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Описание</th>
                <th class="uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Цена</th>
                <th class="uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Тип работ</th>
                <th class="uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Тип работ(ID)</th>
                <th class="uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Дата создания</th>
                <th class="uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Действия</th>
            </tr>
            </thead>
            <tbody>
            @forelse ($jobs as $job)
                <tr>
                    <td class="uppercase tracking-wide text-gray-700 text-xs mb-2">{{$job->id}}</td>
                    <td class="uppercase tracking-wide text-gray-700 text-xs mb-2">{{$job->name}}</td>
                    <td class="uppercase tracking-wide text-gray-700 text-xs mb-2">{{$job->details}}</td>
                    <td class="uppercase tracking-wide text-gray-700 text-xs mb-2 font-bold">{{$job->price}}</td>
                    <td class="uppercase tracking-wide text-gray-700 text-xs mb-2 text-center color4">@foreach($types as $type) @if($job->type_id == $type->id) {{$type->name}} @endif @endforeach</td>
                    <td class="uppercase tracking-wide text-gray-700 text-xs mb-2 font-bold">{{$job->type_id}}</td>
                    <td class="uppercase tracking-wide text-gray-700 text-xs mb-2">{{$job->created_at}}</td>
                    <td class="uppercase tracking-wide text-gray-700 text-xs mb-2">
                        <a href="{{route('admin.jobs.show',$job->id)}}"
                           class="btn-sm border border-black rounded btn-green">View</a>
                        <a href="{{route('admin.jobs.edit',$job->id)}}"
                           class="btn-sm border border-black rounded btn-indigo">Edit</a>
                        <form action="{{route('admin.jobs.destroy', $job->id)}}" method="POST"
                              style="display: inline-block">
                            @csrf @method('delete')
                            <input type="submit" class="btn-sm border border-black rounded btn-red uppercase"
                                   value="Delete">
                        </form>
                    </td>
                </tr>
            @empty
                <h2>Пока нет работ</h2>
            @endforelse
            </tbody>
        </table>
        {{ $jobs ->links() }}
    @endif
</div>
