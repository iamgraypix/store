<?php

namespace Http\Forms;

use Core\ExceptionValidation;
use Core\Session;
use Core\Validation;
use Exception;

class RegisterItemForm
{
    protected $errors = [];

    public function __construct(public array $fields)
    {
        if (!Validation::required($fields['name'])) {
            $this->error('name', 'Name is required');
        }

        if (!Validation::required($fields['listing-price'])) {
            $this->error('listing-price', 'Listing price is required');
        }

        if (!Validation::required($fields['retail-price'])) {
            $this->error('retail-price', 'Retail price is required');
        }

        // prices is a number
        if (!is_numeric($fields['retail-price'])) {
            $this->error('retail-price', 'Retail price must be a number');
        }

        if (!is_numeric($fields['listing-price'])) {
            $this->error('listing-price', 'Listing price must be a number');
        }

        // retail price is not less than or equal to listing
        if ($fields['retail-price'] <= $fields['listing-price']) {
            $this->error('retail-price', 'Retail price must be greater than listing price');
        }
    }

    public static function validation($fields)
    {
        $instance = new static($fields);

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
    }

    public function failed()
    {
        return count($this->errors);
    }

    
}
