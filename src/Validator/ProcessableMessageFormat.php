<?php

declare(strict_types=1);

namespace izi\prestashop\Validator;

use Symfony\Component\Validator\Constraint;

if (!defined('_PS_VERSION_')) {
    exit;
}

/**
 * @Annotation
 * @Target({"PROPERTY", "METHOD", "ANNOTATION"})
 */
final class ProcessableMessageFormat extends Constraint
{
}
