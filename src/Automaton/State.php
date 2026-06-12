<?php 

namespace Automaton;

class State {
    public $id;
    public $positions;
    public $transitions;
    public $esFinal;

    public function __construct($id, $positions, $transitions, $esFinal)
    {
        $this->id = $id;
        $this->positions = $positions;
        $this->transitions = $transitions;
        $this->esFinal = $esFinal;
    }
}