<x-site-layout>
    <x-site-navigation></x-site-navigation>
    <div class="bg-color3">
        <div class="py-6 text-center">
            <div class="py-6 text-center bg-color2">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-2">
                    <div class="flex">
                        <div class="md:flex-1">
                            @if(count($types) > 1)
                                <p class="mb-2 text-white font-bold">Выберите интересующий Вас тип работ</p>
                            @endif
                            <ul class="list-reset flex flex-wrap justify-around">
                                @forelse ($types as $type)
                                    <li class="mr-3">
                                        <a class="inline-block border border-blue-500 bg-color1 border-opacity-100 rounded py-1 px-3 bg-blue text-gray-100"
                                           href="{{ route('pricelist.by.type',$type->id) }}">{{$type->name}}</a>
                                    </li>
                                @empty No Types Yet
                                @endforelse
                                @if(count($types) == 1)
                                    <a class="inline-block border border-blue-500 bg-color1 border-opacity-100 rounded py-1 px-3 bg-blue text-gray-100"
                                       href="{{ route('pricelist') }}">Все типы работ</a>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-6 text-center bg-color3 color4 sticky top-20">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="py-6 mt-2 mb-2">
                    <div class="flex flex-col h-screen">
                        <div class="flex-grow overflow-auto">

                            @forelse ($types as $type)
                                <table class="relative w-full border border-black shadow-2xl mb-4">
                                    <thead>
                                    <tr>
                                        <th class="sticky top-0 uppercase tracking-wide text-gray-700 text-xs font-bold mb-2 bg-color3">
                                            Тип
                                            услуг
                                        </th>
                                        <th class="sticky top-0 uppercase tracking-wide text-gray-700 text-xs font-bold mb-2 bg-color3">
                                            Услуга
                                        </th>
                                        <th class="sticky top-0 uppercase tracking-wide text-gray-700 text-xs font-bold mb-2 bg-color3">
                                            Цена
                                        </th>
                                        <th class="sticky top-0 uppercase tracking-wide text-gray-700 text-xs font-bold mb-2 bg-color3">
                                            Детальнее
                                        </th>
                                    </tr>
                                    </thead>
                                    @forelse($jobs as $job)
                                        @if($type->id === $job->type_id)
                                            <tbody class="divide-y bg-color2">
                                            <tr>
                                                <td class="uppercase px-6 py-4 tracking-wide text-gray-700 text-xs mb-2">{{$type->name}}</td>
                                                <td class="uppercase px-6 py-4 tracking-wide text-gray-700 text-xs mb-2">{{$job->name}}</td>
                                                <td class="uppercase px-6 py-4 tracking-wide text-gray-700 text-xs mb-2">{{$job->price}}{{ config('settings.currency_symbol', '$') }}</td>
                                                <td class="uppercase px-6 py-4 tracking-wide text-gray-700 text-xs mb-2">{{$job->details}}</td>
                                            </tr>
                                            </tbody>
                                        @endif
                                    @empty
                                        <h2>No Jobs Yet</h2>
                                    @endforelse
                                </table>
                            @empty
                                <h2>No Jobs Yet</h2>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <x-site-footer></x-site-footer>
</x-site-layout>
