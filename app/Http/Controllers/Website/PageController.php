<?php
/**
 * @author Author Name: Md Morshadun Nur
 * @email  Email: morshadunnur@gmail.com
 */

namespace App\Http\Controllers\Website;


use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function index()
    {
        return view('website.home');
    }

    public function webDevelopment()
    {
        return view('website.web-development');
    }

    public function laravel()
    {
        return view('website.laravel');
    }

    public function shopify()
    {
        return view('website.shopify');
    }
    public function product()
    {
        return view('website.product');
    }

    public function openSource()
    {
        return view('website.open-source');
    }

    public function about()
    {
        return view('website.about');
    }
}
