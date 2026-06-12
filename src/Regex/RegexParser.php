<?php

namespace Regex;

# Convertir una expresion en algo procesable.
class RegexParser
{
    private $expresion;
    private $postfixExpresion;

    public function __construct($expresion)
    {   
        $this->expresion = $expresion;
    }
}