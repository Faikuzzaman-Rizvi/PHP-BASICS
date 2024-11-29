<?php

$complexArray = [
    'users' => [
        [
            'id' => 1,
            'name' => 'John Doe',
            'email' => 'johndoe@example.com',
            'roles' => ['Admin', 'Editor'],
            'profile' => [
                'age' => 29,
                'gender' => 'Male',
                'address' => [
                    'street' => '123 Main St',
                    'city' => 'Springfield',
                    'state' => 'IL',
                    'zip' => '62704',
                ],
            ],
            'preferences' => [
                'theme' => 'dark',
                'notifications' => true,
            ],
        ],
        [
            'id' => 2,
            'name' => 'Jane Smith',
            'email' => 'janesmith@example.com',
            'roles' => ['Subscriber'],
            'profile' => [
                'age' => 34,
                'gender' => 'Female',
                'address' => [
                    'street' => '456 Elm St',
                    'city' => 'Hometown',
                    'state' => 'TX',
                    'zip' => '77001',
                ],
            ],
            'preferences' => [
                'theme' => 'light',
                'notifications' => false,
            ],
        ],
    ],
    'products' => [
        [
            'id' => 101,
            'name' => 'Wireless Mouse',
            'price' => 25.99,
            'categories' => ['Electronics', 'Accessories'],
            'stock' => 120,
            'details' => [
                'brand' => 'LogiTech',
                'color' => 'Black',
                'features' => ['Wireless', 'Ergonomic'],
            ],
        ],
        [
            'id' => 102,
            'name' => 'Gaming Keyboard',
            'price' => 89.99,
            'categories' => ['Electronics', 'Gaming'],
            'stock' => 45,
            'details' => [
                'brand' => 'Razer',
                'color' => 'RGB',
                'features' => ['Mechanical', 'Customizable Keys'],
            ],
        ],
    ],
    'orders' => [
        [
            'order_id' => 5001,
            'user_id' => 1,
            'total' => 115.98,
            'status' => 'Shipped',
            'items' => [
                [
                    'product_id' => 101,
                    'quantity' => 2,
                    'price' => 25.99,
                ],
                [
                    'product_id' => 102,
                    'quantity' => 1,
                    'price' => 89.99,
                ],
            ],
        ],
        [
            'order_id' => 5002,
            'user_id' => 2,
            'total' => 25.99,
            'status' => 'Pending',
            'items' => [
                [
                    'product_id' => 101,
                    'quantity' => 1,
                    'price' => 25.99,
                ],
            ],
        ],
    ],
];

// $user = json_encode($complexArray,JSON_PRETTY_PRINT);
// $file = file_put_contents("user.json", $user);

$fileRead = file_get_contents("user.json");

$users = json_decode($fileRead, true);
echo $users['users'][0]['roles'][1];