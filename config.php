<?php

use Illuminate\Support\Str;

return [
    'production' => false,
    'baseUrl' => 'https://martdingley.test',
    'siteName' => 'Mart Dingley',
    'siteDescription' => 'Offering close to 20 years experience building and designing in the web space, specialising in web applications utilising APIs using PHP, MySQL, HTML, CSS & JavaScript.',
    'collections' => [
        'playground' => [
            'path' => '{collection}/{filename}',
            'sort' => ['-featured','-date'],
        ],
        'bakery' => [
            'items' => [
                ['thumb' => '_0017_IMG_20210113_085310.jpg',],
                ['thumb' => '_0000_IMG_20220412_121728_Bokeh.jpg',],
                ['thumb' => '_0001_IMG_20220412_121558.jpg',],
                ['thumb' => '_0002_IMG_20220412_121342.jpg',],
                ['thumb' => '_0003_IMG_20220412_121305.jpg',],
                ['thumb' => '_0004_IMG_20220412_121209.jpg',],
                ['thumb' => '_0005_IMG_20220330_112500_Bokeh.jpg',],
                ['thumb' => '_0006_IMG_20220330_112414.jpg',],
                ['thumb' => '_0007_IMG_20220323_065349.jpg',],
                ['thumb' => '_0008_IMG_20220305_093102.jpg',],
                ['thumb' => '_0009_IMG_20220305_093048.jpg',],
                ['thumb' => '_0010_IMG_20220216_080134.jpg',],
                ['thumb' => '_0011_IMG_20220216_075909.jpg',],
                ['thumb' => '_0012_IMG_20220115_121025.jpg',],
                ['thumb' => '_0013_IMG_20211127_091143.jpg',],
                ['thumb' => '_0014_IMG_20211103_090629.jpg',],
                ['thumb' => '_0015_IMG_20210424_134933.jpg',],
                ['thumb' => '_0016_IMG_20210227_131240.jpg',],
            ]
        ]
    ],

    'isActive' => function ($page, $path) {
        return Str::contains($page->getPath(), trimPath($path));
        // return Str::endsWith(trimPath($page->getPath()), trimPath($path));
    },

    'getImage' => function($page){

        $destinationPath =  '/assets/img' . $page->getPath() . '/og-image.jpg';

        if(file_exists(public_path($destinationPath))){
            return url($destinationPath);
        }

        return url('/assets/img/og-image.jpg');

    },


    'collectonFill' => function ($page, $collection, $divider = 5) {
        $total = $collection->count();
        $totalArraySize = ceil($total / $divider);

        $fill = ($totalArraySize * $divider)  - $total;

        return $fill;
    },

    'bakeryImageFromFile' => function ($page, $file = '') {
        preg_match('/(IMG)(.+)/', $file, $matches);

        return current($matches);
    }

    //  preg_match('/(?<=\IMG_).*/', '_0006_IMG_20220330_112414.jpg', $matches);



];
