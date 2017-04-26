<?php namespace Anomaly\CustomersModule\Address\Form;

use Anomaly\CustomersModule\Customer\Contract\CustomerInterface;
use Anomaly\Streams\Platform\Ui\Form\FormBuilder;

/**
 * Class AddressFormBuilder
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 * @package       Anomaly\CustomersModule\Address\Form
 */
class AddressFormBuilder extends FormBuilder
{

    /**
     * The customer interface.
     *
     * @var CustomerInterface|null
     */
    protected $customer = null;

    /**
     * The form sections.
     *
     * @var array
     */
    protected $sections = [
        'customer' => [
            'fields' => [
                'name',
                'customer',
            ],
        ],
        'address'  => [
            'tabs' => [
                'contact' => [
                    'title'  => 'anomaly.module.customers::tab.contact',
                    'fields' => [
                        'first_name',
                        'last_name',
                        'phone',
                        'company',
                    ],
                ],
                'address' => [
                    'title'  => 'anomaly.module.customers::tab.address',
                    'fields' => [
                        'street_address',
                        'city',
                        'state',
                        'postal_code',
                        'country',
                    ],
                ],
            ],
        ],
    ];

    /**
     * Fired when the ready to build.
     */
    public function onReady()
    {
        if ($customer = $this->getCustomer()) {
            $this->skipField('customer');
        }
    }

    /**
     * Fired just before saving.
     */
    public function onSaving()
    {
        $entry = $this->getFormEntry();

        if ($customer = $this->getCustomer()) {
            $entry->setAttribute('customer_id', $customer->getId());
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
