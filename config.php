<?php

return [
    'production' => false,
    'baseUrl' => 'https://stupefied-spence-0b41ae.netlify.app/',
    'site' => [
        'title' => 'Joe\'s writing and photos',
        'description' => 'Joe\'s website that took 20 months to start',
        'image' => 'default-share.png',
    ],
    'owner' => [
        'name' => 'Joe Vero',
        'twitter' => 'joevero_',
        'github' => 'jvero',
    ],
    'services' => [
        'cmsVersion' => '2.10.52',
        'analytics' => 'UA-XXXXX-Y',
        'disqus' => 'artisanstatic',
        'formcarry' => 'XXXXXXXXXXXX',
        'cloudinary' => [
            'cloudName' => 'vero-dev',
            'apiKey' => '516755819211187',
        ],
    ],
    'collections' => [
        'posts' => [
            'path' => 'posts/{filename}',
            'sort' => '-date',
            'extends' => '_layouts.post',
            'section' => 'postContent',
            'isPost' => true,
            'comments' => true,
            'tags' => [],
            'hasTag' => function ($page, $tag) {
                return collect($page->tags)->contains($tag);
            },
            'prettyDate' => function ($page, $format = 'M j, Y') {
                return date($format, $page->date);
            },
        ],
        'tags' => [
            'path' => 'tags/{filename}',
            'extends' => '_layouts.tag',
            'section' => '',
            'name' => function ($page) {
                return $page->getFilename();
            },
        ],
        'photos' => [
            'path' => 'photos/{filename}',
            'sort' => '-date',
            'extends' => '_layouts.photo',
            'section' => 'postContent',
            'isPost' => true,
            'comments' => true,
            'tags' => [],
                        'hasTag' => function ($page, $tag) {
                return collect($page->tags)->contains($tag);
            },
            'prettyDate' => function ($page, $format = 'M j, Y') {
                return date($format, $page->date);
            },
        ]
    ],
];
