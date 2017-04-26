<?php namespace Anomaly\CustomersModule\Customer;

use Anomaly\CustomersModule\Customer\Contract\CustomerInterface;
use Anomaly\CustomersModule\Customer\Contract\CustomerRepositoryInterface;
use Anomaly\Streams\Platform\Entry\EntryRepository;

/**
 * Class CustomerRepository
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 * @package       Anomaly\CustomersModule\Customer
 */
class CustomerRepository extends EntryRepository implements CustomerRepositoryInterface
{

    /**
     * The entry model.
     *
     * @var CustomerModel
     */
    protected $model;

    /**
     * Create a new CustomerRepository instance.
     *
     * @param CustomerModel $model
     */
    public function __construct(CustomerModel $model)
    {
        $this->model = $model;
    }

    /**
     * Find a customer by email.
     *
     * @param $email
     * @return CustomerInterface|null
     */
    public function findByEmail($email)
    {
        return $this->model->where('email', $email)->first();
    }
}
