<?php namespace Anomaly\CustomersModule\Address\Support\RelationshipFieldType;

/**
 * Class LookupTableBuilder
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 * @package       Anomaly\CustomersModule\Address\Support\RelationshipFieldType
 */
class LookupTableBuilder extends \Anomaly\RelationshipFieldType\Table\LookupTableBuilder
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
                'postal_code',
                'street_address',
                'city',
            ],
        ],
    ];

    /**
     * The table columns.
     *
     * @var array|string
     */
    protected $columns = [
        'entry.customer.name',
        'entry.street_address.lines|join(", ")',
        'postal_code',
        'state',
        'country',
    ];
}
