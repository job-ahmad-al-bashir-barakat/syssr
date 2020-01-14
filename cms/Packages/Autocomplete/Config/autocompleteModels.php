<?php

return [
    'category' => [
        'model'   => \App\Category::class,
        'conditions' => [
            ["category_type_id" , '=' ,'request:key']
        ]
    ]
];
