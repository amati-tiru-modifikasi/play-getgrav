<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/Users/RSUP/DEV/PHP/play-gravcms/user/config/site.yaml',
    'modified' => 1637105247,
    'data' => [
        'title' => 'Grav',
        'author' => [
            'name' => 'Joe Bloggs',
            'email' => 'joe@test.com'
        ],
        'blog' => [
            'route' => ''
        ],
        'metadata' => [
            'description' => 'Grav is an easy to use, yet powerful, open source flat-file CMS'
        ],
        'taxonomies' => [
            0 => 'category',
            1 => 'tag',
            2 => 'month'
        ],
        'redirects' => [
            '/changelog' => '/blog/the-urban-jungle'
        ],
        'routes' => [
            '/something/else' => '/blog/focus-and-blur',
            '/another/one/(.*)' => '/blog/$1'
        ]
    ]
];
