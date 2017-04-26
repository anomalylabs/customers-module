<?php namespace Anomaly\CustomersModule\Http\Controller\Admin;

use Anomaly\CustomersModule\Customer\Form\CustomerFormBuilder;
use Anomaly\CustomersModule\Customer\Table\CustomerTableBuilder;
use Anomaly\Streams\Platform\Http\Controller\AdminController;

class CustomersController extends AdminController
{

    /**
     * Display an index of existing entries.
     *
     * @param CustomerTableBuilder $table
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(CustomerTableBuilder $table)
    {
        return $table->render();
    }

    /**
     * Create a new entry.
     *
     * @param CustomerFormBuilder $form
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(CustomerFormBuilder $form)
    {
        return $form->render();
    }

    /**
     * Edit an existing entry.
     *
     * @param CustomerFormBuilder $form
     * @param                     $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function edit(CustomerFormBuilder $form, $id)
    {
        return $form->render($id);
    }
}
