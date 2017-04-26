<?php namespace Anomaly\CustomersModule\Address\Contract;

use Anomaly\CustomersModule\Customer\Contract\CustomerInterface;
use Anomaly\Streams\Platform\Entry\Contract\EntryInterface;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Interface AddressInterface
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 * @package       Anomaly\CustomersModule\Address\Contract
 */
interface AddressInterface extends EntryInterface
{

    /**
     * Get the first name.
     *
     * @return string
     */
    public function getFirstName();

    /**
     * Get the last name.
     *
     * @return string
     */
    public function getLastName();

    /**
     * Get the street address.
     *
     * @return string
     */
    public function getStreetAddress();

    /**
     * Get the city.
     *
     * @return string
     */
    public function getCity();

    /**
     * Get the state.
     *
     * @return string
     */
    public function getState();

    /**
     * Get the postal code.
     *
     * @return string
     */
    public function getPostalCode();

    /**
     * Get the country.
     *
     * @return string
     */
    public function getCountry();

    /**
     * The related customer.
     *
     * @return CustomerInterface
     */
    public function getCustomer();

    /**
     * The customer relation.
     *
     * @return BelongsTo
     */
    public function customer();
}
