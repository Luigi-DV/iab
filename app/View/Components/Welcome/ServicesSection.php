<?php

namespace App\View\Components\Welcome;

use Illuminate\View\Component;

class ServicesSection extends Component
{
    /**
     * @var float
     */
    public float $priceAdvance;

    /**
     * @var float
     */
    public float $pricePro;


    /**
     * Create a new component instance.
     * @param $priceAdvance
     * @param $pricePro
     * @return void
     */
    public function __construct($priceAdvance,$pricePro)
    {
        $this->priceAdvance = $priceAdvance;
        $this->pricePro = $pricePro;

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.welcome.services-section');
    }
}
