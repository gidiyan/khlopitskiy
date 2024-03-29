<x-admin.admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Проект') }}
        </h2>
        <a class="px-2 btn-md btn-blue hover:border-transparent float-right"
           href="{{route("admin.products.index")}}">Назад</a>
    </x-slot>
    <div class="row">
        <div class="col-lg-12">
            <div class="main-card">
                <div class="body">
                    <div class="w-full">
                        <form method="POST" action="{{route("admin.products.update",$product->id)}}"
                              class="w-full max-w-lg">
                            @csrf @method('PUT')
                            <div class="flex flex-wrap -mx-3 mb-6">
                                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                    <label for="name"
                                           class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Название</label>
                                    <input type="text"
                                           class="appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-700 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                           placeholder="Name" id="name" name="name" value="{{$product->name}}" disabled>
                                </div>
                                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                    <label for="details"
                                           class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Детальнее</label>
                                    <input type="text"
                                           class="{{ $errors->has('details')?'is-invalid':'' }} appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-700 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                           placeholder="Details" id="details" name="details"
                                           value="{{$product->details}}" disabled>
                                </div>
                            </div>
                            <div class="flex flex-wrap -mx-3 mb-6">
                                <div class="w-full px-3">
                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                           for="description">
                                        Description
                                    </label>
                                    <input
                                        class="{{ $errors->has('description')?'is-invalid':'' }} appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-700 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                        name="description" placeholder="" value="{{$product->description}}"
                                        disabled>
                                    <p class="text-gray-600 text-xs italic">Описание</p>
                                </div>
                            </div>
                            <div class="flex flex-wrap -mx-3 mb-6">
                                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                    <label for="brand" class="block uppercase tracking-wide text-gray-700 text-xs font-bold
                               mb-2">ЖК</label>
                                    <select name="brand_id" id="brand_id"
                                            class="appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-700 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                            disabled>
                                        @foreach($brands as $brand)
                                            <option value="{{$brand->id}}"
                                                    {{ ($brand->id === $product->brand_id)? 'selected':'' }}
                                                    class="appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-700 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">{{$brand->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                    <label for="category" class="block uppercase tracking-wide text-gray-700 text-xs font-bold
                               mb-2">Категории</label>
                                    <select name="categories[]" id="categories" multiple
                                            class="appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-700 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                            disabled>
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}"
                                                    {{ ($category->id === $product->category_id)? 'selected':'' }}
                                                    class="border border-gray-500 rounded" @foreach($product_categories as $p_category){{$p_category->id == $category->id?'selected':''}}@endforeach>{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="w-full md:w-1/2 px-3 my-4">
                                <input type="checkbox" class="form-checkbox border-black" name="status" id="status"
                                       {{$product->status == 1?'checked':''}} disabled>
                                <label class="appearance-none checked:bg-blue-600 checked:border-transparent"
                                       for="status">Активная запись</label>
                            </div>
                            <div class="flex justify-center w-full my-2">
                                <a class="px-2 btn-md btn-blue hover:border-transparent"
                                   href="{{route("admin.products.index")}}">Назад</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin.admin-layout>
