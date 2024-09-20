<?php

return [
    "name"=> "Articles",
    "title"=> "Module for Articles Management",
    "slug"=> "articles",
    "thumbnail"=> "https://img.site/p/300/160",
    "is_dev" => env('MODULE_ARTICLES_ENV')?true:false,
    "excerpt"=> "Manage Articles",
    "description"=> "Manage Articles",
    "download_link"=> "",
    "author_name"=> "vaah",
    "author_website"=> "https://vaah.dev",
    "version"=> "0.0.1",
    "is_migratable"=> true,
    "is_sample_data_available"=> true,
    "db_table_prefix"=> "vh_articles_",
    "providers"=> [
        "\\VaahCms\\Modules\\Articles\\Providers\\ArticlesServiceProvider"
    ],
    "aside-menu-order"=> null
];
