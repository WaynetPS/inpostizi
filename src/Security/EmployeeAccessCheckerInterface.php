<?php

declare(strict_types=1);

namespace izi\prestashop\Security;

if (!defined('_PS_VERSION_')) {
    exit;
}

interface EmployeeAccessCheckerInterface
{
    public function isGranted(string $role, int $profileId): bool;
}
