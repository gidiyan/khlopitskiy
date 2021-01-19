<x-admin.admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Создать работу') }}
        </h2>
        <a class="px-2 btn-md btn-blue"
           href="{{route("admin.jobs.index")}}">Назад</a>
    </x-slot>
    <div class="main-card">
        <div class="body">
            <div class="w-full">
                <form class="w-full max-w-lg" method="POST"
                      action="{{route("admin.jobs.store")}}">
                    @csrf
                    <div class="w-full px-3 mb-6 md:mb-0">
                        <label for="name" class="block uppercase tracking-wide text-gray-700 text-xs font-bold
                               mb-2">Название работы</label>
                        <input type="text"
                               class="{{ $errors->has('name')?'is-invalid':'' }} appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-700 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                               placeholder="Название" id="name" name="name" value="{{old('name')}}" required>
                        <p class="text-red-500 text-xs italic my-2">Заполните это поле</p>
                    </div>
                    @if($errors->has('name'))
                        <p class="invalid-feedback">{{ $errors->first('name') }}</p>
                    @endif
                    <div class="w-full px-3">
                        <label for="details"
                               class="block uppercase tracking-wide text-gray-700 text-xs font-bold
                               mb-2">Описание</label>
                        <input type="text"
                               class="appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-700 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                               placeholder="Описание" id="details" name="details"
                               value="{{old('details')}}">
                    </div>
                    @if($errors->has('details'))
                        <p class="invalid-feedback">{{ $errors->first('details') }}</p>
                    @endif
                    <div class="w-full px-3 pt-4">
                        <label for="price"
                               class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Стоимость работы</label>
                        <input type="number" step="0.01"
                               class="{{ $errors->has('price')?'is-invalid':'' }} appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-700 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                               placeholder="99,99" id="price" name="price" value="{{old('price')}}" required>
                    </div>
                    @if($errors->has('price'))
                        <p class="invalid-feedback">{{ $errors->first('price') }}</p>
                    @endif
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label for="type" class="block uppercase tracking-wide text-gray-700 text-xs font-bold
                               mb-2">Выбрать тип работ</label>
                        <select name="type_id" id="type_id"
                                class="appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-700 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                            @foreach($types as $type)
                                <option value="{{$type->id}}"
                                        class="appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-700 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">{{$type->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="flex justify-center w-full my-2">
                        <button type="submit"
                                class="-2 btn-md btn-blue">
                            Сохранить
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-admin.admin-layout>
