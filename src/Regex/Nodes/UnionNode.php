<?php

namespace Regex\Nodes;

use Regex\RegexNode;

class UnionNode extends RegexNode
{
    public $left;
    public $right;

    public function __construct($left, $right)
    {
        $this->left = $left;
        $this->right = $right;
    }
    
    public function union($left, $right)
    {
        $this->left = $left;
        $this->right = $right;
    }
}