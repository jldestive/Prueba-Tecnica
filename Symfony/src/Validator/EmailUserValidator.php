<?php

namespace App\Validator;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

class EmailUserValidator extends ConstraintValidator
{
    public function validate($value, Constraint $constraint)
    {
        /** @var EmailUser $constraint */

        if (null === $value || '' === $value) {
            return;
        }

        if (str_contains($value, '@example.com')) {
            $this->context->buildViolation($constraint->message)
                ->setParameter('{{ value }}', $value)
                ->addViolation();
        }
    }
}
