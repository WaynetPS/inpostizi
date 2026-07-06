<?php

use InPost\Izi\Upgrade\ConfigUpdaterTrait;

if (!defined('_PS_VERSION_')) {
    exit;
}

require_once __DIR__ . '/ConfigUpdaterTrait.php';

class InPostIziUpdater_2_8_0
{
    use ConfigUpdaterTrait;

    private const PAYMENT_CONFIG_KEYS = [
        'INPOST_PAY_ENABLE_ALL_PAYMENT_OPTIONS',
        'INPOST_PAY_AVAILABLE_PAYMENT_OPTIONS',
    ];

    public function __construct(\Db $db)
    {
        $this->db = $db;
    }

    public static function create(): self
    {
        return new self(\Db::getInstance());
    }

    public function upgrade(): bool
    {
        return $this->deleteConfigurationByKeys(self::PAYMENT_CONFIG_KEYS);
    }
}

/**
 * @param InPostIzi $module
 */
function upgrade_module_2_8_0(Module $module): bool
{
    return InPostIziUpdater_2_8_0::create()->upgrade();
}
