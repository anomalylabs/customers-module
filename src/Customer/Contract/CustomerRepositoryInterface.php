<?php namespace Anomaly\CustomersModule\Customer\Contract;

use Anomaly\Streams\Platform\Entry\Contract\EntryRepositoryInterface;

/**
 * Interface CustomerRepositoryInterface
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 * @package       Anomaly\CustomersModule\Customer\Contract
 */
interface CustomerRepositoryInterface extends EntryRepositoryInterface
{

    /**
     * Find a customer by email.
     *
     * @param $email
     * @return CustomerInterface|null
     */
    public function findByEmail($email);
}
