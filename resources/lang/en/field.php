<?php

return [
    'first_name'        => [
        'name' => 'First Name',
    ],
    'last_name'         => [
        'name' => 'Last Name',
    ],
    'name'              => [
        'name'         => 'Name',
        'instructions' => [
            'groups' => 'Specify the name of this customer group.',
        ],
        'placeholder'  => [
            'groups' => 'Wholesalers',
        ],
    ],
    'slug'              => [
        'name'         => 'Slug',
        'instructions' => 'The slug can be used when referring to this group via API.',
    ],
    'description'       => [
        'name'         => 'Description',
        'instructions' => 'Briefly describe this customer group.',
    ],
    'user'              => [
        'name'         => 'Registered User',
        'instructions' => 'Specify the user account this customer is associated with.',
    ],
    'tax_exempt'        => [
        'name'   => 'Tax Exempt',
        'choice' => [
            'customers' => 'Customer is tax exempt',
            'groups'    => 'Customers in this group are tax exempt',
        ],
    ],
    'accepts_marketing' => [
        'name'   => 'Accepts Marketing',
        'choice' => 'Customers accepts marketing',
    ],
    'groups'            => [
        'name' => 'Groups',
    ],
    'email'             => [
        'name' => 'Email',
    ],
    'tags'              => [
        'name'         => 'Tags',
        'instructions' => 'Tags make it easier for you to organize and find customers.',
    ],
    'customer'          => [
        'name'         => 'Customer',
        'instructions' => 'Who is this address for?',
    ],
    'default_address'   => [
        'name'         => 'Default Address',
        'instructions' => 'Specify the default address for this customer.',
    ],
    'company'           => [
        'name' => 'Company',
    ],
    'phone'             => [
        'name' => 'Phone',
    ],
    'street_address'    => [
        'name' => 'Street Address',
    ],
    'city'              => [
        'name' => 'City',
    ],
    'state'             => [
        'name' => 'State/Region',
    ],
    'postal_code'       => [
        'name' => 'ZIP/Postal Code',
    ],
    'country'           => [
        'name' => 'Country',
    ],
    'notes'             => [
        'name' => 'Notes',
    ],
    'tax_number'        => [
        'name' => 'Tax/VAT Number',
    ],
];
