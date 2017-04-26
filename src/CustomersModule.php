<?php namespace Anomaly\CustomersModule;

use Anomaly\Streams\Platform\Addon\Module\Module;

/**
 * Class CustomersModule
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 * @package       Anomaly\CustomersModule
 */
class CustomersModule extends Module
{

    /**
     * The addon icon.
     *
     * @var string
     */
    protected $icon = 'users';

    /**
     * The module sections.
     *
     * @var array
     */
    protected $sections = [
        'customers' => [
            'buttons' => [
                'new_customer',
            ],
        ],
        'addresses' => [
            'buttons' => [
                'new_address',
            ],
        ],
        'groups'    => [
            'buttons' => [
                'new_group',
            ],
        ],
    ];

}
