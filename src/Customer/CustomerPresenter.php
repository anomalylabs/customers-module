<?php namespace Anomaly\CustomersModule\Customer;

use Anomaly\CustomersModule\Customer\Contract\CustomerInterface;
use Anomaly\Streams\Platform\Entry\EntryPresenter;

/**
 * Class CustomerPresenter
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 * @package       Anomaly\CustomersModule\Customer
 */
class CustomerPresenter extends EntryPresenter
{

    /**
     * The decorated object.
     * This is for IDE hints.
     *
     * @var CustomerInterface
     */
    protected $object;

    /**
     * Return the name.
     *
     * @return string
     */
    public function name()
    {
        return $this->object->getFirstName() . ' ' . $this->object->getLastName();
    }
}
