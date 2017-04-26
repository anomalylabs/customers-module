<?php namespace Anomaly\CustomersModule\Customer\Form;

use Anomaly\Streams\Platform\Ui\Form\FormBuilder;

/**
 * Class CustomerFormBuilder
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 * @package       Anomaly\CustomersModule\Customer\Form
 */
class CustomerFormBuilder extends FormBuilder
{

    /**
     * The form sections.
     *
     * @var array
     */
    protected $sections = [
        'customer' => [
            'tabs' => [
                'general' => [
                    'title'  => 'anomaly.module.customers::tab.general',
                    'fields' => [
                        'title',
                        'first_name',
                        'last_name',
                        'email',
                        'groups',
                        'user',
                    ],
                ],
                'contact' => [
                    'title'  => 'anomaly.module.customers::tab.contact',
                    'fields' => [
                        'phone',
                        'company',
                    ],
                ],
                'options' => [
                    'title'  => 'anomaly.module.customers::tab.options',
                    'fields' => [
                        'tags',
                        'tax_exempt',
                        'tax_number',
                        'accepts_marketing',
                    ],
                ],
            ],
        ],
        'notes'    => [
            'fields' => [
                'notes',
            ],
        ],
    ];
}
