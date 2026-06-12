<?php

namespace Regex\Nodes;

use Regex\RegexNode;

class KleeneStarNode extends RegexNode
{
    public $child;

    public function __construct($child)
    {
        $this->child = $child;
    }

    public function kleeneStar($child)
    {
        $this->child = $child;
    }
}