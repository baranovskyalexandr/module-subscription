<?php

declare(strict_types=1);

namespace PayPal\Subscription\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class SubscriptionItem extends AbstractDb
{
    private const TABLE_NAME = 'paypal_subs_subscription_item';
    private const ID_FIELD = 'id';

    /**
     * Resource initialization
     *
     * @return void
     */
    protected function _construct(): void
    {
        $this->_init(self::TABLE_NAME, self::ID_FIELD);
    }
}
