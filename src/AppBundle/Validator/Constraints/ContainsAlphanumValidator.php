<?php
/**
 * Created by PhpStorm.
 * User: p33t
 * Date: 26/12/16
 * Time: 00:16
 */

namespace AppBundle\Validator\Constraints;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

class ContainsAlphanumValidator extends ConstraintValidator
{
    public function validate($value, Constraint $constraint)
    {
        if (!empty($value) && !preg_match('#^[a-zA-Z0-9]+$#', $value, $matches))
        {
            /*
             * buildViolation() method takes the error message as its argument
             * and returns an instance of ConstraintViolationBuilderInterface
             */
            $this->context->buildViolation($constraint->message)
                ->setParameter('%string%', $value)
                //adds the violation to the context
                ->addViolation();
        }
    }
}