<?php namespace Anomaly\CustomersModule\Address;

use Anomaly\CustomersModule\Address\Contract\AddressInterface;
use Anomaly\CustomersModule\Customer\Contract\CustomerInterface;
use Anomaly\Streams\Platform\Model\Customers\CustomersAddressesEntryModel;

/**
 * Class AddressModel
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 * @package       Anomaly\CustomersModule\Address
 */
class AddressModel extends CustomersAddressesEntryModel implements AddressInterface
{

    /**
     * Get the first name.
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->first_name;
    }

    /**
     * Get the last name.
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->last_name;
    }

    /**
     * Get the street address.
     *
     * @return string
     */
    public function getStreetAddress()
    {
        return $this->street_address;
    }

    /**
     * Get the city.
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Get the state.
     *
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Get the postal code.
     *
     * @return string
     */
    public function getPostalCode()
    {
        return $this->postal_code;
    }

    /**
     * Get the country.
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * The related customer.
     *
     * @return CustomerInterface
     */
    public function getCustomer()
    {
        return $this->customer;
    }
}
