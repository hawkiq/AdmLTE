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

    'use_route_url' => false,
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
    | Admin Layout
    |--------------------------------------------------------------------------
    |
    | This Will control how dashboard should be viewed.
    |
    |
    */
    'fixed_header' => false,
    'fixed_footer' => false,
    'sidebar_minimized' => false,
    'layout_fixed' => true,


    /*
    |--------------------------------------------------------------------------
    | Admin Panel Classes
    |--------------------------------------------------------------------------
    |
    | Here you can change the look and behavior of the admin panel.
    | For sidebar,Navbar classes you can choose any Bootstrap 5 classes
    | https://getbootstrap.com/docs/5.3/utilities/background/
    |
    */

    // Auth Card Classes
    'auth_card_color' => 'card-success',
    'auth_card_fill' => false,
    'auth_card_fill_class' => '', // to make it work auth_card_fill should be true // text-bg-primary
    'auth_card_btn_color' => 'btn-outline-success',
    // Sidebar Classes
    'data_bs_theme' => 'dark',
    'classes_sidebar' => 'bg-body-secondary shadow-lg',
    // Navbar Classes
    'navbar_data_bs_theme' => 'light',
    'classes_navbar' => 'bg-body shadow-lg',

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
        'is_outline' => true, // If this set to false title header will appear.
        'color' => 'success', // primary - success - warning - danger.
        'fill_color' => false,
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
            'text' => 'main.dashboard', // Edit from lang/*/main.php
            'url' => 'dashboard', // Can be url or route
            'icon' => 'fas fa-home', // Icon from fontAwesome
            'permission' => null, // Set permission_system before using
        ],
        [
            'text' => 'main.level1',
            'icon' => 'fas fa-circle-fill',
            'permission' => null,
            'submenu' => [
                [
                    'text' => 'main.level2',
                    'icon' => 'fas fa-circle',
                ],
                [
                    'text' => 'main.level2',
                    'icon' => 'fas fa-circle',
                ],
            ],
        ],
        [
            'text' => 'main.another_link',
            'url' => 'dashboard',
            'icon' => 'fas fa-link',
            'permission' => null,
            'target' => '_blank',
        ],
    ],

    'navbar' => [
        'full_screen_widget' => true,
        'items' => [
            [
                'text' => 'main.level1',
                //'url' => 'dashboard',
                //'location' => 'right', // Location for Link in Navbar
                'target' => '_blank',
                'icon' => 'fas fa-globe',
                'icon_color' => 'text-danger',
                'label' => 'label',
                'label_color' => 'bg-danger',
                'permission' => null,
                'submenu' => [
                    [
                        'text' => 'main.level2',
                        'secondary_text' => 'Secondary Text',
                        'url' => 'dashboard',
                        'target' => '_blank',
                        'icon' => 'fas fa-flag',
                        'icon_color' => 'text-success',
                        'permission' => null,
                    ],
                    [
                        'type' => 'seperator',
                    ],
                    [
                        'text' => 'main.level2',
                        'secondary_text' => 'Secondary Text',
                        'url' => 'dashboard',
                        'target' => '_blank',
                        'icon' => 'fas fa-flag',
                        'icon_color' => 'text-warning',
                        'permission' => null,
                    ],
                ],
            ],
        ],
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
