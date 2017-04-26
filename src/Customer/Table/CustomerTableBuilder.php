<?php namespace Anomaly\CustomersModule\Customer\Table;

use Anomaly\Streams\Platform\Ui\Table\TableBuilder;
use Symfony\Component\Console\Helper\Table;

/**
 * Class CustomerTableBuilder
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 * @package       Anomaly\CustomersModule\Customer\Table
 */
class CustomerTableBuilder extends TableBuilder
{

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
                'email',
                'tags',
            ],
        ],
        'groups',
        'tax_exempt',
        'accepts_marketing',
    ];

    /**
     * The table columns.
     *
     * @var array|string
     */
    protected $columns = [
        'entry.name',
        'email',
        [
            'value'   => 'entry.groups.labels(null, "info")|join',
            'heading' => 'anomaly.module.customers::field.groups.name',
        ],
        'entry.tags.labels',
    ];

    /**
     * The table buttons.
     *
     * @var array|string
     */
    protected $buttons = [
        'edit',
        'addresses' => [
            'icon' => 'home',
            'type' => 'primary',
            'href' => 'admin/customers/addresses?customer={entry.id}',
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
     * The table options.
     *
     * @var array
     */
    protected $options = [];

    /**
     * The table assets.
     *
     * @var array
     */
    protected $assets = [];

}
