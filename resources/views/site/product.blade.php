<x-site-layout>
    <x-site-navigation></x-site-navigation>
    <div class="py-6">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-6">
            <div class="flex flex-col md:flex-row -mx-4">
                <div class="md:flex-1 px-4">
                    <div x-data="{ image: 1 }" x-cloak>
                        <div class="h-64 md:h-80 rounded-lg bg-gray-100 mb-4">
                            <div class="h-64 md:h-80 rounded-lg bg-gray-100 mb-4 flex items-center justify-center">
                                <img src="{{$product->image}}"
                                     class="w-full object-cover object-center top-0">
                            </div>
{{--                            @for ($pic =1,$picMax = count($product->pictures); $pic<$picMax;  $pic++)--}}
{{--                                --}}{{-- <template x-show="image === {{ $pic }}" x-data="i: {{ $pic }}"> --}}
{{--                                <div x-show="image === {{ $pic }}"--}}
{{--                                     class="h-64 md:h-80 rounded-lg bg-gray-100 mb-4 flex items-center justify-center">--}}
{{--                                    <img src="{{ $product->pictures[$pic]->filename }}"--}}
{{--                                         class="object-cover h-64 w-full">--}}
{{--                                </div>--}}
{{--                                --}}{{-- </template> --}}
{{--                            @endfor--}}
                        </div>
                        <div class="flex -mx-2 mb-4">
{{--                            <template x-for="i in {{count($product->image) }}">--}}
{{--                                <div class="flex-1 px-2">--}}
{{--                                    <button x-on:click="image = i"--}}
{{--                                            :class="{ 'ring-2 ring-indigo-300 ring-inset': image === i }"--}}
{{--                                            class="focus:outline-none w-full rounded-lg h-12 md:h-12 bg-gray-100 flex items-center justify-center">--}}
{{--                                        <span x-text="i" class="text-2xl"></span>--}}
{{--                                    </button>--}}
{{--                                </div>--}}
{{--                            </template>--}}
                        </div>
                    </div>
                </div>
                <div class="md:flex-1 px-4">
                    <h2 class="mb-2 leading-tight tracking-tight font-bold text-gray-800 text-2xl md:text-3xl">{{ $product->name }}</h2>
                    <p class="text-gray-500 text-sm">By <a href="{{ route('product.by.brand', $product->brand->id) }}"
                                                           class="text-indigo-600 hover:underline">{{ $product->brand->name }}</a>
                    </p>
                    <div class="flex items-center space-x-4 my-4">
                        <div>
{{--                            <div class="rounded-lg bg-gray-100 flex py-2 px-3">--}}
{{--                                <span class="text-indigo-400 mr-1 mt-1">$</span>--}}
                                <span class="font-bold text-indigo-600 text-3xl">{{ config('settings.currency_symbol', '$') }}</span>
{{--                            </div>--}}
                        </div>
                        <div class="flex-1">
                            <p class="text-green-500 text-xl font-semibold">Some text</p>
                        </div>
                    </div>
                    <p class="text-gray-500">{{ $product->description }}</p>
                    <div class="flex py-4 space-x-4">
{{--                        <button type="button"--}}
{{--                                class="h-14 px-6 py-2 font-semibold rounded-xl bg-indigo-600 hover:bg-indigo-500 text-white">--}}
{{--                            Add to Cart--}}
{{--                        </button>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <x-site-footer></x-site-footer>
</x-site-layout>
