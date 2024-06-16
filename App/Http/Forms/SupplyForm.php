<?php

namespace App\Http\Forms;

use Core\Form;
use Core\Validation;

class SupplyForm extends Form
{
    public function __construct($fields)
    {
        if (!is_numeric($fields['item'])) {
            $this->error('item', 'Please select an item.');
        }

        if ($fields['qty'] <= 0) {
            $this->error('qty', 'Quantity cannot be less than zero is required');
        }
    }
}
