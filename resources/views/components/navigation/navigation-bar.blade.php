<div class="py-5 mx-10 sm:max-w-xl md:max-w-screen-xl lg:max-w-screen-xl xl:max-w-screen-xl 2xl:max-w-full">
    <div class="hidden md:flex w-full justify-end">
        <x-locale.change-locale />
    </div>

    <div class="relative flex items-center justify-between">
        <div class="flex items-center">
            <a
                href="{{url('')}}"
                aria-label="{{config('app.name')}}"
                title="{{config('app.name')}}"
                class="group inline-flex items-center justify-center mr-8"
            >
                <x-logo.application-logo />
            </a>
            <ul class="ml-12 flex items-center hidden space-x-8 lg:flex">
                <li>
                    <a
                        href="{{route('home')}}"
                        aria-label="{{__('Home')}}"
                        title="{{__('Home')}}"
                        class="{{ Route::is('home') ? 'text-primary-color' : 'text-gray-700' }} font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-green-500">
                        {{__('Home')}}
                    </a>
                </li>
                <li>
                    <a href="{{route('blog.index')}}"
                                 aria-label="{{__('Blog')}}"
                                 title="{{__('Blog')}}"
                                 class="{{ Route::is('blog.index') ? 'text-primary-color' : 'text-gray-700' }} font-medium tracking-wide transition-colors duration-200 hover:text-green-500">
                        {{__('Blog')}}
                    </a>
                </li>
                <li>
                    <a
                        href="{{route('about.index')}}"
                        active-class="text-green-500"
                        aria-label="Product pricing"
                        title="Product pricing"
                        class="{{ Route::is('about.index') ? 'text-primary-color' : 'text-gray-700' }} font-medium tracking-wide transition-colors duration-200 hover:text-green-500">
                        {{__('About us')}}
                    </a>
                </li>
                <li>
                    <a
                        href="/"
                        active-class="text-green-500"
                        aria-label="About us"
                        title="About us"
                        class="{{ Route::is('contact.index') ? 'text-primary-color' : 'text-gray-700' }} font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-green-500"
                    >
                        {{__('Contact')}}
                    </a>
                </li>
            </ul>
        </div>
        <ul class="flex items-center hidden space-x-8 lg:flex">
            <li>
                <a
                    href="{{route('login')}}"
                    aria-label="Sign in"
                    title="Sign in"
                    class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-green-500"
                >{{__('Sign in')}}</a>
            </li>
            <li>
                <a
                    href="{{route('register')}}"
                    class="inline-flex items-center justify-center h-12 px-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md bg-indigo-700 hover:bg-purple-600 focus:shadow-outline focus:outline-none"
                    aria-label="Sign up"
                    title="Sign up"
                >
                    {{__('Sign up')}}
                </a>
            </li>
        </ul>
        <div class="lg:hidden" x-data="{isMenuOpen: false}">
            <button
                aria-label="Open Menu"
                title="Open Menu"
                class="p-2 -mr-1 transition duration-200 rounded focus:outline-none focus:shadow-outline hover:bg-deep-purple-50 focus:bg-deep-purple-50"
                @click="isMenuOpen = !isMenuOpen"
            >
                <svg class="w-5 text-gray-600" viewBox="0 0 24 24">
                    <path
                        fill="currentColor"
                        d="M23,13H1c-0.6,0-1-0.4-1-1s0.4-1,1-1h22c0.6,0,1,0.4,1,1S23.6,13,23,13z"
                    ></path>
                    <path
                        fill="currentColor"
                        d="M23,6H1C0.4,6,0,5.6,0,5s0.4-1,1-1h22c0.6,0,1,0.4,1,1S23.6,6,23,6z"
                    ></path>
                    <path
                        fill="currentColor"
                        d="M23,20H1c-0.6,0-1-0.4-1-1s0.4-1,1-1h22c0.6,0,1,0.4,1,1S23.6,20,23,20z"
                    ></path>
                </svg>
            </button>
            <div x-show="isMenuOpen" class="absolute z-20 top-0 left-0 w-full ease-in-out ">
                <div class="p-5 bg-white border rounded shadow-sm">
                    <div class="flex items-center justify-between mb-4">
                        <div>
                            <a
                                href="/"
                                aria-label="{{config('app.name')}}"
                                title="{{config('app.name')}} Logo"
                                class="inline-flex items-center"
                            >
                                <x-logo.application-logo />

                            </a>
                        </div>
                        <div>
                            <button
                                aria-label="Close Menu"
                                title="Close Menu"
                                class="p-2 -mt-2 -mr-2 transition duration-200 rounded hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                                @click="isMenuOpen = false"
                            >
                                <svg class="w-5 text-gray-600" viewBox="0 0 24 24">
                                    <path
                                        fill="currentColor"
                                        d="M19.7,4.3c-0.4-0.4-1-0.4-1.4,0L12,10.6L5.7,4.3c-0.4-0.4-1-0.4-1.4,0s-0.4,1,0,1.4l6.3,6.3l-6.3,6.3 c-0.4,0.4-0.4,1,0,1.4C4.5,19.9,4.7,20,5,20s0.5-0.1,0.7-0.3l6.3-6.3l6.3,6.3c0.2,0.2,0.5,0.3,0.7,0.3s0.5-0.1,0.7-0.3 c0.4-0.4,0.4-1,0-1.4L13.4,12l6.3-6.3C20.1,5.3,20.1,4.7,19.7,4.3z"
                                    ></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <nav>
                        <ul class="space-y-4">
                            <li>
                                <a
                                    href="/"
                                    aria-label="Our product"
                                    title="Our product"
                                    class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-green-500"
                                >Product</a
                                >
                            </li>
                            <li>
                                <a
                                    href="/"
                                    aria-label="Our product"
                                    title="Our product"
                                    class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-green-500"
                                >Features</a
                                >
                            </li>
                            <li>
                                <a
                                    href="/"
                                    aria-label="Product pricing"
                                    title="Product pricing"
                                    class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-green-500"
                                >Pricing</a
                                >
                            </li>
                            <li>
                                <a
                                    href="/"
                                    aria-label="About us"
                                    title="About us"
                                    class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-green-500"
                                >About us</a
                                >
                            </li>
                            <li>
                                <a
                                    href="{{route('login')}}"
                                    aria-label="Sign in"
                                    title="Sign in"
                                    class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-green-500"
                                >Sign in</a
                                >
                            </li>
                            <li>
                                <a
                                    href="{{route('register')}}"
                                    class="inline-flex items-center justify-center w-full h-12 px-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md bg-purple-700 hover:bg-purple-600 focus:shadow-outline focus:outline-none"
                                    aria-label="Sign up"
                                    title="Sign up"
                                >
                                    Sign up
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
