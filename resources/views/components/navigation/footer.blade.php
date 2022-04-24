<div class="relative mt-16 bg-gray-100">
    <svg class="absolute top-0 w-full h-6 -mt-5 sm:-mt-10 sm:h-16 text-gray-100" preserveAspectRatio="none" viewBox="0 0 1440 54">
        <path fill="currentColor" d="M0 22L120 16.7C240 11 480 1.00001 720 0.700012C960 1.00001 1200 11 1320 16.7L1440 22V54H1320C1200 54 960 54 720 54C480 54 240 54 120 54H0V22Z"></path>
    </svg>
    <div class="px-4 pt-12 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8">
        <div class="grid gap-16 row-gap-10 mb-8 lg:grid-cols-6">
            <div class="md:max-w-md lg:col-span-2">
                <a href="/" aria-label="Go home" title="Company" class="inline-flex items-center">
                    <svg class="hover:bounceOrig h-24 w-24" id="a" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2000 2000">
                        <path d="M233.32,710.69h-41.8v-137.5h41.8v137.5Zm0,716.1h-41.8V815.19h41.8v611.6Z" fill="currentColor"/>
                        <path d="M849.31,1413.59c-39.6,16.5-80.3,25.3-123.2,25.3-83.6,0-157.3-29.7-221.1-90.2-63.8-60.5-95.7-136.4-95.7-226.6s30.8-159.5,91.3-222.2c61.6-62.7,136.4-94.6,225.5-94.6s158.4,29.7,221.1,90.2c63.8,60.5,95.7,135.3,95.7,226.6v304.7h-38.5v-312.4c0-74.8-28.6-138.6-84.7-191.4-56.1-52.8-119.9-79.2-193.6-79.2s-138.6,26.4-194.7,80.3c-56.1,52.8-83.6,118.8-83.6,198,0,73.7,26.4,138.6,79.2,194.7,53.9,56.1,119.9,83.6,199.1,83.6,36.3,0,72.6-7.7,107.8-22l15.4,35.2Z" fill="currentColor"/>
                        <path d="M1756.8,1347.59c-62.7,60.5-136.4,90.2-221.1,90.2-90.2,0-166.1-31.9-226.6-94.6-60.5-63.8-90.2-137.5-90.2-222.2V573.19h38.5v555.5c0,75.9,28.6,139.7,84.7,192.5,56.1,51.7,121,78.1,193.6,78.1,78.1,0,144.1-27.5,198-82.5,53.9-56.1,80.3-121,80.3-195.8s-27.5-143-83.6-196.9c-55-53.9-119.9-81.4-194.7-81.4-36.3,0-72.6,7.7-107.8,22l-15.4-35.2c39.6-16.5,80.3-25.3,123.2-25.3,89.1,0,163.9,31.9,224.4,94.6,61.6,62.7,92.4,137.5,92.4,222.2,0,90.2-31.9,166.1-95.7,226.6Z" fill="currentColor"/>
                    </svg>
                </a>
                <div class="mt-4 lg:max-w-sm">
                    <p class="text-sm text-deep-purple-50">
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.
                    </p>
                    <p class="mt-4 text-sm text-deep-purple-50">
                        Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                    </p>
                </div>
            </div>
            <div class="grid grid-cols-2 gap-5 row-gap-8 lg:col-span-4 md:grid-cols-4">
                <div>
                    <p class="font-semibold tracking-wide text-teal-accent-400">
                        {{__('Navigation')}}
                    </p>
                    <ul class="mt-2 space-y-2">
                        <li>
                            <a href="{{route('home')}}" class="{{ Route::is('home') ? 'text-primary-color' : 'text-gray-700' }} transition-colors duration-300 hover:text-secondary-color">{{__('Home')}}</a>
                        </li>
                        <li>
                            <a href="{{route('blog.index')}}" class="{{ Route::is('blog.index') ? 'text-primary-color' : 'text-gray-700' }} transition-colors duration-300 hover:text-primary-color">{{__('Blog')}}</a>
                        </li>
                        <li>
                            <a href="/" class="transition-colors duration-300 text-black hover:text-primary-color">{{__('About us')}}</a>
                        </li>
                        <li>
                            <a href="/" class="transition-colors duration-300 text-black hover:text-primary-color">{{__('Contact')}}</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="flex flex-col justify-between pt-5 pb-10 border-t border-deep-purple-accent-200 sm:flex-row">
            <p class="text-sm text-black">
                © Copyright {{ Date('Y')}} IAB Inc. Todos los derechos reservados.
            </p>
            <div class="flex items-center mt-4 space-x-4 sm:mt-0">
                <a href="/" class="transition-colors duration-300 text-deep-purple-100 hover:text-teal-accent-400">
                    <svg viewBox="0 0 24 24" fill="currentColor" class="h-5">
                        <path
                            d="M24,4.6c-0.9,0.4-1.8,0.7-2.8,0.8c1-0.6,1.8-1.6,2.2-2.7c-1,0.6-2,1-3.1,1.2c-0.9-1-2.2-1.6-3.6-1.6 c-2.7,0-4.9,2.2-4.9,4.9c0,0.4,0,0.8,0.1,1.1C7.7,8.1,4.1,6.1,1.7,3.1C1.2,3.9,1,4.7,1,5.6c0,1.7,0.9,3.2,2.2,4.1 C2.4,9.7,1.6,9.5,1,9.1c0,0,0,0,0,0.1c0,2.4,1.7,4.4,3.9,4.8c-0.4,0.1-0.8,0.2-1.3,0.2c-0.3,0-0.6,0-0.9-0.1c0.6,2,2.4,3.4,4.6,3.4 c-1.7,1.3-3.8,2.1-6.1,2.1c-0.4,0-0.8,0-1.2-0.1c2.2,1.4,4.8,2.2,7.5,2.2c9.1,0,14-7.5,14-14c0-0.2,0-0.4,0-0.6 C22.5,6.4,23.3,5.5,24,4.6z"
                        ></path>
                    </svg>
                </a>
                <a href="/" class="transition-colors duration-300 text-deep-purple-100 hover:text-teal-accent-400">
                    <svg viewBox="0 0 30 30" fill="currentColor" class="h-6">
                        <circle cx="15" cy="15" r="4"></circle>
                        <path
                            d="M19.999,3h-10C6.14,3,3,6.141,3,10.001v10C3,23.86,6.141,27,10.001,27h10C23.86,27,27,23.859,27,19.999v-10   C27,6.14,23.859,3,19.999,3z M15,21c-3.309,0-6-2.691-6-6s2.691-6,6-6s6,2.691,6,6S18.309,21,15,21z M22,9c-0.552,0-1-0.448-1-1   c0-0.552,0.448-1,1-1s1,0.448,1,1C23,8.552,22.552,9,22,9z"
                        ></path>
                    </svg>
                </a>
                <a href="/" class="transition-colors duration-300 text-deep-purple-100 hover:text-teal-accent-400">
                    <svg viewBox="0 0 24 24" fill="currentColor" class="h-5">
                        <path
                            d="M22,0H2C0.895,0,0,0.895,0,2v20c0,1.105,0.895,2,2,2h11v-9h-3v-4h3V8.413c0-3.1,1.893-4.788,4.659-4.788 c1.325,0,2.463,0.099,2.795,0.143v3.24l-1.918,0.001c-1.504,0-1.795,0.715-1.795,1.763V11h4.44l-1,4h-3.44v9H22c1.105,0,2-0.895,2-2 V2C24,0.895,23.105,0,22,0z"
                        ></path>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</div>
