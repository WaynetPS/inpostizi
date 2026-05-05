<?php

declare(strict_types=1);

namespace izi\prestashop\Validator;

use Symfony\Component\Validator\Constraint;

if (!defined('_PS_VERSION_')) {
    exit;
}

/**
 * @Annotation
 * @Target({"CLASS", "PROPERTY", "ANNOTATION"})
 */
class InPostApiCredentials extends Constraint
{
    public function getTargets(): array
    {
        return [self::PROPERTY_CONSTRAINT, self::CLASS_CONSTRAINT];
    }
}
