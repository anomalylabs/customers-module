<?php namespace Anomaly\CustomersModule\Customer\Contract;

use Anomaly\CustomersModule\Address\AddressCollection;
use Anomaly\CustomersModule\Group\GroupCollection;
use Anomaly\Streams\Platform\Entry\Contract\EntryInterface;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Interface CustomerInterface
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 * @package       Anomaly\CustomersModule\Customer\Contract
 */
interface CustomerInterface extends EntryInterface
{

    /**
     * Get the email.
     *
     * @return string
     */
    public function getEmail();
    
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
     * Get the related addresses.
     *
     * @return AddressCollection
     */
    public function getAddresses();

    /**
     * Return the addresses relation.
     *
     * @return HasMany
     */
    public function addresses();

    /**
     * Get the related groups.
     *
     * @return GroupCollection
     */
    public function getGroups();

    /**
     * Return whether a user is in a group.
     *
     * @param $group
     * @return bool
     */
    public function hasGroup($group);

    /**
     * Return whether a user is in
     * any of the provided groups.
     *
     * @param $groups
     * @return bool
     */
    public function hasAnyGroup($groups);
}
