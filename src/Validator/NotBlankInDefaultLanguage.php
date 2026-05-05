<?php

declare(strict_types=1);

namespace izi\prestashop\Validator;

use Symfony\Component\Validator\Constraint;

if (!defined('_PS_VERSION_')) {
    exit;
}

/**
 * @Annotation
 * @Target({"PROPERTY", "ANNOTATION"})
 */
final class NotBlankInDefaultLanguage extends Constraint
{
    /**
     * @var string
     */
    public $message = 'The field %field_name% is required at least in your default language.';

    /**
     * @var string
     */
    public $fieldName = '';

    public function getDefaultOption(): string
    {
        return 'fieldName';
    }
}
