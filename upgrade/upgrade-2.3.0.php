<?php

use InPost\Izi\Upgrade\CacheClearer;

if (!defined('_PS_VERSION_')) {
    exit;
}

require_once __DIR__ . '/CacheClearer.php';

class InPostIziUpdater_2_3_0
{
    public function upgrade(): bool
    {
        CacheClearer::getInstance()->clear();

        return \Configuration::updateGlobalValue('INPOST_PAY_FREE_ORDER_OS_ID', \Configuration::get('PS_OS_PAYMENT'));
    }
}

/**
 * @param InPostIzi $module
 */
function upgrade_module_2_3_0(Module $module): bool
{
    return (new InPostIziUpdater_2_3_0())->upgrade();
}
