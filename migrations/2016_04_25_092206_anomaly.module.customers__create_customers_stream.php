<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

/**
 * Class AnomalyModuleCustomersCreateCustomersStream
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 */
class AnomalyModuleCustomersCreateCustomersStream extends Migration
{

    /**
     * The stream definition.
     *
     * @var array
     */
    protected $stream = [
        'slug'         => 'customers',
        'title_column' => 'first_name',
        'trashable'    => true,
    ];

    /**
     * The stream assignments.
     *
     * @var array
     */
    protected $assignments = [
        'first_name' => [
            'required' => true,
        ],
        'last_name',
        'email'      => [
            'required' => true,
            'unique'   => true,
        ],
        'tags',
        'user'       => [
            'unique' => true,
        ],
        'tax_exempt' => [
            'config' => [
                'label' => 'anomaly.module.customers::field.tax_exempt.choice.customers',
            ],
        ],
        'accepts_marketing',
        'tax_number',
        'company',
        'groups',
        'phone',
        'notes',
    ];

}
