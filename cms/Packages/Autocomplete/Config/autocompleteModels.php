<?php

return [
    'example' => [
        'model'   => \App\Example::class,
        'conditions' => [
            ["example_id" , '=' ,'request:key']
        ]
    ]
];
