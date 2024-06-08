<?php 

namespace Core;

class Validation {
    
    public static function required($value)
    {
        return strlen(trim($value)) !== 0;
    }

}