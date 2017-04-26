<?php namespace Anomaly\CustomersModule\Customer;

use Anomaly\CustomersModule\Address\AddressCollection;
use Anomaly\CustomersModule\Address\AddressModel;
use Anomaly\CustomersModule\Customer\Contract\CustomerInterface;
use Anomaly\CustomersModule\Group\Command\GetGroup;
use Anomaly\CustomersModule\Group\Contract\GroupInterface;
use Anomaly\CustomersModule\Group\GroupCollection;
use Anomaly\Streams\Platform\Model\Customers\CustomersCustomersEntryModel;
use Anomaly\Streams\Platform\Support\Collection;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Class CustomerModel
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 * @package       Anomaly\CustomersModule\Customer
 */
class CustomerModel extends CustomersCustomersEntryModel implements CustomerInterface
{

    /**
     * Get the email.
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

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
     * Get the related addresses.
     *
     * @return AddressCollection
     */
    public function getAddresses()
    {
        return $this->addresses;
    }

    /**
     * Return the addresses relation.
     *
     * @return HasMany
     */
    public function addresses()
    {
        return $this->hasMany(AddressModel::class, 'customer_id');
    }

    /**
     * Get the related groups.
     *
     * @return GroupCollection
     */
    public function getGroups()
    {
        return $this->groups;
    }

    /**
     * Return whether a user is in a group.
     *
     * @param $group
     * @return bool
     */
    public function hasGroup($group)
    {
        if (!is_object($group)) {
            $group = $this->dispatch(new GetGroup($group));
        }

        if (!$group) {
            return false;
        }

        /* @var GroupInterface $group */
        foreach ($groups = $this->getGroups() as $attached) {
            if ($attached->getId() === $group->getId()) {
                return true;
            }
        }

        return false;
    }

    /**
     * Return whether a user is in
     * any of the provided groups.
     *
     * @param $groups
     * @return bool
     */
    public function hasAnyGroup($groups)
    {
        if ($groups instanceof Collection) {
            $groups = $groups->all();
        }

        if (!$groups) {
            return false;
        }

        foreach ($groups as $group) {
            if ($this->hasGroup($group)) {
                return true;
            }
        }

        return false;
    }
}
