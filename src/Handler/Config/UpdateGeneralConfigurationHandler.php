<?php

declare(strict_types=1);

namespace izi\prestashop\Handler\Config;

use izi\prestashop\CacheClearer\CacheClearerInterface;
use izi\prestashop\Command\Config\UpdateGeneralConfigurationCommand;
use izi\prestashop\Configuration\ApiConfiguration;
use izi\prestashop\Configuration\ApiConfigurationInterface;
use izi\prestashop\Configuration\GeneralConfiguration;
use izi\prestashop\Configuration\GeneralConfigurationInterface;
use izi\prestashop\Configuration\OrdersConfiguration;
use izi\prestashop\Configuration\OrdersConfigurationInterface;
use izi\prestashop\Configuration\ProductConfiguration;
use izi\prestashop\Configuration\ProductConfigurationInterface;
use izi\prestashop\Handler\CommandHandlerTrait;

if (!defined('_PS_VERSION_')) {
    exit;
}

final class UpdateGeneralConfigurationHandler implements UpdateGeneralConfigurationHandlerInterface
{
    use CommandHandlerTrait;

    /**
     * @var ApiConfiguration
     */
    private $apiConfiguration;

    /**
     * @var OrdersConfiguration
     */
    private $ordersConfiguration;

    /**
     * @var GeneralConfiguration
     */
    private $generalConfiguration;

    /**
     * @var ProductConfiguration
     */
    private $productConfiguration;

    /**
     * @var CacheClearerInterface
     */
    private $cacheClearer;

    /**
     * @var \Module
     */
    private $module;

    /**
     * @param ApiConfiguration $apiConfiguration
     * @param OrdersConfiguration $ordersConfiguration
     * @param GeneralConfiguration $generalConfiguration
     * @param ProductConfiguration $productConfiguration
     */
    public function __construct(ApiConfigurationInterface $apiConfiguration, OrdersConfigurationInterface $ordersConfiguration, GeneralConfigurationInterface $generalConfiguration, ProductConfigurationInterface $productConfiguration, CacheClearerInterface $cacheClearer, \Module $module)
    {
        $this->apiConfiguration = $apiConfiguration;
        $this->ordersConfiguration = $ordersConfiguration;
        $this->generalConfiguration = $generalConfiguration;
        $this->productConfiguration = $productConfiguration;
        $this->cacheClearer = $cacheClearer;
        $this->module = $module;
    }

    public function __invoke(UpdateGeneralConfigurationCommand $command)
    {
        $oldApiConfig = $this->apiConfiguration->copy();

        $this->apiConfiguration->persist($command->getApiConfiguration());
        $this->ordersConfiguration->persist($command->getOrdersConfiguration());
        $this->generalConfiguration->persist($command->getGeneralConfiguration());
        $this->productConfiguration->persist($command->getProductConfiguration());

        $this->module->registerHook([
            $command->getGeneralConfiguration()->getProductCardDisplayHook(),
            $command->getGeneralConfiguration()->getCheckoutButtonDisplayHook(),
            $command->getGeneralConfiguration()->getThankYouDisplayHook(),
        ]);

        if ($this->didApiConfigChange($oldApiConfig, $command->getApiConfiguration())) {
            $this->cacheClearer->clear();
        }
    }

    private function didApiConfigChange(ApiConfigurationInterface $oldConfiguration, ApiConfigurationInterface $newConfiguration): bool
    {
        if ($oldConfiguration->getClientCredentials() !== $newConfiguration->getClientCredentials()) {
            return true;
        }

        return $oldConfiguration->getEnvironment() !== $newConfiguration->getEnvironment();
    }
}
