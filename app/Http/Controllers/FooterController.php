<?php

namespace App\Http\Controllers;


use App\Footer;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Footer $footer
     * @return \Illuminate\Http\Response
     */
    public function edit(Footer $footer)
    {
        return view('footers.edit',compact('footer'));
    }

    public function update(Request $request , Footer $footer)
    {
       dd($request->all());

    }

}
