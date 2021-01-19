<x-admin.admin-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Изменить ЖК') }}
            </h2>
            <a class="px-2 btn-md btn-blue hover:border-transparent float-right"
               href="{{route("admin.brands.index")}}">Назад</a>
        </x-slot>
    <div class="card">
        <div class="body">
            <div class="w-full">
                <form method="POST" action="{{route("admin.brands.update",$brand->id)}}" class="w-full max-w-lg">
                    @csrf @method('PUT')
                    <div class="w-full px-3 mb-6 md:mb-0">
                        <label for="name" class="block uppercase tracking-wide text-gray-700 text-xs font-bold
                               mb-2">Название ЖК</label>
                        <input type="text"
                               class="{{ $errors->has('name')?'is-invalid':'' }} appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-700 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                               placeholder="Название" id="name" name="name" value="{{$brand->name}}" required>
                    </div>
                    @if($errors->has('name'))
                        <p class="invalid-feedback">{{ $errors->first('name') }}</p>
                    @endif
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
