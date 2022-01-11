<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => 'C:/Users/RSUP/DEV/PHP/play-gravcms/user/pages/01.blog/blog.md',
    'modified' => 1637105247,
    'data' => [
        'header' => [
            'title' => 'Home',
            'sitemap' => [
                'changefreq' => 'monthly'
            ],
            'body_classes' => 'header-dark header-transparent',
            'hero_classes' => 'text-light title-h1h2 overlay-dark-gradient hero-large parallax',
            'hero_image' => 'road.jpg',
            'custom' => 'new thing',
            'blog_url' => '/blog',
            'show_sidebar' => true,
            'show_breadcrumbs' => true,
            'show_pagination' => true,
            'content' => [
                'items' => '@self.children',
                'limit' => 6,
                'order' => [
                    'by' => 'date',
                    'dir' => 'desc'
                ],
                'pagination' => true,
                'url_taxonomy_filters' => true
            ],
            'feed' => [
                'description' => 'Sample Blog Description',
                'limit' => 10
            ],
            'pagination' => true
        ],
        'frontmatter' => 'title: Home
sitemap:
    changefreq: monthly
body_classes: \'header-dark header-transparent\'
hero_classes: \'text-light title-h1h2 overlay-dark-gradient hero-large parallax\'
hero_image: road.jpg
custom: \'new thing\'
blog_url: /blog
show_sidebar: true
show_breadcrumbs: true
show_pagination: true
content:
    items: \'@self.children\'
    limit: 6
    order:
        by: date
        dir: desc
    pagination: true
    url_taxonomy_filters: true
feed:
    description: \'Sample Blog Description\'
    limit: 10
pagination: true',
        'markdown' => '# My **Grav**tastic Blog
## the ramblings of a rambler
'
    ]
];
