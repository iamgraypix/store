<?php

namespace Core;

use Exception;

class Container {

    protected $bindings = [];

    public function bind($key, $resolver)
    {
        $this->bindings[$key] = $resolver;
    }


    public function resolve($key)
    {
        $resolver =  $this->bindings[$key];

        if (!$resolver){
            throw new Exception("No found bindings for {$key}.");
        }

        return call_user_func($resolver);
    }

}