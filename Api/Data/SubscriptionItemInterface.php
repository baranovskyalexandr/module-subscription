<?php

declare(strict_types=1);

namespace PayPal\Subscription\Api\Data;

/**
 * Interface SubscriptionItemInterface
 */
interface SubscriptionItemInterface
{
    public const SUB_ITEM_ID = 'id';
    public const SUBSCRIPTION_ID = 'subscription_id';
    public const SKU = 'sku';
    public const PRICE = 'price';
    public const QUANTITY = 'qty';
    public const PRODUCT_ID = 'product_id';

    /**
     * @return int
     */
    public function getSubscriptionId(): int;

    /**
     * @param int $subscriptionId
     * @return SubscriptionItemInterface
     */
    public function setSubscriptionId(int $subscriptionId): SubscriptionItemInterface;

    /**
     * @return string
     */
    public function getSku(): string;

    /**
     * @param string $sku
     * @return SubscriptionItemInterface
     */
    public function setSku(string $sku): SubscriptionItemInterface;

    /**
     * @return float
     */
    public function getPrice(): float;

    /**
     * @param float $price
     * @return SubscriptionItemInterface
     */
    public function setPrice(float $price): SubscriptionItemInterface;

    /**
     * @return int
     */
    public function getQty(): int;

    /**
     * @param int $quantity
     * @return SubscriptionItemInterface
     */
    public function setQty(int $quantity): SubscriptionItemInterface;

    /**
     * @return int
     */
    public function getProductId(): int;

    /**
     * @param int $productId
     * @return SubscriptionItemInterface
     */
    public function setProductId(int $productId): SubscriptionItemInterface;
}
