<?php

namespace App\Http\Controllers;

use Helori\LaravelSeo\Seo;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public function __construct(){
//        Seo::set('global-title', 'Website name');
//        Seo::set('global-description', 'Website description');
//
//        Seo::set('logo-url', 'logo url');
//        Seo::set('search-url', 'search url for structured data');
//        Seo::set('latitude', 48.8256);
//        Seo::set('longitude', 2.3258);
//
//        Seo::set('email', 'organization email');
//        Seo::set('phone', 'organization phone');
//        Seo::set('opening-hours', 'Mo,Tu,We,Th,Fr 09:00-20:00');
//        Seo::set('street-address', '1, welcome street');
//        Seo::set('address-locality', 'Paris');
//        Seo::set('address-region', '');
//        Seo::set('address-country', 'FR');
//        Seo::set('postal-code', '75008');
//        Seo::set('area-served', 'FR');
//
//        Seo::setSimilarTo('https://www.facebook.com/my-facebook-page');
//        Seo::setSimilarTo('https://twitter.com/my-twitter-page');
//
//        Seo::setContactPoint([
//            'type' => 'customer-service',
//            'phone' => 'phone number',
//            'area-served' => 'FR',
//            'opening-hours' => 'Mo,Tu,We,Th,Fr 09:00-20:00',
//            'available-languages' => ['French']
//        ]);
//
//        Seo::set('og-locale', 'fr_FR');
//        Seo::set('og-image-url', 'facebook_image_url');
//        Seo::set('og-image-type', 'image/jpeg');
//        Seo::set('og-image-width', 1200);
//        Seo::set('og-image-height', 630);

//        Seo::set('fb-app-id', 'My facebook app ID');
//        Seo::set('twitter-sign', '@My_Twitter_Account');
    }
}
