<?php

namespace Regex;

# Encapsula la expresion original, valida y normaliza. Delega construccion del arbol
class RegularExpression
{
    public $expresion;
    
    public function __construct($expresion)
    {
        $this->expresion = $expresion;
    }
}