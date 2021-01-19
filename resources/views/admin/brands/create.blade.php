<x-admin.admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Создать ЖК') }}
        </h2>
        <a class="px-2 btn-md btn-blue"
           href="{{route("admin.brands.index")}}">Назад</a>
    </x-slot>
    <div class="main-card">
        <div class="body">
            <div class="w-full">
                <form method="POST" action="{{route("admin.brands.store")}}" class="w-full max-w-lg"
                      enctype="multipart/form-data">
                    @csrf
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <label for="name" class="block uppercase tracking-wide text-gray-700 text-xs font-bold
                               mb-2">Название ЖК</label>
                        <input type="text"
                               class="{{ $errors->has('name')?'is-invalid':'' }} appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-700 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                               placeholder="Название" id="name" name="name" value="{{old('name')}}" required>
                        <p class="text-red-500 text-xs italic my-2">Заполните это поле</p>
                    </div>
                    @if($errors->has('name'))
                        <p class="invalid-feedback">{{ $errors->first('name') }}</p>
                    @endif
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3 mb-6 md:mb-0">
                            <div class="border border-dashed border-gray-500 relative">
                                <input type="file"
                                       class="cursor-pointer relative block opacity-0 w-full h-full p-20 z-50"
                                       name="image">
                                <div class="text-center p-10 absolute top-0 right-0 left-0 m-auto">
                                    <h4>
                                        Перетащить файл для загрузки
                                        <br/>или
                                    </h4>
                                    <p class="appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-700 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                                        Выбрать файл</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @if($errors->has('image'))
                        <p class="invalid-feedback">{{ $errors->first('image') }}</p>
                @endif
            <div class="flex justify-center flex-wrap -mx-3 mb-6">
                <button type="submit"
                        class="px-2 btn-md btn-blue">
                    Сохранить
                </button>
            </div>
            </form>
            </div>
        </div>
    </div>
    </div>
</x-admin.admin-layout>
