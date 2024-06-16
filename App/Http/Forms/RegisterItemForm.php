<?php

namespace App\Http\Forms;


use Core\Form;
use Core\Validation;


class RegisterItemForm extends Form
{
    public function __construct($fields)
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

        if ($fields['listing-price'] <= 0) {
            $this->error('listing-price', 'Listing price cannot less or equal to 0');
        }

        if ($fields['retail-price'] <= 0) {
            $this->error('retail-price', 'Retail price cannot less or equal to 0');
        }

        // retail price is not less than or equal to listing
        if ($fields['retail-price'] <= $fields['listing-price']) {
            $this->error('retail-price', 'Retail price must be greater than listing price');
        }
    }

    
}
