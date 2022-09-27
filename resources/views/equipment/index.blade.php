
{{-- USO: PAGINA PRINCIPAL - HOME NO 1 --}}

<x-app-layout>


    {{-- SECCTION 1 - Portada --}}
    <section>

        {{-- Moño --}}
        {{-- <img style="width:50%" class="z-10 absolute bottom-0 left-0" src="{{ asset('img/home/AdobeStock_292882187.png') }}" alt=""> --}}

        {{-- Background  IMAGEN PRINCIPAL --}}


        {{-- py- Determina la altura de la imagen --}}

        <div class="w-full mx-auto px-4 sm:px-6 lg:px-64 py-40 bg-cover relative ml-10"
            style="background-image: url('{{ asset('img/home/pexels-daniel-smyth-8956313.jpg') }}') ;background-position:center">


            <div class="w-full md:w-3/4 lg:w-3/4">
                <h1 class="text-white text-8xl py-6" style="font-family: Sche">Equipment</h1>
                <h1 class="text-white text-5xl font-bold" style="font-family: Montserrat">
                    Working for production
                </h1>
                <p class="text-white font-bold text-xl mt-2 mb-4" style="font-family: Montserrat">
                    Put Our Digital Manufacturing Marketplace to Work for You
                </p>


                {{-- OCULTE EL BUSCADOR TEMPORALMENTE --}}
                {{-- @livewire('search') --}}


                {{-- COVER --}}
                <div class="absolute right-10 bottom-2">
                    <p class="text-white font-bold" style="font-family: Montserrat"></p>
                </div>
            </div>
        </div>

    </section>


    {{-- SECCTION 2 - Contenido --}}
    <section class="mt-4">
        <h1 class="text-gray-800 text-center text-3xl mb-6 font-bold"
            style="font-family: proxima-nova, sans-serif;font-weight: 800;font-style: normal">CONTENT</h1>
        <div
            class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">
            <article>
                <figure>
                    <a href="#"><img class="rounded-xl lg:h-60 w-full object-cover"
                            src="{{ asset('img/home/bridgeport-vmc-1000-xp-p00429118_2.jpg') }}" alt=""></a>

                    <header class="mt-2">
                        <a href="#">
                            <h1 class="text-center text-xl text-gray-700 font-bold">Bridgeport VMC 100</h1>
                        </a>
                    </header>

                    <a href="#" class="mt-2">
                        <p>40 inch x 20 inch table travel, full 4th Axis Capability</p>
                    </a>

                </figure>
            </article>

            <article>
                <figure>
                    <img class="rounded-xl h-60 w-full object-cover"
                        src="{{ asset('img/home/bridgeport-vmc-76022-p90212072_2.jpg') }}" alt="">
                    <header class="mt-2">
                        <a href="#">
                            <h1 class="text-center text-xl text-gray-700">Bridgeport VMC 760</h1>
                        </a>
                    </header>
                    <a href="#" class="mt-2">
                        <p>30x18 Inches table travel, 4th axis indexer.</p>
                    </a>

                </figure>
            </article>

            <article>
                <figure>
                    <img class="rounded-xl h-60 w-full object-cover" src="{{ asset('img/home/HT-60C.jpg') }}"
                        alt="">
                    <header class="mt-2">
                        <h1 class="text-center text-xl text-gray-700 font-bold">Johnford SL300</h1>
                    </header>
                    <p>10 inches , 3"BAR DIA, bar feed</p>
                </figure>
            </article>

            <article>
                <figure>
                    <img class="rounded-xl h-60 w-full object-cover" src="{{ asset('img/home/haas-sl-20-the-cnc-lathe-p80102085_2.png') }}"
                        alt="">
                    <header class="mt-2">
                        <h1 class="text-center text-xl text-gray-700 font-bold">HAAS SL 20</h1>
                    </header>
                    <p>6 iNCHES CHUCK 1.625" Bar feed</p>
                </figure>
            </article>


        </div>
    </section>

    {{-- SECCTION 2 - Contenido --}}
    <section class="mt-4">

        <div
            class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">
            <article>
                <figure>
                    <a href="#"><img class="rounded-xl lg:h-60 w-full object-cover"
                            src="{{ asset('img/home/large-used-2004-amera-seiki-t308-cnc-lathe.jpg') }}" alt=""></a>

                    <header class="mt-2">
                        <a href="#">
                            <h1 class="text-center text-xl text-gray-700 font-bold">Ameraseiki T308</h1>
                        </a>
                    </header>

                    <a href="#" class="mt-2">
                        <p>8" CHUCK 2" BAR DIA</p>
                    </a>

                </figure>
            </article>

            <article>
                <figure>
                    <img class="rounded-xl h-60 w-full object-cover"
                        src="{{ asset('img/home/LH630.jpg') }}" alt="">
                    <header class="mt-2">
                        <a href="#">
                            <h1 class="text-center text-xl text-gray-700 font-bold">Ameraseiki</h1>
                        </a>
                    </header>
                    <a href="#" class="mt-2">
                        <p>30x18 Inches table travel, 4th axis indexer.</p>
                    </a>

                </figure>
            </article>

            <article>
                <figure>
                    <img class="rounded-xl h-60 w-full object-cover" src="{{ asset('img/home/AH-400.jpg') }}"
                        alt="">
                    <header class="mt-2">
                        <h1 class="text-center text-xl text-gray-700 font-bold">Ameraseiki</h1>
                    </header>
                    <p>10 inches , 3"BAR DIA, bar feed</p>
                </figure>
            </article>

            <article>
                <figure>
                    <img class="rounded-xl h-60 w-full object-cover" src="{{ asset('img/home/asset-7116555-image-529271.jpg') }}"
                        alt="">
                    <header class="mt-2">
                        <h1 class="text-center text-xl text-gray-700 font-bold">HAAS SL 20</h1>
                    </header>
                    <p>6 iNCHES CHUCK 1.625" Bar feed</p>
                </figure>
            </article>


        </div>
    </section>



    {{-- SECCTION 5 - Banda --}}
    <section class="mt-16"
        style="background-image: url('{{ asset('img/home/pexels-kateryna-babaieva-3784335.jpg') }}');background-size: 100%;background-repeat:no-repeat;background-position:center">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-48">
            <div class="w-full md:w-3/4 lg:w-1/2">
                <h1 class="text-white text-bold text-6xl py-6 justify-center font-Playfair Display SC">Working with Best Machining</h1>
                <h1 class="text-white text-bold text-4xl">
                    Means
                </h1>
                <p class="text-white font-bold text-lg mt-2 mb-4 backdrop-brightness-5">
                    Easy Access to Manufacturing Experts Ensuring Quality Outputs from Concept to Completion
                </p>

            </div>
        </div>
    </section>





    {{-- SECCTION 8 - Footer --}}
    <section class="my-4">
        <hr>
        <p class=" text-sm max-w-7xl mx-auto px-4">THE PALACE is a Trademark with Copyright 2022 THE PALACE Inc. DESIGN
            by Nucleus-Technologies Copyright 2021<a class="text-blue-500 font-bold" href="">Terminnos y condiciones</a>
        </p>
    </section>

</x-app-layout>