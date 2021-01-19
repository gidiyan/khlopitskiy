<x-site-layout>
    <x-site-navigation></x-site-navigation>
    <div class="py-6">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-6">
            <div class="flex flex-col md:flex-row -mx-4">
                <div class="md:flex-1 px-4 flex-grow-0 w-1/2">
                    <div x-data="{ image: 0 }" x-cloak>
                        <div class="h-64 md:h-80 rounded-lg bg-gray-100 mb-4">
                            @for ($pic =0,$picMax = count($product->pictures); $pic<$picMax;  $pic++)
                                <div x-show="image === {{ $pic }}"
                                     class="h-64 md:h-80 rounded-lg bg-gray-100 mb-4 flex items-center justify-center">
                                    <a href="data:image/gif;base64, {{ $product->pictures[$pic]->filename }}"
                                       data-lightbox="roadtrip" data-title="{{ $product->name }}"><img
                                            src="data:image/gif;base64, {{ $product->pictures[$pic]->filename }}"
                                            class="object-cover h-64 w-full"></a>
                                </div>
                            @endfor
                        </div>
                        <div class="flex -mx-2 mb-4">
                            <template x-for="i in {{count($product->pictures) }}">
                                <div class="flex-1 px-2">
                                    <button x-on:click="image = i-1"
                                            :class="{ 'ring-2 ring-indigo-300 ring-inset': image === i-1 }"
                                            class="focus:outline-none w-full rounded-lg h-12 md:h-12 bg-gray-100 flex items-center justify-center">
                                        <span x-text="i" class="text-2xl"></span>
                                    </button>
                                </div>
                            </template>
                        </div>
                    </div>
                </div>
                <div class="md:flex-1 px-4 flex-grow-0 w-1/2">
                    <h2 class="mb-2 leading-tight tracking-tight font-bold text-gray-800 text-2xl md:text-3xl">{{ $product->name }}</h2>
                    <span class="text-gray-500 text-xl font-bold">Жилищный комплекс
                        <div class="inline-flex ">
                             <a href="{{ route('product.by.brand', $product->brand->id) }}"
                                class="uppercase text-indigo-600 text-2xl hover:underline">{{ $product->brand->name }}</a>
                                <img src="data:image/gif;base64, {{ $product->brand->logo }}"
                                     alt="{{ $product->brand->name }}" class="h-10 mx-auto my-auto">
                        </div>
                        </span>
                    <p class="break-words">{{ $product->description }}</p>
                    <div class="py-4 mx-4">
                        <p class="text-gray-400 italic">Проект относится к категориям</p>
                        <ul class="list-reset flex flex-wrap">
                            @forelse($product->categories as $category)
                                <li class="mr-3">
                                    <a class="inline-block border border-blue-500 border-opacity-100 rounded py-1 px-3 bg-blue text-red-400"
                                       href="{{ route('product.by.category', $category->id) }}">{{ $category->name }}</a>
                                </li>
                            @empty
                                No categories yet
                            @endforelse
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <x-site-footer></x-site-footer>
</x-site-layout>
