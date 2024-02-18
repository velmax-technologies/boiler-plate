<?php

namespace App\Livewire\Pages;

use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        seo()->title('Velmax Boiler Plate');
        seo()->description('Velmax Boiler Plate');
        seo()->meta('copyright', 'Velmax Technologies');

        return view('livewire.pages.home');
    }
}