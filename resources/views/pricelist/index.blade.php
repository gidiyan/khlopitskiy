<x-site-layout>
    <x-site-navigation></x-site-navigation>
    <div class="py-6 text-center bg-color3 color4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-6">
            <div class="py-6 mt-2 mb-2">
                <div class="flex flex-col h-screen">
                    <div class="flex-grow overflow-auto">
                        <table class="relative w-full border border-black shadow-2xl">
                            <thead>
                            <tr>
                                <th class="sticky top-0 uppercase tracking-wide text-gray-700 text-xs font-bold mb-2 bg-color3">Тип
                                    услуг
                                </th>
                                <th class="sticky top-0 uppercase tracking-wide text-gray-700 text-xs font-bold mb-2 bg-color3">Услуга
                                </th>
                                <th class="sticky top-0 uppercase tracking-wide text-gray-700 text-xs font-bold mb-2 bg-color3">Цена
                                </th>
                                <th class="sticky top-0 uppercase tracking-wide text-gray-700 text-xs font-bold mb-2 bg-color3">
                                    Детальнее
                                </th>
                            </tr>
                            </thead>
                            <tbody class="divide-y bg-color2">

                            @forelse ($types as $type)
                                @forelse($jobs as $job) @if($type->id === $job->type_id)
                                    <tr>
                                        <td class="uppercase px-6 py-4 tracking-wide text-gray-700 text-xs mb-2">{{$type->name}}</td>
                                        <td class="uppercase px-6 py-4 tracking-wide text-gray-700 text-xs mb-2">{{$job->name}}</td>
                                        <td class="uppercase px-6 py-4 tracking-wide text-gray-700 text-xs mb-2">{{$job->price}}{{ config('settings.currency_symbol', '$') }}</td>
                                        <td class="uppercase px-6 py-4 tracking-wide text-gray-700 text-xs mb-2">{{$job->details}}</td>
                                    </tr>
                                @endif @empty UPS @endforelse
                            @empty
                                <h2>No Jobs Yet</h2>
                            @endforelse


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <x-site-footer></x-site-footer>
</x-site-layout>
