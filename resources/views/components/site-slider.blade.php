<div class="sliderAx h-auto bg-color3">
    <div id="slider-1" class="container mx-auto">
        <div class="bg-cover bg-center  h-96 text-white py-24 px-10 object-fill"
             style="background-image: url({{ $products[0]->pictures[0]->filename }})">
            <div class="md:w-1/2">
                <p class="font-bold text-sm uppercase text-2xl mb-10 leading-none">{{ $products[0]->name }}</p>
                <a href="{{ route('projects.product', $products[0]->id) }}"
                   class="bg-color4 py-4 px-8 text-white font-bold uppercase text-xs rounded hover:bg-gray-100 hover:text-gray-800">Переход</a>
            </div>
        </div> <!-- container -->
        <br>
    </div>

    <div id="slider-2" class="container mx-auto">
        <div class="bg-cover bg-center  h-96 text-white py-24 px-10 object-fill"
             style="background-image: url({{ $products[1]->pictures[0]->filename }})">
            <div class="md:w-1/2">
                <p class="font-bold text-sm uppercase text-2xl mb-10 leading-none">{{ $products[0]->name }}</p>
                <a href="{{ route('projects.product', $products[1]->id) }}"
                   class="bg-color4 py-4 px-8 text-white font-bold uppercase text-xs rounded hover:bg-gray-100 hover:text-gray-800">Переход</a>
            </div>
        </div> <!-- container -->
        <br>
    </div>

</div>
<div class="bg-color3">
    <div class="flex justify-between w-12 mx-auto pb-2">
        <button id="sButton1" onclick="sliderButton1()" class="bg-color1 rounded-full w-4 pb-2"></button>
        <button id="sButton2" onclick="sliderButton2()" class="bg-color1 rounded-full w-4 p-2"></button>
    </div>
</div>


