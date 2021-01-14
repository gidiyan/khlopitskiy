<x-site-layout>
    <x-site-navigation></x-site-navigation>
    <x-site-slider></x-site-slider>
    <div class="py-6 text-center bg-color3 color4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-6">
            <div class="py-6 mt-2 mb-2">
                <div
                    class="flex flex-wrap md:text-left text-center order-first justify-center bg-cover bg-center h-96 text-white py-24 px-10 object-fill"
                    style="background-image: url(https://scontent.fiev6-1.fna.fbcdn.net/v/t1.0-9/84811542_2811349078933525_3536075853588856832_o.jpg?_nc_cat=110&ccb=2&_nc_sid=730e14&_nc_ohc=fQHSLF60JTwAX9uZ6Vf&_nc_ht=scontent.fiev6-1.fna&oh=5876331b1cda1d441cf31fea2e085422&oe=60260217)">
                    <div class="lg:w-1/2 md:w-1/2 w-full px-4 font-bold text-6xl">
                        "Minimalism is the ultimate Sophistication"
                    </div>
                    <div class="lg:w-1/2 md:w-1/2 w-full px-4 text-xl underline ">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of
                        type and scrambled it to make a type specimen book.
                    </div>
                </div>
            </div>
            <div class="flex flex-col h-auto pt-8">
                <div class="flex-grow">
                    <div class="container mx-auto text-center text-xl font-light my-6">
                        <div class="md:w-2/3 leading-normal text-xl font-light mx-auto px-5 sm:px-2">
                            <p class="my-4">
                            <h6 class="font-bold text-white text-3xl mx-2 color5">Проекты</h6>
                            </p>
                        </div>
                        <div class="my-12">
                            <div class="gallery flex-grow relative mx-auto" x-data="gallery()"
                                 x-init="init({index:20})">
                                @foreach($products as $product)

                                    <div class="gallery__item gallery__item--hidden sm:rounded-lg overflow-hidden"
                                         x-ref="height">
                                        <a href="{{ route('products')}}">
                                            <img
                                                src="{{ $product->image }}"
                                                alt=""
                                                class="gallery__image object-cover object-center"
                                                title="Image Title"
                                            />
                                        </a>
                                    </div>
                                @endforeach

                                <a
                                    class="gallery__nav gallery__nav--right text-white rounded-full w-10 h-10 flex items-center justify-center cursor-pointer"
                                    x-on:click="next()"
                                >
                                    <svg class="fill-current w-6 h-6" xmlns="http://www.w3.org/2000/svg"
                                         viewBox="0 0 256 512">
                                        <path
                                            d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z"
                                        />
                                    </svg>
                                </a>
                                <a
                                    class="gallery__nav gallery__nav--left text-white rounded-full w-10 h-10 flex items-center justify-center cursor-pointer"
                                    x-on:click="previous()"
                                >
                                    <svg class="fill-current w-6 h-6" xmlns="http://www.w3.org/2000/svg"
                                         viewBox="0 0 256 512">
                                        <path
                                            d="M31.7 239l136-136c9.4-9.4 24.6-9.4 33.9 0l22.6 22.6c9.4 9.4 9.4 24.6 0 33.9L127.9 256l96.4 96.4c9.4 9.4 9.4 24.6 0 33.9L201.7 409c-9.4 9.4-24.6 9.4-33.9 0l-136-136c-9.5-9.4-9.5-24.6-.1-34z"
                                        />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <x-site-footer></x-site-footer>
</x-site-layout>
