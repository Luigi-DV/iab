<div class="bg-gray-50 rounded-full relative flex flex-col-reverse py-16 lg:py-0 lg:flex-col">
    <div class="w-full max-w-xl px-4 mx-auto md:px-0 lg:px-8 lg:py-20 lg:max-w-screen-xl">
        <div class="mb-0 lg:max-w-lg lg:pr-8 xl:pr-6">
            <h2 class="mb-5 font-sans text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl sm:leading-none md:text-center">
                The quick, brown fox<br class="hidden md:block" />
                jumps over a lazy dog
            </h2>
            <p class="mb-5 text-base text-gray-700 md:text-lg md:text-center">
                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae. explicabo.
            </p>
            <div class="mb-10 text-center md:mb-16 lg:mb-20">
                <form wire:submit.prevent="subscribe" class="flex flex-col items-center w-full mb-4 md:flex-row">
                    <input
                        placeholder="Email"
                        wire:model="subscriptionEmail"
                        type="text"
                        class="flex-grow w-full h-12 px-4 mb-3 transition duration-200 bg-white border border-gray-300 rounded shadow-sm appearance-none md:mr-2 md:mb-0 focus:border-primary-color focus:outline-none focus:shadow-outline"/>
                    <button
                        type="submit"
                        class="inline-flex items-center justify-center w-full h-12 px-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md md:w-auto bg-primary-color hover:bg-secondary-color hover:text-black focus:shadow-outline focus:outline-none">
                        Subscribe
                    </button>
                </form>
                @error('subscriptionEmail')
                    <span class="error text-red-600 text-sm">
                        *{{ $message }}
                    </span>
                @enderror
                @if (session()->has('subscribed'))
                    <span class="error text-green-600 text-sm">
                        {{ session('subscribed') }}
                    </span>
                @elseif(session()->has('errorSubscribed'))
                    <span class="error text-yellow-600 text-sm">
                        {{ session('errorSubscribed') }}
                    </span>
                @endif

            </div>


        </div>
    </div>
    <div class="inset-y-0 top-0 right-0 w-full max-w-xl px-4 mx-auto mb-6 md:px-0 lg:pl-8 lg:pr-0 lg:mb-0 lg:mx-0 lg:w-1/2 lg:max-w-full lg:absolute xl:px-0">
        <img
            class="object-cover w-full h-56 rounded shadow-lg lg:rounded-none lg:shadow-none md:h-96 lg:h-full"
            src="{{asset('img/welcome/first-section/3615514.svg')}}"
            alt="{{__('')}}"
        />
    </div>
</div>
