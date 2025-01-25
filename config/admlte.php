<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Title
    |--------------------------------------------------------------------------
    |
    | Here you can change the default title of your admin panel.
    |
    |
    */

    'title' => 'Home',
    'title_prefix' => 'My Admin | ',
    'website_name' => 'OsaMa Soft',

    /*
    |--------------------------------------------------------------------------
    | Right to left Languages
    |--------------------------------------------------------------------------
    |
    | to make dashboard take the right direction put a list of rtl languages here
    |
    |
    */

    'rtl_languages' => [
        'ar',  // Arabic
        'he',  // Hebrew
        'fa',  // Persian (Farsi)
        'ur',  // Urdu
        'ps',  // Pashto
        'syr', // Syriac
        'prs', // Dari (Afghanistan)
        'sd',  // Sindhi
        'dv',  // Dhivehi (Maldives)
        'ku',  // Kurdish (Sorani)
        'yi',  // Yiddish
        'tg',  // Tajik
        'jv',  // Javanese (with some RTL usage)
    ],


    /*
    |--------------------------------------------------------------------------
    | Favicon
    |--------------------------------------------------------------------------
    |
    | Here you can activate the favicon and change tile colors.
    |
    |
    */

    'use_ico' => false,
    'use_full' => true,
    'full_mask_icon' => "#5bbad5",
    'full_theme_color' => "#000",
    'full_tile_color' => "#da532c",

    /*
    |--------------------------------------------------------------------------
    | Google Fonts
    |--------------------------------------------------------------------------
    |
    | Here you can allow or not the use of external google fonts. Disabling the
    | google fonts may be useful if your admin panel internet access is
    | restricted somehow.
    |
    |
    */

    'google_fonts' => true,


    /*
    |--------------------------------------------------------------------------
    | URLs
    |--------------------------------------------------------------------------
    |
    | Here we can modify the url settings of the admin panel.
    |
    |
    */

    'dashboard_url' => 'dashboard',
    'logout_url' => 'logout',
    'login_url' => 'login',
    'register_url' => 'register',
    'password_reset_url' => false,
    'password_email_url' => false,

    /*
    |--------------------------------------------------------------------------
    | User Menu
    |--------------------------------------------------------------------------
    |
    | Here you can activate and change the user menu.
    |
    |
    */

    'usermenu_header' => false,
    'usermenu_header_class' => 'text-bg-primary',

    /*
    |--------------------------------------------------------------------------
    | Admin Panel Classes
    |--------------------------------------------------------------------------
    |
    | Here you can change the look and behavior of the admin panel.
    |
    |
    */

    'auth_card_color' => 'card-success',
    'auth_card_fill' => false,
    'auth_card_fill_class' => '', // to make it work auth_card_fill should be true // text-bg-primary
    'auth_card_btn_color' => 'btn-outline-success',
    'data_bs_theme' => 'dark',
    'classes_sidebar' => 'bg-body-secondary shadow-lg',

    /*
    |--------------------------------------------------------------------------
    | Admin Panel Logo
    |--------------------------------------------------------------------------
    |
    | Here you can change the logo of your admin panel.
    |
    |
    */

    'logo' => '',
    'logo_img' => 'vendor/admlte/images/logo.png',
    'logo_img_class' => 'brand-image',
    'logo_img_xl' => 'vendor/admlte/images/logo.png',
    'logo_img_xl_class' => 'brand-image-xs',
    'logo_img_alt' => 'AdmLTE Logo',


    /*
    |--------------------------------------------------------------------------
    | loading Animation ( Deprecated )
    |--------------------------------------------------------------------------
    |
    | Here you can change the loading animation configuration.
    |
    |
    */

    // 'loading' => [
    //     'enabled' => true,
    //     'img' => [
    //         'path' => 'vendor/admlte/images/logo.png',
    //         'alt' => 'hawkiq Preloader Image',
    //         'effect' => 'animation__shake',
    //         'width' => 60,
    //         'height' => 60,
    //     ],
    // ],

    /*
    |--------------------------------------------------------------------------
    | Permission System
    |--------------------------------------------------------------------------
    |
    | This Will used to filter Menu items based on Permission System you have.
    |
    |
    */
    'permission_system' => 'gate', // Options: 'gate' or 'laratrust'

    /*
    |--------------------------------------------------------------------------
    | Card View
    |--------------------------------------------------------------------------
    |
    | This Will use card wrapping whole contents.
    |
    |
    */
    'use_card' => [
        'enabled' => true,
        'is_outline' => true,
        'color' => 'card-success',
        'fill_color' => null, // can use 'text-bg-*'
    ],


    /*
    |--------------------------------------------------------------------------
    | Menu Items
    |--------------------------------------------------------------------------
    |
    | Here we can modify the sidebar/top navigation of the admin panel.
    |
    |
    */

    'sidebar' => [
        [
            'type' => 'header',
            'text' => 'main.navigation',
            'permission' => null,
        ],
        [
            'type' => 'link',
            'text' => 'main.dashboard',
            'route' => 'dashboard',
            'icon' => 'fas fa-home',
            'permission' => null,
        ],
        [
            'type' => 'link',
            'text' => 'main.level1',
            'route' => null,
            'icon' => 'fas fa-circle-fill',
            'submenu' => [
                [
                    'text' => 'main.level2',
                    'route' => null,
                    'icon' => 'fas fa-circle',
                ],
                [
                    'text' => 'main.level2',
                    'route' => null,
                    'icon' => 'fas fa-circle',
                ],
            ],
            'permission' => null,
        ],
        [
            'type' => 'link',
            'text' => 'main.another_link',
            'route' => 'dashboard',
            'icon' => 'fas fa-link',
            'permission' => null,
        ],
    ],

    'navbar' => [
        'items' => [
            [
                'text' => 'main.dashboard',
                'route' => 'dashboard',
                'class' => 'active',
                'target' => '_blank',
                'icon' => 'fas fa-home',
                'icon_color' => 'danger',
                'label' => 'label',
                'label_color' => 'warning',
                'submenu' => [],
                'permission' => null,
            ],
        ],
        'full_screen_widget' => true,

    ],


    /*
    |--------------------------------------------------------------------------
    | Plugins Initialization
    |--------------------------------------------------------------------------
    |
    | Here we can modify the plugins used inside the admin panel.
    |
    |
    */


    'plugins' => [
        'Pace' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/themes/blue/pace-theme-center-radar.min.css',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.min.js',
                ],
            ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Livewire
    |--------------------------------------------------------------------------
    |
    | Here we can enable the Livewire support.
    |
    |
    */

    'livewire' => false,

    /*
    |--------------------------------------------------------------------------
    | jquery
    |--------------------------------------------------------------------------
    |
    | Since Bootstrap 5 can works without jquery So I made including it Optional.
    |
    |
    */

    'jquery' => false,

    /*
    |--------------------------------------------------------------------------
    | Assets Bundling ( Experimental )
    |--------------------------------------------------------------------------
    |
    | Default behavouir is assets from public vendor as files But If you prefer.
    | Using vite bundling you can mark this option as true.notice this is just 
    | Test feature done during testing filament So it might works as you desire .
    |
    */

    'vite' => false,

    /*
    |--------------------------------------------------------------------------
    | Filament Assets ( Experimental )
    |--------------------------------------------------------------------------
    |
    | I've tried to make this package can run anything without any problems.
    | So I tried to implement Filament as study case to make it work, you should
    | set vite to true then continue with Filament installations.
    |
    */

    'filament' => false,
];
