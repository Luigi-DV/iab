<div class="relative inline-block text-left" x-data="{show: false}">
    <div @click.outside="show=false">
        <div class="mt-1 relative">
            <button @click="show = !show" type="button" class="relative w-full bg-transparent w-full pl-3 py-2 text-left cursor-default sm:text-sm cursor-pointer"  aria-haspopup="listbox" aria-expanded="true" aria-labelledby="listbox-label">
                <span class="flex items-center justify-end text-xs">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 016.412 9m6.088 9h7M11 21l5-10 5 10M12.751 5C11.783 10.77 8.07 15.61 3 18.129" />
                    </svg>
                    <span class="mx-2 block truncate">{{__('Change language')}}</span>
                    <svg x-show="!show" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                    </svg>
                    <svg x-show="show" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
                    </svg>
                </span>
            </button>
        </div>

        <ul x-show="show" class="absolute z-10 mt-1 w-full bg-white shadow-lg max-h-56 rounded-md py-1 text-base ring-1 ring-black ring-opacity-5 overflow-auto focus:outline-none sm:text-sm" tabindex="-1" role="listbox" aria-labelledby="listbox-label" aria-activedescendant="listbox-option-3">
            <!--
              Select option, manage highlight styles based on mouseenter/mouseleave and keyboard navigation.

              Highlighted: "text-white bg-indigo-600", Not Highlighted: "text-gray-900"
            -->
            @foreach($locales as $language)
                <li class="primary-navigation text-gray-900 cursor-default select-none relative py-2 pl-3 pr-9 {{ App::isLocale($language['locale']) ? 'active-navigation-link pointer-events-none' : '' }}" id="listbox-option-0" role="option">
                    <a href="{{route('locale.setting', $language['locale'])}}" class="flex items-center">
                        <span class="font-normal ml-3 block truncate capitalize"> {{$language['name']}} </span>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</div>




