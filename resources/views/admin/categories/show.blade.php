<x-admin.admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Просмотр категори') }}
        </h2>
        <a class="px-2 btn-md btn-blue hover:border-transparent float-right"
           href="{{route("admin.categories.index")}}">Назад</a>
    </x-slot>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <fieldset disabled>
                    <form>
                        <div class="w-full px-3 mb-6 md:mb-0">
                            <label for="name" class="block uppercase tracking-wide text-gray-700 text-xs font-bold
                               mb-2">Название категории</label>
                            <input type="text"
                                   class="appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-700 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                   placeholder="Название" id="name" name="name" value="{{$category->name}}" disabled>
                        </div>
                        <div class="w-full px-3">
                            <label for="description"
                                   class="block uppercase tracking-wide text-gray-700 text-xs font-bold
                               mb-2">Описание</label>
                            <input type="text"
                                   class="appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-700 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                   placeholder="Описание" id="description" name="description"
                                   value="{{$category->description}}" disabled>
                        </div>
                        <div class="w-full md:w-1/2 px-3 my-4">
                            <input type="hidden" name="status" value="0">
                            <input type="checkbox" class="form-checkbox border-black" name="status" id="status" {{$category->status == 1?'checked':''}} value="1" disabled>
                            <label class="appearance-none checked:bg-blue-600 checked:border-transparent" for="status">Активная категория</label>
                        </div>
                        <div class="flex justify-center w-full my-2">
                            <a class="px-2 btn-md btn-blue hover:border-transparent float-right"
                               href="{{route("admin.categories.index")}}">Назад</a>
                        </div>
                    </form>
                </fieldset>
            </div>
        </div>
    </div>
</x-admin.admin-layout>
