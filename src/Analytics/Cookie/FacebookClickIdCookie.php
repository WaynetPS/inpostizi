<?php

declare(strict_types=1);

namespace izi\prestashop\Analytics\Cookie;

use izi\prestashop\Analytics\Cookie\Factory\CookieFactoryInterface;
use izi\prestashop\Analytics\Cookie\Repository\CookieRepositoryInterface;
use izi\prestashop\Analytics\Parameters;

if (!defined('_PS_VERSION_')) {
    exit;
}

final class FacebookClickIdCookie extends GenericClickIdExtractor
{
    public function __construct(CookieFactoryInterface $cookieFactory, CookieRepositoryInterface $cookieRepository, array $options = [])
    {
        parent::__construct($cookieFactory, $cookieRepository, Parameters::FACEBOOK_CLICK_ID, $options);
    }
}
