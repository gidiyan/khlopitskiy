<x-admin.admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Просмотр работы') }}
        </h2>
        <a class="px-2 btn-md btn-blue hover:border-transparent float-right"
           href="{{route("admin.jobs.index")}}">Назад</a>
    </x-slot>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <fieldset disabled>
                    <form>
                        @csrf @method('PUT')
                        <div class="w-full px-3 mb-6 md:mb-0">
                            <label for="name" class="block uppercase tracking-wide text-gray-700 text-xs font-bold
                               mb-2">Название типа работ</label>
                            <input type="text"
                                   class="appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-700 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                   placeholder="Название" id="name" name="name" value="{{$job->name}}" disabled>
                        </div>
                        <div class="w-full px-3">
                            <label for="details"
                                   class="block uppercase tracking-wide text-gray-700 text-xs font-bold
                               mb-2">Описание</label>
                            <input type="text"
                                   class="appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-700 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                   placeholder="Описание" id="details" name="details"
                                   value="{{$job->details}}" disabled>
                        </div>
                        <div class="w-full px-3 pt-4">
                            <label for="price"
                                   class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Стоимость работы</label>
                            <input type="number" step="0.01"
                                   class="{{ $errors->has('price')?'is-invalid':'' }} appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-700 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                   placeholder="99,99" id="price" name="price" value="{{$job->price}}" disabled>
                        </div>
                        <div class="flex justify-center w-full my-2">
                            <a class="px-2 btn-md btn-blue hover:border-transparent float-right"
                               href="{{route("admin.jobs.index")}}">Назад</a>
                        </div>
                    </form>
                </fieldset>
            </div>
        </div>
    </div>
</x-admin.admin-layout>
