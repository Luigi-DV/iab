<div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
    <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">
        <div>
            <p class="inline-block px-3 py-px mb-4 text-xs font-semibold tracking-wider text-teal-900 uppercase rounded-full bg-secondary-color">
                {{__('Services')}}
            </p>
        </div>
        <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold leading-none tracking-tight text-gray-900 sm:text-4xl md:mx-auto">
          <span class="relative inline-block">
            <span class="relative capitalize">{{__('Choose')}}</span>
          </span>
            <span class="lowercase">{{__('Your way')}}.</span> {{__('Advance everyday')}}.
        </h2>
        <p class="text-base text-gray-700 md:text-lg">
            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque rem aperiam, eaque ipsa quae.
        </p>
    </div>
    <div class="grid max-w-md gap-10 row-gap-8 lg:max-w-screen-lg sm:row-gap-10 lg:grid-cols-3 xl:max-w-screen-lg sm:mx-auto">
        <div class="flex flex-col transition duration-300 bg-white rounded shadow-sm hover:shadow">
            <div class="relative w-full h-48">
                <img src="https://images.pexels.com/photos/3184305/pexels-photo-3184305.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;h=750&amp;w=1260" class="object-cover w-full h-full rounded-t" alt="Plan" />
            </div>
            <div class="flex flex-col justify-between flex-grow p-8 border border-t-0 rounded-b">
                <div>
                    <div class="text-lg font-semibold">{{__('Biorecipe')}}</div>
                    <p class="text-sm text-gray-900">
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem doloremque.
                    </p>
                    <div class="mt-1 mb-4 mr-1 text-4xl font-bold sm:text-5xl">{{__('Free')}}</div>
                </div>
                <a
                    href="/"
                    class="inline-flex items-center justify-center w-full h-12 px-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md bg-primary-color hover:bg-secondary-color hover:text-black focus:shadow-outline focus:outline-none"
                >
                    {{__('Get for free')}}
                </a>
            </div>
        </div>
        <div class="flex flex-col transition duration-300 bg-white rounded shadow-sm hover:shadow">
            <div class="relative w-full h-48">
                <img src="https://images.pexels.com/photos/3183181/pexels-photo-3183181.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;h=750&amp;w=1260" class="object-cover w-full h-full rounded-t" alt="Plan" />
            </div>
            <div class="flex flex-col justify-between flex-grow p-8 border border-t-0 rounded-b">
                <div>
                    <div class="text-lg font-semibold">Advanced</div>
                    <p class="text-sm text-gray-900">
                        A flower in my garden, a mystery in my panties. Heart attack never was so close.
                    </p>
                    <div class="mt-1 mb-4 mr-1 text-4xl font-bold sm:text-5xl">€{{$priceAdvance}}</div>
                </div>
                <a
                    href="/"
                    class="inline-flex items-center justify-center w-full h-12 px-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md bg-primary-color hover:bg-secondary-color hover:text-black focus:shadow-outline focus:outline-none"
                >
                    {{__('Suscribe')}}
                </a>
            </div>
        </div>
        <div class="flex flex-col transition duration-300 bg-white rounded shadow-sm hover:shadow">
            <div class="relative w-full h-48">
                <img src="https://images.pexels.com/photos/3182743/pexels-photo-3182743.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;h=750&amp;w=1260" class="object-cover w-full h-full rounded-t" alt="Plan" />
            </div>
            <div class="flex flex-col justify-between flex-grow p-8 border border-t-0 rounded-b">
                <div>
                    <div class="text-lg font-semibold">Pro</div>
                    <p class="text-sm text-gray-900">
                        We never had the chance to. Maybe it was the eleven months he spent in the womb.
                    </p>
                    <div class="mt-1 mb-4 mr-1 text-4xl font-bold sm:text-5xl">€{{$pricePro}}</div>
                </div>
                <a
                    href="/"
                    class="inline-flex items-center justify-center w-full h-12 px-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md bg-primary-color hover:bg-secondary-color hover:text-black focus:shadow-outline focus:outline-none"
                >
                    Buy Pro
                </a>
            </div>
        </div>
    </div>
</div>
