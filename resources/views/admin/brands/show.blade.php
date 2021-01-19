<x-admin.admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Просмотр ЖК') }}
        </h2>
        <a class="px-2 btn-md btn-blue hover:border-transparent float-right"
           href="{{route("admin.brands.index")}}">Назад</a>
    </x-slot>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <fieldset disabled>
                    <form>
                        <div class="px-3 mb-6 md:mb-0 w-1/2">
                            <label for="name" class="block uppercase tracking-wide text-gray-700 text-xs font-bold
                               mb-2">Название ЖК</label>
                            <input type="text"
                                   class="{{ $errors->has('name')?'is-invalid':'' }} w-full appearance-none block bg-gray-100 text-gray-700 border border-gray-700 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                   placeholder="Name" id="name" name="name" value="{{$brand->name}}" disabled>
                            <div class="flex justify-center my-2">
                                <a class="px-2 btn-md btn-blue hover:border-transparent"
                                   href="{{route("admin.brands.index")}}">Назад</a>
                            </div>
                        </div>
                    </form>
                </fieldset>
            </div>
        </div>
    </div>
</x-admin.admin-layout>
