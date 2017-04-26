<?php

return [
    'title'             => [
        'name'         => 'Title',
        'instructions' => 'Specify the customer\'s social title.',
    ],
    'first_name'        => [
        'name'         => 'First Name',
        'instructions' => 'Specify the customer\'s first name only.',
    ],
    'last_name'         => [
        'name'         => 'Last Name',
        'instructions' => 'Specify the customer\'s last name only.',
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
        'instructions' => 'The slug is used when accessing this group via the API.',
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
        'name'         => 'Tax Exempt',
        'instructions' => [
            'customers' => 'Is this customer tax exempt?',
            'groups'    => 'Are customers in this group tax exempt?',
        ],
        'choice'       => [
            'customers' => 'Customer is tax exempt',
            'groups'    => 'Customers in this group are tax exempt',
        ],
    ],
    'accepts_marketing' => [
        'name'         => 'Accepts Marketing',
        'instructions' => 'Is this customer OK with receiving marketing emails?',
        'choice'       => 'Customers accepts marketing',
    ],
    'groups'            => [
        'name'         => 'Groups',
        'instructions' => 'Specify the groups this custom belongs to.',
    ],
    'email'             => [
        'name'         => 'Email',
        'instructions' => 'Specify the customer\'s primary email address.',
    ],
    'tags'              => [
        'name'         => 'Tags',
        'instructions' => 'Tags make it easier for you to organize and find customers.',
    ],
    'customer'          => [
        'name'         => 'Customer',
        'instructions' => 'Specify the customer this address belongs to.',
    ],
    'company'           => [
        'name'         => 'Company',
        'instructions' => 'Specify the company name.',
    ],
    'phone'             => [
        'name'         => 'Phone',
        'instructions' => 'Specify the primary phone number.',
    ],
    'street_address'    => [
        'name'         => 'Street Address',
        'instructions' => 'Specify the street address.',
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
        'name'         => 'Notes',
        'instructions' => 'Enter any notes for this customer here.',
        'warning'      => 'Notes are used for internal purposes only.',
    ],
    'tax_number'        => [
        'name' => 'Tax/VAT Number',
    ],
];
