<x-admin.admin-layout>
    <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Создать проект') }}
            </h2>
            <a class="px-2 btn-md btn-blue"
               href="{{route("admin.products.index")}}">Назад</a>
    </x-slot>
    <div class="main-card">
        <div class="body">
            <div class="w-full">
                <form method="POST" action="{{route("admin.products.store")}}" class="w-full max-w-lg"
                      enctype="multipart/form-data">
                    @csrf
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                            <label for="name"
                                   class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Название проекта</label>
                            <input type="text"
                                   class="{{ $errors->has('name')?'is-invalid':'' }} appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-700 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                   placeholder="Название" id="name" name="name" value="{{old('name')}}" required>
                        </div>
                        @if($errors->has('name'))
                            <p class="invalid-feedback">{{ $errors->first('name') }}</p>
                        @endif
                        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                            <label for="details"
                                   class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Детальнее</label>
                            <input type="text"
                                   class="{{ $errors->has('details')?'is-invalid':'' }} appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-700 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                   placeholder="Детальнее" id="details" name="details"
                                   value="{{old('details')}}">
                        </div>
                        @if($errors->has('details'))
                            <p class="invalid-feedback">{{ $errors->first('details') }}</p>
                        @endif
                    </div>
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                   for="description">
                                Описание
                            </label>
                            <textarea
                                class="{{ $errors->has('description')?'is-invalid':'' }} appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-700 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                id="grid-password" placeholder="Описание">{{old('description')}}</textarea>
                            <p class="text-gray-600 text-xs italic">Описание проекта</p>
                        </div>
                        @if($errors->has('description'))
                            <p class="invalid-feedback">{{ $errors->first('description') }}</p>
                        @endif
                    </div>
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3 mb-6 md:mb-0">
                            <div class="border border-dashed border-gray-500 relative">
                                <input type="file" multiple
                                       class="cursor-pointer relative block opacity-0 w-full h-full p-20 z-50"
                                       name="images[]">
                                <div class="text-center p-10 absolute top-0 right-0 left-0 m-auto">
                                    <h4>
                                        Перетащить файлы для загрузки
                                        <br/>или
                                    </h4>
                                    <p class="appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-700 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                                        Выбрать файлы</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                            <label for="brand" class="block uppercase tracking-wide text-gray-700 text-xs font-bold
                               mb-2">Выбрать ЖК</label>
                            <select name="brand_id" id="brand_id"
                                    class="appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-700 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                                @foreach($brands as $brand)
                                    <option value="{{$brand->id}}"
                                            class="appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-700 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">{{$brand->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                            <label for="category" class="block uppercase tracking-wide text-gray-700 text-xs font-bold
                               mb-2">Выбрать категорию</label>
                            <select name="categories[]" id="categories" multiple
                                    class="appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-700 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}"
                                            class="border border-gray-700 rounded">{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="w-full md:w-1/2 px-3 my-4">
                        <input type="checkbox" class="form-checkbox border-black" name="status" id="status">
                        <label class="appearance-none checked:bg-blue-600 checked:border-transparent" for="status">Показывать на сайте</label>
                    </div>
                    <div class="flex justify-center w-full my-2">
                        <button type="submit"
                                class="px-2 btn-md btn-blue">
                            Сохранить
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-admin.admin-layout>
