<?php 

namespace Regex\Nodes;

use Regex\RegexNode;

class OptionalNode extends RegexNode
{
    public $child;

    public function __construct($child)
    {
        $this->child = $child;
    }

    public function optional($child)
    {
        $this->child = $child;
    }
}