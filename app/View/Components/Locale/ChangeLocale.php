<?php

namespace App\View\Components\Locale;

use Illuminate\View\Component;

class ChangeLocale extends Component
{
    public array $locales;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->locales = [
            [
                'name'=>'english',
                'locale' => 'en',
            ],
            [
                'name'=>'spanish',
                'locale' => 'es',
            ],
        ];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.locale.change-locale');
    }
}
