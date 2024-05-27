<?php

return [
    /**
     * Control if the seeder should create a user per role while seeding the data.
     */
    'create_users' => true,

    /**
     * Control if all the laratrust tables should be truncated before running the seeder.
     */
    'truncate_tables' => true,

    'roles_structure' => [
        'administrator' => [
            'users' => 'c,r,u,d',
            'payments' => 'c,r,u,d',
            'profile' => 'r,u'
        ],
        'manager' => [
            'users' => 'c,r,u,d',
            'categories' => 'c,r,u,d',
            'profile' => 'r,u',
            'meals' => 'c,r,u,d',
            'images' => 'c,r,u,d',
            'orders' => 'r',
            'payments' => 'r',
        ],
        'customer' => [
            'categories' => 'r',
            'profile' => 'c,r,u',
            'meals' => 'c,r,u,d',
            'images' => 'c,r,u,d',
            'orders' => 'c,u,d,r',
            'payments' => 'r,c',
        ],

    ],

    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete'
    ]
];
