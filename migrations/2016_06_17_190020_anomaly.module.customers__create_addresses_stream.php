<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

/**
 * Class AnomalyModuleCustomersCreateAddressesStream
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 */
class AnomalyModuleCustomersCreateAddressesStream extends Migration
{

    /**
     * The stream definition.
     *
     * @var array
     */
    protected $stream = [
        'slug'         => 'addresses',
        'title_column' => 'street_address',
        'trashable'    => true,
    ];

    /**
     * The stream assignments.
     *
     * @var array
     */
    protected $assignments = [
        'customer' => [
            'required' => true,
        ],
        'first_name',
        'last_name',
        'company',
        'phone',
        'street_address',
        'city',
        'postal_code',
        'country',
        'state',
    ];

}
