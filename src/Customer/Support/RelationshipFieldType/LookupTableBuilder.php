<?php namespace Anomaly\CustomersModule\Customer\Support\RelationshipFieldType;

/**
 * Class LookupTableBuilder
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 * @package       Anomaly\CustomersModule\Customer\Support\RelationshipFieldType
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
}
