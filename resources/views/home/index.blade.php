<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=n, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
            integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />
        @vite('resources/css/app.css')
        <title>The Wizard's Bag</title>
    </head>
    <body>

        {{--NAV--}}
        <nav class="flex justify-between items-center mb-4">
            <a href="/">
                <img class="w-24" src="{{ asset('images/logo.png') }}" alt="logo"/>
            </a>
            <ul class="flex space-x-6 mr-6 text-lg">
                <li>
                    <a href="/" class="hover:text-laravel">
                        <i class="fa-solid fa-user-plus"></i> Register
                    </a>
                </li>
                <li>
                    <a href="/" class="hover:text-laravel">
                        <i class="fa-solid fa-arrow-right-to-bracket"></i> Login
                    </a>
                </li>
            </ul>
        </nav>

        {{--Hero--}}
        <section
            class="relative h-72 bg-laravel flex flex-col justify-center align-center text-center space-y-4 mb-4">
            <div
                class="absolute top-0 left-0 w-full h-full opacity-10 bg-no-repeat bg-center"
                style="background-image: url('/')">
            </div>

            <div class="z-10">
                <h1 class="text-6xl font-bold uppercase text-white">
                    Lara<span class="text-black">ITEMS</span>
                </h1>
                <p class="text-2xl text-gray-200 font-bold my-4">
                    Come in, we've got so much more!
                </p>
                <div>
                    <a href="/"
                        class="inline-block border-2 border-white text-white py-2 px-4 rounded-xl uppercase mt-2 hover:text-black hover:border-black">
                        Sign Up to List a Gig
                    </a>
                </div>
            </div>
        </section>

        {{--Search--}}
        <main>
            <form action="">
                <div class="relative border-2 border-gray-100 m-4 rounded-lg">
                    <div class="absolute top-4 left-3">
                        <i class="fa fa-search text-gray-400 z-20 hover:text-gray-500"></i>
                    </div>
                    <input
                        type="text"
                        name="search"
                        class="h-14 w-full pl-10 pr-20 rounded-lg z-0 focus:shadow focus:outline-none"
                        placeholder="Search for that Special Item..."/>
                    <div class="absolute top-2 right-2">
                        <button
                            type="submit"
                            class="h-10 w-20 text-white rounded-lg bg-red-500 hover:bg-red-600">
                            Search
                        </button>
                    </div>
                </div>
            </form>
            <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">
                <!-- Item 1 -->
                <div class="bg-gray-50 border border-gray-200 rounded p-6">
                    <div class="flex">
                        <img
                            class="hidden w-48 mr-6 md:block"
                            src="/"
                            alt=""/>
                        <div>
                            <h3 class="text-2xl">
                                <a href="/">Item Name</a>
                            </h3>
                            <div class="text-xl font-bold mb-4">Item Cost</div>
                            <ul class="flex">
                                <li class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
                                    <a href="#">tag</a>
                                </li>
                                <li class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
                                    <a href="#">tag</a>
                                </li>
                                <li class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
                                    <a href="#">tag</a>
                                </li>
                                <li class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
                                    <a href="#">tag</a>
                                </li>
                            </ul>
                            <div class="text-lg mt-4">
                                Short Description
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Item 2 -->
                <div class="bg-gray-50 border border-gray-200 rounded p-6">
                    <div class="flex">
                        <img
                            class="hidden w-48 mr-6 md:block"
                            src="/"
                            alt=""/>
                        <div>
                            <h3 class="text-2xl">
                                <a href="/">Item Name</a>
                            </h3>
                            <div class="text-xl font-bold mb-4">Item Cost</div>
                            <ul class="flex">
                                <li class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
                                    <a href="#">tag</a>
                                </li>
                                <li class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
                                    <a href="#">tag</a>
                                </li>
                                <li class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
                                    <a href="#">tag</a>
                                </li>
                                <li class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
                                    <a href="#">tag</a>
                                </li>
                            </ul>
                            <div class="text-lg mt-4">
                                Short Description
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Item 3 -->
                <div class="bg-gray-50 border border-gray-200 rounded p-6">
                    <div class="flex">
                        <img
                            class="hidden w-48 mr-6 md:block"
                            src="/"
                            alt=""/>
                        <div>
                            <h3 class="text-2xl">
                                <a href="/">Item Name</a>
                            </h3>
                            <div class="text-xl font-bold mb-4">Item Cost</div>
                            <ul class="flex">
                                <li class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
                                    <a href="#">tag</a>
                                </li>
                                <li class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
                                    <a href="#">tag</a>
                                </li>
                                <li class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
                                    <a href="#">tag</a>
                                </li>
                                <li class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
                                    <a href="#">tag</a>
                                </li>
                            </ul>
                            <div class="text-lg mt-4">
                                Short Description
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Item 4 -->
                <div class="bg-gray-50 border border-gray-200 rounded p-6">
                    <div class="flex">
                        <img
                            class="hidden w-48 mr-6 md:block"
                            src="/"
                            alt=""/>
                        <div>
                            <h3 class="text-2xl">
                                <a href="/">Item Name</a>
                            </h3>
                            <div class="text-xl font-bold mb-4">Item Cost</div>
                            <ul class="flex">
                                <li class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
                                    <a href="#">tag</a>
                                </li>
                                <li class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
                                    <a href="#">tag</a>
                                </li>
                                <li class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
                                    <a href="#">tag</a>
                                </li>
                                <li class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
                                    <a href="#">tag</a>
                                </li>
                            </ul>
                            <div class="text-lg mt-4">
                                Short Description
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Item 5 -->
                <div class="bg-gray-50 border border-gray-200 rounded p-6">
                    <div class="flex">
                        <img
                            class="hidden w-48 mr-6 md:block"
                            src="/"
                            alt=""/>
                        <div>
                            <h3 class="text-2xl">
                                <a href="/">Item Name</a>
                            </h3>
                            <div class="text-xl font-bold mb-4">Item Cost</div>
                            <ul class="flex">
                                <li class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
                                    <a href="#">tag</a>
                                </li>
                                <li class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
                                    <a href="#">tag</a>
                                </li>
                                <li class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
                                    <a href="#">tag</a>
                                </li>
                                <li class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
                                    <a href="#">tag</a>
                                </li>
                            </ul>
                            <div class="text-lg mt-4">
                                Short Description
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Item 6 -->
                <div class="bg-gray-50 border border-gray-200 rounded p-6">
                    <div class="flex">
                        <img
                            class="hidden w-48 mr-6 md:block"
                            src="/"
                            alt=""/>
                        <div>
                            <h3 class="text-2xl">
                                <a href="/">Item Name</a>
                            </h3>
                            <div class="text-xl font-bold mb-4">Item Cost</div>
                            <ul class="flex">
                                <li class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
                                    <a href="#">tag</a>
                                </li>
                                <li class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
                                    <a href="#">tag</a>
                                </li>
                                <li class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
                                    <a href="#">tag</a>
                                </li>
                                <li class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
                                    <a href="#">tag</a>
                                </li>
                            </ul>
                            <div class="text-lg mt-4">
                                Short Description
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </main>
    </body>
</html>
