<?php

namespace AppBundle\Validator\Constraints;

use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 */
class ContainsAlphanum extends Constraint
{
    // Options for your constraint are represented as public properties
    public $message = 'The string "%string%" contains an illegal character: it can only contain letters or numbers.';

    public function validateBy()
    {
        /*
         * In other words, if you create a custom Constraint (e.g. MyConstraint), 
         * Symfony will automatically look for another class, 
         * MyConstraintValidator when actually performing the validation.
         */
        return get_clas($this).'Validator';
    }
}