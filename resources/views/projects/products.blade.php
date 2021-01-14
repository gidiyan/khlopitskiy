<x-site-layout>
    <x-site-navigation></x-site-navigation>
    <div class="py-6 text-center bg-color3 color4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-6">
            {{ $products->links() }}
            <div class="grid gap-6 -mx-4 grid-cols-1 sm:grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 my-4">
                @forelse($products as $product)
                    <div class="md:flex-1">
                        <div class="card flex flex-col justify-center p-10 bg-color3 rounded-lg shadow-2xl">
                            <div class="prod-title">
                                <p class="text-2xl uppercase text-gray-900 font-bold">{{ $product->name }}</p>
                            </div>
                            <div class="prod-img">
{{--                                <img src="{{$product->pictures[0]->filename ?? ''}}"--}}
                                <img src="{{$product->image}}"
                                     class="w-full object-cover object-center">
                            </div>
                            <div class="prod-info grid gap-10">
                                <div class="flex flex-col md:flex-row justify-between items-center text-gray-900 mt-2">
                                    <p class="font-bold text-xl">{{ $product->details }} <br/> в жилищном комплексе <a
                                            href="{{ route('product.by.brand', $product->brand->id) }}"
                                            class="text-blue-500"> {{ $product->brand->name }}</a>
                                    </p>
                                    <a href="{{ route('projects.product', $product->id) }}"
                                       class="px-2 py-2 transition ease-in duration-200 hover:bg-gray-800 hover:text-white border-2 border-gray-900 focus:outline-none">Подробнее
                                    </a>
                                </div>
                                <div>
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
                                <div class="flex flex-col md:flex-row justify-between items-center text-gray-900">
                                    <p class="font-bold text-xl">{{ $product->description }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    No products yet
                @endforelse
            </div>
            {{ $products->links() }}
        </div>
    </div>
<div></div>
    <x-site-footer></x-site-footer>
</x-site-layout>
