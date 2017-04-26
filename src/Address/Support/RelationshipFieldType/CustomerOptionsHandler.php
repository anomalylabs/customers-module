<?php namespace Anomaly\CustomersModule\Address\Support\RelationshipFieldType;

use Anomaly\CustomersModule\Address\Contract\AddressInterface;
use Anomaly\CustomersModule\Customer\Contract\CustomerInterface;
use Anomaly\RelationshipFieldType\RelationshipFieldType;

/**
 * Class CustomerOptionsHandler
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 * @package       Anomaly\CustomersModule\Address\Support\RelationshipFieldType
 */
class CustomerOptionsHandler
{

    /**
     * Handle the options.
     *
     * @param RelationshipFieldType $fieldType
     */
    public function handle(RelationshipFieldType $fieldType)
    {
        /* @var CustomerInterface $customer */
        if (!$customer = $fieldType->getEntry()) {

            $fieldType->setOptions([]);

            return;
        }

        $addresses = $customer->getAddresses();

        $fieldType->setOptions(
            array_combine(
                $addresses->lists('id')->all(),
                $addresses->map(
                    function (AddressInterface $address) {
                        return $address->getStreetAddress();
                    }
                )->all()
            )
        );
    }
}
