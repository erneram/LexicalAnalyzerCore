<?php

namespace Regex\Nodes;

use Regex\RegexNode;

class PlusNode extends RegexNode
{
    public $child;

    public function __construct($child)
    {
        $this->child = $child;
    }

    public function plus($child)
    {
        $this->child = $child;
    }
}