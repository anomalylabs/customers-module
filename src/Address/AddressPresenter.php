<?php namespace Anomaly\CustomersModule\Address;

use Anomaly\CustomersModule\Address\Contract\AddressInterface;
use Anomaly\Streams\Platform\Entry\EntryPresenter;

/**
 * Class AddressPresenter
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 * @package       Anomaly\CustomersModule\Address
 */
class AddressPresenter extends EntryPresenter
{

    /**
     * The decorated object.
     * This is for IDE hints.
     *
     * @var AddressInterface
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
