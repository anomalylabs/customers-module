<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

/**
 * Class AnomalyModuleCustomersCreateGroupsStream
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 */
class AnomalyModuleCustomersCreateGroupsStream extends Migration
{

    /**
     * The stream definition.
     *
     * @var array
     */
    protected $stream = [
        'slug'         => 'groups',
        'title_column' => 'name',
        'translatable' => true,
        'trashable'    => true,
    ];

    /**
     * The stream assignments.
     *
     * @var array
     */
    protected $assignments = [
        'name'       => [
            'required'     => true,
            'translatable' => true,
        ],
        'slug'       => [
            'unique'   => true,
            'required' => true,
        ],
        'description',
        'tax_exempt' => [
            'config' => [
                'label' => 'anomaly.module.customers::field.tax_exempt.choice.groups',
            ],
        ],
    ];

}
