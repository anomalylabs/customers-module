<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

/**
 * Class AnomalyModuleCustomersCreateCustomersFields
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 */
class AnomalyModuleCustomersCreateCustomersFields extends Migration
{

    /**
     * The addon fields.
     *
     * @var array
     */
    protected $fields = [
        'first_name'        => 'anomaly.field_type.text',
        'last_name'         => 'anomaly.field_type.text',
        'email'             => 'anomaly.field_type.email',
        'name'              => 'anomaly.field_type.text',
        'company'           => 'anomaly.field_type.text',
        'phone'             => 'anomaly.field_type.text',
        'street_address'    => 'anomaly.field_type.textarea',
        'city'              => 'anomaly.field_type.text',
        'postal_code'       => 'anomaly.field_type.text',
        'country'           => 'anomaly.field_type.country',
        'state'             => 'anomaly.field_type.state',
        'tags'              => 'anomaly.field_type.tags',
        'description'       => 'anomaly.field_type.textarea',
        'tax_number'        => 'anomaly.field_type.text',
        'tax_exempt'        => [
            'type'   => 'anomaly.field_type.boolean',
            'config' => [
                'mode' => 'checkbox',
            ],
        ],
        'accepts_marketing' => [
            'type'   => 'anomaly.field_type.boolean',
            'config' => [
                'mode'  => 'checkbox',
                'label' => 'anomaly.module.customers::field.accepts_marketing.choice',
            ],
        ],
        'slug'              => [
            'type'   => 'anomaly.field_type.slug',
            'config' => [
                'slugify' => 'name',
            ],
        ],
        'user'              => [
            'type'   => 'anomaly.field_type.relationship',
            'config' => [
                'mode'    => 'lookup',
                'related' => 'Anomaly\UsersModule\User\UserModel',
            ],
        ],
        'customer'          => [
            'type'   => 'anomaly.field_type.relationship',
            'config' => [
                'mode'    => 'lookup',
                'related' => 'Anomaly\CustomersModule\Customer\CustomerModel',
            ],
        ],
        'groups'            => [
            'type'   => 'anomaly.field_type.multiple',
            'config' => [
                'related' => 'Anomaly\CustomersModule\Group\GroupModel',
            ],
        ],
        'notes'             => [
            'type'   => 'anomaly.field_type.textarea',
            'config' => [
                'rows' => 12,
            ],
        ],
    ];

}
