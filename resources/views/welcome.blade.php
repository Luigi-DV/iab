<x-guest-layout>
    <div class="mx-auto lg:mx-20 sm:max-w-xl md:max-w-screen-xl lg:max-w-screen-xl xl:max-w-screen-xl 2xl:max-w-full">
        <section>
            <x-welcome.hero-section />
        </section>
        <section class="grid grid-cols-1 gap-8">
            <x-welcome.first-section />
            <x-welcome.services-section priceAdvance="4.99" pricePro="9.99"  />
            <livewire:subscriptions.newsletter-section />
        </section>
    </div>
</x-guest-layout>
