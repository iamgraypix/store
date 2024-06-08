<?php

namespace Core;

use Core\ExceptionValidation;

class Form
{
    protected $errors = [];
    protected $fields = [];

    public static function validation($fields)
    {
        $instance = new static($fields);
        $instance->fields = $fields;

        return $instance->failed() ? $instance->throw() : $instance;
    }

    public function throw()
    {
        ExceptionValidation::throw($this->errors(), $this->fields);
    }

    public function errors()
    {
        return $this->errors;
    }

    public function error($key, $message)
    {
        $this->errors[$key] = $message;
        return $this;
    }

    public function failed()
    {
        return count($this->errors);
    }
}
