<?php 

namespace Regex\Nodes;

use Regex\RegexNode;

class SymbolNode extends RegexNode
{
    public $symbol;

    public function __construct($symbol)
    {
        $this->symbol = $symbol;
    }

    public function symbol($symbol)
    {
        $this->symbol = $symbol;
    }

}