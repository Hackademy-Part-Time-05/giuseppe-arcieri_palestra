<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Main extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    protected static $logo = 
    [
        
            'display'=>'GYM',
            'img'=>'imgs/logo.png'
        
        
    ];
    protected static $navbar =
    [
        [
            'display'=>'Struttura',
            'uri'=>'/struttura',
        ],
        [
            'display'=>'I Corsi',
            'uri'=>'/corsi',
        ],
        [
            'display'=>'Contattaci',
            'uri'=>'/contatti',
        ],
        [
            'display'=>'Dove siamo',
            'uri'=>'/dove-siamo'
        ]
        ];

    public function render(): View|Closure|string
    {
        return view('layouts.main',['navbar'=>self::$navbar],['logo'=>self::$logo]);
    }
}
