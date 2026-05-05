<?php

declare(strict_types=1);

namespace InPost\Izi\Upgrade;

use izi\prestashop\Translation\MessageHandler\ImportTranslationsHandler;

if (!defined('_PS_VERSION_')) {
    exit;
}

/**
 * @internal
 */
trait TranslationImporterTrait
{
    /**
     * @var \Module
     */
    private $module;

    /**
     * @var string
     */
    private $psVersion = _PS_VERSION_;

    private function importTranslations(): bool
    {
        if (\Tools::version_compare($this->psVersion, '1.7.8', '>=')) {
            return true;
        }

        try {
            ImportTranslationsHandler::importModuleTranslations($this->module);

            return true;
        } catch (\Exception $e) {
            return false;
        }
    }
}
