<x-admin.admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Изменить категорию') }}
        </h2>
        <a class="px-2 btn-md btn-blue"
           href="{{route("admin.categories.index")}}">Назад</a>
    </x-slot>
    <div class="card">
        <div class="body">
            <div class="w-full">
                <form method="POST" action="{{route("admin.categories.update",$category->id)}}" class="w-full max-w-lg">
                    @csrf @method('PUT')
                    <div class="w-full px-3 mb-6 md:mb-0">
                        <label for="name" class="block uppercase tracking-wide text-gray-700 text-xs font-bold
                               mb-2">Название категории</label>
                        <input type="text"
                               class="{{ $errors->has('name')?'is-invalid':'' }} appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-700 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                               placeholder="Название" id="name" name="name" value="{{$category->name}}" required>
                    </div>
                    @if($errors->has('name'))
                        <p class="invalid-feedback">{{ $errors->first('name') }}</p>
                    @endif
                    <div class="w-full px-3">
                        <label for="description"
                               class="block uppercase tracking-wide text-gray-700 text-xs font-bold
                               mb-2">Описание</label>
                        <input type="text"
                               class="appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-700 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                               placeholder="Описание" id="description" name="description"
                               value="{{$category->description}}">
                    </div>
                    @if($errors->has('description'))
                        <p class="invalid-feedback">{{ $errors->first('description') }}</p>
                    @endif
                    <div class="w-full md:w-1/2 px-3 my-4">
                        <input type="hidden" name="status" value="0">
                        <input type="checkbox" class="form-checkbox border-black" name="status" id="status" {{$category->status == 1?'checked':''}} value="1">
                        <label class="appearance-none checked:bg-blue-600 checked:border-transparent" for="status">Активная категория</label>
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
