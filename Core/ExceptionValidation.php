<?php

namespace Core;

use Exception;

class ExceptionValidation extends Exception {

    public readonly array $errors;
    public readonly array $fields;

    public static function throw($errors, $fields)
    {
        $instance = new static;

        $instance->errors = $errors;
        $instance->fields = $fields;

        throw $instance;
    }

}