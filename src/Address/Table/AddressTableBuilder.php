<?php namespace Anomaly\CustomersModule\Address\Table;

use Anomaly\CustomersModule\Customer\Contract\CustomerInterface;
use Anomaly\Streams\Platform\Ui\Table\TableBuilder;
use Illuminate\Database\Eloquent\Builder;

/**
 * Class AddressTableBuilder
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 * @package       Anomaly\CustomersModule\Address\Table
 */
class AddressTableBuilder extends TableBuilder
{

    /**
     * The customer object.
     *
     * @var CustomerInterface|null
     */
    protected $customer = null;

    /**
     * The table filters.
     *
     * @var array|string
     */
    protected $filters = [
        'search' => [
            'fields' => [
                'first_name',
                'last_name',
                'postal_code',
                'street_address',
                'city',
            ],
        ],
    ];

    /**
     * The table columns.
     *
     * @var array|string
     */
    protected $columns = [
        'entry.name',
        'entry.street_address.lines|join(", ")',
        'postal_code',
        'state',
        'country',
    ];

    /**
     * The table buttons.
     *
     * @var array|string
     */
    protected $buttons = [
        'edit',
        'customer' => [
            'icon' => 'user',
            'type' => 'primary',
            'href' => 'admin/customers/edit/{entry.id}',
            'text' => 'anomaly.module.customers::button.customer',
        ],
    ];

    /**
     * The table actions.
     *
     * @var array|string
     */
    protected $actions = [
        'delete',
    ];

    /**
     * Fired when ready to build.
     */
    public function onReady()
    {
        if ($customer = $this->getCustomer()) {

            $this->setOption('sortable', true);

            $this->setOption(
                'title',
                $customer->getFirstName() . ' ' . $customer->getLastName()
            );

            $this->setOption(
                'description',
                $customer->getEmail()
            );
        }
    }

    /**
     * Fired before querying.
     *
     * @param Builder $query
     */
    public function onQuerying(Builder $query)
    {
        if ($customer = $this->getCustomer()) {
            $query->where('customer_id', $customer->getId());
        }
    }

    /**
     * Get the customer.
     *
     * @return CustomerInterface|null
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * Set the customer.
     *
     * @param CustomerInterface $customer
     * @return $this
     */
    public function setCustomer(CustomerInterface $customer)
    {
        $this->customer = $customer;

        return $this;
    }

}
