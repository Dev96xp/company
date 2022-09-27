<?php

namespace App\View\Components;

use Illuminate\View\Component;

class AdminLayout extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        // CREAR UNA NUEVA PLANTILLA
        // 1.Se desabilito esta vista para hacer un una platilla
        // 2.Apuntando a otra vista creada manualmente y localizada
        //   dentro de la carpeta layouts


        // return view('components.admin-layout');   ORIGINAL

        return view('layouts.admin');               //NUEVA
    }
}
