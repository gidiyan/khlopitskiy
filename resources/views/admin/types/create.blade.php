<x-admin.admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Создать тип работ') }}
        </h2>
        <a class="px-2 btn-md btn-blue"
           href="{{route("admin.types.index")}}">Назад</a>
    </x-slot>
    <div class="main-card">
        <div class="body">
            <div class="w-full">
                <form class="w-full max-w-lg" method="POST"
                      action="{{route("admin.types.store")}}">
                    @csrf
                    <div class="w-full px-3 mb-6 md:mb-0">
                        <label for="name" class="block uppercase tracking-wide text-gray-700 text-xs font-bold
                               mb-2">Название типа работ</label>
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
