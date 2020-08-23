<?php

namespace App\Http\Controllers;

use App\Footer;
use App\Header;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function main()
    {
        $header = Header::first() ?? new Header;
        $footer = Footer::first() ?? new Footer;
        return view('index',compact('header','footer'));

    }
}

