<?php

namespace PrestaShop\Module\PsEventbus\Config;

class Config
{
    public const PROXY_TIMEOUT = 30;
    public const REFRESH_TOKEN_ERROR_CODE = 452;
    public const ENV_MISCONFIGURED_ERROR_CODE = 453;
    public const DATABASE_QUERY_ERROR_CODE = 454;
    public const DATABASE_INSERT_ERROR_CODE = 455;
    public const PS_FACEBOOK_NOT_INSTALLED = 456;
    public const INVALID_URL_QUERY = 458;
    public const INVALID_PS_ACCOUNTS_VERSION = 459;
    public const PS_ACCOUNTS_NOT_INSTALLED = 460;

    public const HTTP_STATUS_MESSAGES = [
        self::REFRESH_TOKEN_ERROR_CODE => 'Cannot refresh token',
        self::ENV_MISCONFIGURED_ERROR_CODE => 'Environment misconfigured',
        self::DATABASE_QUERY_ERROR_CODE => 'Database syntax error',
        self::DATABASE_INSERT_ERROR_CODE => 'Failed to write to database',
        self::PS_FACEBOOK_NOT_INSTALLED => 'Cannot sync Taxonomies without Facebook module',
        self::INVALID_URL_QUERY => 'Invalid URL query',
        self::INVALID_PS_ACCOUNTS_VERSION => 'Invalid PsAccounts version',
        self::PS_ACCOUNTS_NOT_INSTALLED => 'PsAccounts not installed',
    ];

    public const COLLECTION_CARRIERS = 'carriers';
    public const COLLECTION_CARTS = 'carts';
    public const COLLECTION_CART_PRODUCTS = 'cart_products';
    public const COLLECTION_CATEGORIES = 'categories';
    public const COLLECTION_CURRENCIES = 'currencies';
    public const COLLECTION_SPECIFIC_PRICES = 'specific_prices';
    public const COLLECTION_CUSTOM_PRODUCT_CARRIERS = 'custom_product_carriers';
    public const COLLECTION_CUSTOMERS = 'customers';
    public const COLLECTION_TAXONOMIES = 'taxonomies';
    public const COLLECTION_MODULES = 'modules';
    public const COLLECTION_ORDERS = 'orders';
    public const COLLECTION_ORDER_DETAILS = 'order_details';
    public const COLLECTION_ORDER_STATUS_HISTORY = 'order_status_history';
    public const COLLECTION_PRODUCTS = 'products';
    public const COLLECTION_PRODUCT_ATTRIBUTES = 'attributes';
    public const COLLECTION_DELETED = 'deleted';
    public const COLLECTION_SHOPS = 'shops';
    public const COLLECTION_THEMES = 'themes';
    public const COLLECTION_BUNDLES = 'bundles';
}
