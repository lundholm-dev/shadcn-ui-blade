<?php

namespace LundholmDev\ShadcnUiBlade\Components;

use Illuminate\View\Component;

class Button extends Component
{
    public function __construct(protected string $variant = 'default', protected string $size = 'default')
    {
    }

    public function render()
    {
        return view('shadcn::button', [
            'variant' => $this->variant,
            'size' => $this->size,
        ]);
    }
}