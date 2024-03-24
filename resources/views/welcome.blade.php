<x-layouts.app>

    <div class="px-32 pt-10 flex justify-between items-center w-full bg-brand-green-500 text-white">
        <ul class="flex items-center gap-10">
            <li><a href="">Shop</a></li>
            <li><a href="">Products</a></li>
            <li><a href="">Fertilizer</a></li>
            <li><a href="">Guide</a></li>
        </ul>

        <div>
            <img src="{{ asset('logo.png') }}" alt="logo" class="w-max h-max">
        </div>


        <ul class="flex items-center gap-10">
            <li><a href=""><i class="fa-solid fa-magnifying-glass"></i></a></li>
            <li><a href=""><i class="fa-regular fa-user"></i></a></li>
            <li><a href=""><i class="fa-solid fa-cart-shopping"></i></a></li>
        </ul>
    </div>



    <div class='px-32 w-full min-h-screen text-white flex justify-center items-center bg-brand-green-500 mb-10'>
        <div class="w-1/2">
            <h1 class="text-7xl font-extrabold"> Happiness blooms <br> from within</h1>
            <p class="my-3 mb-10">Our environment, the world in which we live and work, is a mirror of our attitudes and
                expectations. </p>
            <div>
                <a href="" class="mr-5 bg-white rounded py-5 px-10 text-brand-green-500">Find Products</a>
                <a href=""
                    class="hover:bg-white transition-all rounded py-5 px-10 text-white hover:text-brand-green-500">Explore
                    Plants</a>

            </div>
        </div>
        <div class="w-1/2 ">
            <div class="flex items-start justify-center gap-2">
                <div class="">
                    <div class="relative mb-2 group">
                        <img src="{{ asset('hero/hero-3.png') }}" alt="hero-image" class="w-max h-max">
                        <div class="absolute top-0 left-0 bg-brand-green-500 text-white py-3 px-8 m-2">New</div>
                        <div
                            class="opacity-0 group-hover:opacity-100 transition-all absolute bg-brand-green-500 bg-opacity-50 p-3 bottom-0 w-full">
                            <h5 class="text-xl font-bold"> Anthurium Flower </h5>
                            <p class="my-4">
                                The flower of human being
                            </p>
                            <a
                                href="/"class="block text-center uppercase w-full py-2 px-10 rounded bg-white text-brand-green-500">
                                Read More</a>
                        </div>
                    </div>

                    <div class="relative mb-2 group">
                        <img src="{{ asset('hero/hero-2.png') }}" alt="hero-image" class="w-max h-max">
                        <div class="absolute top-0 left-0 bg-brand-green-500 text-white py-3 px-8 m-2">Popular</div>
                        <div
                            class="opacity-0 group-hover:opacity-100 transition-all absolute bg-brand-green-500 bg-opacity-50 p-3 bottom-0 w-full">
                            <h5 class="text-xl font-bold"> Anthurium Flower </h5>
                            <p class="my-4">
                                The flower of human being
                            </p>
                            <a
                                href="/"class="block text-center uppercase w-full py-2 px-10 rounded bg-white text-brand-green-500">
                                Read More</a>
                        </div>
                    </div>
                </div>
                <div class="relative group ">
                    <img src="{{ asset('hero/hero-1.png') }}" alt="hero-image"
                        class="w-max h-max group-hover:cursor-pointer">
                    <div
                        class="opacity-0 group-hover:opacity-100 transition-all absolute bg-brand-green-500 bg-opacity-50 p-3 bottom-0 w-full">
                        <h5 class="text-2xl font-bold"> Anthurium Flower </h5>
                        <p class="my-4">
                            The flower of human being. It has meaningful of fact that the plant always grow whatever
                            season and weather...
                        </p>
                        <a
                            href="/"class="block text-center uppercase w-full py-2 px-10 rounded bg-white text-brand-green-500">
                            Read More</a>
                    </div>

                </div>
            </div>


        </div>
    </div>


    <div class='px-32 w-full '>
        <div class="flex justify-between items-center text-brand-green-500 mb-10">
            <h3>Featured</h3>
            <a href="/">view all</a>
        </div>

        <div class="flex flex-wrap justify-evenly items-center gap-10 ">
            <div class="w-max border border-gray-400 p-3 rounded hover:cursor-pointer ">
                <img src="{{ asset('flowers/flower-1.png') }}" alt="flower" class="w-max h-max mx-auto">

                <div class="my-5">
                    <div class="flex justify-between my-5 text-brand-green-500"`>
                        <p>Peperomia Ginny</p>
                        <span class="font-bold">$25</span>
                    </div>
                    <p class="text-gray-500 w-max">
                        Lorem, ipsum dolor sit amet...
                    </p>
                </div>
                <a href="http://"
                    class="block text-center uppercase w-full py-2 px-10 rounded bg-brand-green-500 text-white">Buy</a>
            </div>
            <div class="w-max border border-gray-400 p-3 rounded hover:cursor-pointer ">
                <img src="{{ asset('flowers/flower-1.png') }}" alt="flower" class="w-max h-max mx-auto">

                <div class="my-5">
                    <div class="flex justify-between my-5 text-brand-green-500"`>
                        <p>Peperomia Ginny</p>
                        <span class="font-bold">$25</span>
                    </div>
                    <p class="text-gray-500 w-max">
                        Lorem, ipsum dolor sit amet...
                    </p>
                </div>
                <a href="http://"
                    class="block text-center uppercase w-full py-2 px-10 rounded bg-brand-green-500 text-white">Buy</a>
            </div>
            <div class="w-max border border-gray-400 p-3 rounded hover:cursor-pointer ">
                <img src="{{ asset('flowers/flower-1.png') }}" alt="flower" class="w-max h-max mx-auto">

                <div class="my-5">
                    <div class="flex justify-between my-5 text-brand-green-500"`>
                        <p>Peperomia Ginny</p>
                        <span class="font-bold">$25</span>
                    </div>
                    <p class="text-gray-500 w-max">
                        Lorem, ipsum dolor sit amet...
                    </p>
                </div>
                <a href="http://"
                    class="block text-center uppercase w-full py-2 px-10 rounded bg-brand-green-500 text-white">Buy</a>
            </div>
            <div class="w-max border border-gray-400 p-3 rounded hover:cursor-pointer ">
                <img src="{{ asset('flowers/flower-1.png') }}" alt="flower" class="w-max h-max mx-auto">

                <div class="my-5">
                    <div class="flex justify-between my-5 text-brand-green-500"`>
                        <p>Peperomia Ginny</p>
                        <span class="font-bold">$25</span>
                    </div>
                    <p class="text-gray-500 w-max">
                        Lorem, ipsum dolor sit amet...
                    </p>
                </div>
                <a href="http://"
                    class="block text-center uppercase w-full py-2 px-10 rounded bg-brand-green-500 text-white">Buy</a>
            </div>
        </div>

    </div>
</x-layouts.app>
