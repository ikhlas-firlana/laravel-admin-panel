<?php
/**
 * Created by PhpStorm.
 * User: ikhlasfirlana
 * Date: 6/3/18
 * Time: 2:56 PM
 */

namespace App\Http\Controllers;


class PageController extends Controller
{
    public function about()
    {
        return "About Us";
    }
    public function contact()
    {
        return "Contact";
    }
    public function submitContact()
    {
        return "Submitted";
    }
}