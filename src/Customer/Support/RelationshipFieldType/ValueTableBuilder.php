<?php namespace Anomaly\CustomersModule\Customer\Support\RelationshipFieldType;

/**
 * Class ValueTableBuilder
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 * @package       Anomaly\CustomersModule\Customer\Support\RelationshipFieldType
 */
class ValueTableBuilder extends \Anomaly\RelationshipFieldType\Table\ValueTableBuilder
{

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
        'entry.tags.labels|join(" ")',
    ];
}
