<?php namespace Anomaly\CustomersModule\Http\Controller\Admin;

use Anomaly\CustomersModule\Address\Form\AddressFormBuilder;
use Anomaly\CustomersModule\Address\Table\AddressTableBuilder;
use Anomaly\CustomersModule\Customer\Contract\CustomerInterface;
use Anomaly\CustomersModule\Customer\Contract\CustomerRepositoryInterface;
use Anomaly\CustomersModule\Customer\Table\ChooseCustomerTableBuilder;
use Anomaly\Streams\Platform\Http\Controller\AdminController;

/**
 * Class AddressesController
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 * @package       Anomaly\CustomersModule\Http\Controller\Admin
 */
class AddressesController extends AdminController
{

    /**
     * Display an index of existing entries.
     *
     * @param AddressTableBuilder         $table
     * @param CustomerRepositoryInterface $customers
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(AddressTableBuilder $table, CustomerRepositoryInterface $customers)
    {
        /* @var CustomerInterface $customer */
        if ($customer = $customers->find($this->request->get('customer'))) {
            $table->setCustomer($customer);
        }

        return $table->render();
    }

    /**
     * Create a new entry.
     *
     * @param AddressFormBuilder          $form
     * @param CustomerRepositoryInterface $customers
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(AddressFormBuilder $form, CustomerRepositoryInterface $customers)
    {
        /* @var CustomerInterface $customer */
        if ($customer = $customers->find($this->request->get('customer'))) {
            $form->setCustomer($customer);
        }

        return $form->render();
    }

    /**
     * Edit an existing entry.
     *
     * @param AddressFormBuilder          $form
     * @param CustomerRepositoryInterface $customers
     * @param                             $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function edit(AddressFormBuilder $form, CustomerRepositoryInterface $customers, $id)
    {
        return $form->render($id);
    }
}
