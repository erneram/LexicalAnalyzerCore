<?php

namespace Regex\Nodes;

use Regex\RegexNode;

# Responsabilidad de aplicar reglas matematicas del metodo directo, aqui se aplica polimorfismo
class ConcatNode extends RegexNode
{
    public $left;
    public $right;

    public function __construct($left, $right)
    {
        $this->left = $left;
        $this->right = $right;
    }

}