<div class="h-screen px-4 md:px-24 lg:px-8">
    <div class="h-full lg:-mt-24 grid gap-5 row-gap-8 lg:grid-cols-2">
        <div class="flex flex-col justify-center">
            <div class="max-w-xl 2xl:w-full mb-6 ">
                <div>
                    <p class="inline-block px-3 py-px mb-4 text-xs font-semibold tracking-wider text-green-500 uppercase rounded-full bg-green-100">
                        {{__('Naturally Organic')}}
                    </p>
                </div>
                <h2 class="max-w-xl 2xl:w-full mb-6 font-sans text-4xl font-bold tracking-tight text-gray-900 sm:text-4xl sm:leading-none">
                    {{__('We are innovating and researching')}}
                    <span class="text-purple-600 lowercase">{{__('For you')}}</span>
                </h2>
                <p class="text-base text-gray-700 md:text-lg">
                    @php
                        $value = __('It is a project in which we seek to provide information, training and resources backed by scientific research in a close, practical and effective way that allows us to enhance our health and well-being. Using the knowledge of our experts and collaborators who love life in all its forms and who believe that science can easily reach common people in a clear language to take responsibility for their health and the health of the environment that surrounds us. surrounds. It was born after many years of learning, personal and professional experimentation that allows us to advise and train more people through the internet and in person, with workshops, courses, videos, and more resources than current technology allows us.');
                    @endphp
                    {{   substr($value,0,120)}} ...
                </p>
            </div>
            <a href="/" aria-label="" class="inline-flex items-center font-semibold transition-colors duration-200 text-deep-purple-accent-400 hover:text-deep-purple-800">
                {{__('Read more')}}
                <svg class="inline-block w-3 ml-2" fill="currentColor" viewBox="0 0 12 12">
                    <path d="M9.707,5.293l-5-5A1,1,0,0,0,3.293,1.707L7.586,6,3.293,10.293a1,1,0,1,0,1.414,1.414l5-5A1,1,0,0,0,9.707,5.293Z"></path>
                </svg>
            </a>
        </div>
        <div class="flex flex-col justify-start md:justify-center">
            <x-illustrations.welcome.hero.scientists-studying-genetically-modified-food-in-laboratory-animated />
        </div>
    </div>
</div>

