<?php

namespace PrestaShop\Module\PsEventbus\Tests\system\Tests\Provider;

use PrestaShop\Module\PsEventbus\Provider\CarrierDataProvider;
use PrestaShop\Module\PsEventbus\Provider\CartDataProvider;
use PrestaShop\Module\PsEventbus\Provider\CategoryDataProvider;
use PrestaShop\Module\PsEventbus\Provider\ModuleDataProvider;
use PrestaShop\Module\PsEventbus\Provider\OrderDataProvider;
use PrestaShop\Module\PsEventbus\Provider\PaginatedApiDataProviderInterface;
use PrestaShop\Module\PsEventbus\Provider\ProductDataProvider;
use PrestaShop\Module\PsEventbus\Tests\system\Tests\BaseTestCase;

class DataProviderTest extends BaseTestCase
{
    /**
     * @dataProvider getDataProviderInfo
     */
    public function testDataProviders(PaginatedApiDataProviderInterface $dataProvider)
    {
        $formattedData = $dataProvider->getFormattedData(0, 50, 'en');
        foreach ($formattedData as $data) {
            $this->assertArrayHasKey('collection', $data);
            $this->assertArrayHasKey('id', $data);
            $this->assertArrayHasKey('properties', $data);
        }
    }

    public function getDataProviderInfo()
    {
        return [
            'carrier provider' => [
                'provider' => $this->container->getService(CarrierDataProvider::class),
                ],
            'cart provider' => [
                'provider' => $this->container->getService(CartDataProvider::class),
                ],
            'category provider' => [
                'provider' => $this->container->getService(CategoryDataProvider::class),
                ],
            'modules provider' => [
                'provider' => $this->container->getService(ModuleDataProvider::class),
                ],
            'order provider' => [
                'provider' => $this->container->getService(OrderDataProvider::class),
                ],
            'product provider' => [
                'provider' => $this->container->getService(ProductDataProvider::class),
                ],
        ];
    }
}
