<?php 

namespace Automaton;

class Transition 
{
    public $symbol;
    public $destinyState;

    public function __construct($symbol, $destinyState)
    {   
        $this->symbol = $symbol;
        $this->destinyState = $destinyState;
    }
}