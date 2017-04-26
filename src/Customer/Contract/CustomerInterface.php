<?php namespace Anomaly\CustomersModule\Customer\Contract;

use Anomaly\CustomersModule\Address\AddressCollection;
use Anomaly\CustomersModule\Address\Contract\AddressInterface;
use Anomaly\CustomersModule\Group\GroupCollection;
use Anomaly\Streams\Platform\Entry\Contract\EntryInterface;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
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
     * Get the related default address.
     *
     * @return AddressInterface|null
     */
    public function getDefaultAddress();

    /**
     * Return the default address relation.
     *
     * @return BelongsTo
     */
    public function defaultAddress();

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

    /**
     * Return the groups relation.
     *
     * @return BelongsToMany
     */
    public function groups();
}
