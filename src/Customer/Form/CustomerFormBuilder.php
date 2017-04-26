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
        'customer'      => [
            'fields' => [
                'first_name',
                'last_name',
                'email',
                'phone',
                'company',
                'tax_number',
            ],
        ],
        'options'       => [
            'fields' => [
                'tax_exempt',
                'accepts_marketing',
            ],
        ],
        'relationships' => [
            'fields' => [
                'default_address',
                'groups',
                'user',
            ],
        ],
        'notes'         => [
            'fields' => [
                'notes',
            ],
        ],
    ];
}
